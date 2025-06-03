<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Course;
use App\Models\Career;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    // Method universal untuk menampilkan form checkout
    public function show($itemType, $itemId)
    {
        $item = $this->getItemByType($itemType, $itemId);
        
        if (!$item) {
            abort(404, ucfirst($itemType) . ' not found');
        }

        // Pass individual variables ke view sesuai dengan template
        $data = [
            'itemType' => $itemType,
        ];

        // Set variable sesuai dengan tipe item
        switch ($itemType) {
            case 'course':
                $data['course'] = $item;
                break;
            case 'career':
                $data['career'] = $item;
                break;
            case 'module':
                $data['module'] = $item;
                break;
        }

        return view('pages.detail.checkout', $data);
    }

    // TAMBAHAN: Method khusus untuk course checkout (untuk backward compatibility)
    public function showCourseCheckout($courseId)
    {
        return $this->show('course', $courseId);
    }

    // TAMBAHAN: Method khusus untuk career checkout
    public function showCareerCheckout($careerId)
    {
        return $this->show('career', $careerId);
    }

    // TAMBAHAN: Method khusus untuk module checkout
    public function showModuleCheckout($moduleId)
    {
        return $this->show('module', $moduleId);
    }

    // Method untuk proses checkout
    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_type' => 'required|in:course,career,module',
            'item_id' => 'required|integer',
            'customer_name' => 'required|string|max:255',
            'organization_type' => 'required|in:individual,corporation,school',
            'country' => 'required|string|max:2',
            'payment_method' => 'required|in:card,paypal',
        ]);

        // Validasi tambahan berdasarkan organization type
        $this->validateOrganizationFields($request);

        // Validasi payment method untuk card
        if ($validated['payment_method'] === 'card') {
            $request->validate([
                'card_number' => 'required|string',
                'expiry_date' => 'required|string',
                'cvc' => 'required|string',
            ]);
        }

        // Validasi item exists
        $item = $this->getItemByType($validated['item_type'], $validated['item_id']);
        if (!$item) {
            return back()->withErrors(['item' => 'Selected item not found']);
        }

        // Tentukan status dan payment amount
        $isTrial = $request->has('trialBtn');
        $status = $isTrial ? 'trial' : 'pending';
        $paymentAmount = $isTrial ? 0 : ($item->price ?? $this->getDefaultPrice($validated['item_type']));

        // Buat checkout record
        $checkout = Checkout::create([
            'user_id' => Auth::id(),
            'item_type' => $validated['item_type'],
            'item_id' => $validated['item_id'],
            'status' => $status,
            'payment_amount' => $paymentAmount,
            'organization_type' => $validated['organization_type'],
            'corporation_name' => $request->corporation_name,
            'school_name' => $request->school_name,
            'country' => $validated['country'],
            'payment_method' => $validated['payment_method'],
            // CATATAN: Untuk production, encrypt data sensitif ini
            'card_number' => $validated['payment_method'] === 'card' ? $request->card_number : null,
            'expiry_date' => $validated['payment_method'] === 'card' ? $request->expiry_date : null,
            'cvc' => $validated['payment_method'] === 'card' ? $request->cvc : null,
        ]);

        $message = $isTrial ? 'Free trial started successfully!' : 'Checkout completed successfully!';
        
        return redirect()->route('checkout.success', $checkout->id)->with('success', $message);
    }

    // Method untuk menampilkan success page
    public function success($checkoutId)
    {
        $checkout = Checkout::where('user_id', Auth::id())->findOrFail($checkoutId);
        
        // Load item data secara manual
        $item = $this->getItemByType($checkout->item_type, $checkout->item_id);
        $checkout->item_data = $item;
        
        return view('pages.detail.success', compact('checkout'));
    }

    // Method untuk menampilkan history checkout user
    public function index()
    {
        $checkouts = Checkout::where('user_id', Auth::id())
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
        
        // Load relasi untuk setiap checkout
        $checkouts->getCollection()->each(function ($checkout) {
            switch ($checkout->item_type) {
                case 'course':
                    $checkout->load('course');
                    break;
                case 'career':
                    $checkout->load('career');
                    break;
                case 'module':
                    $checkout->load('module');
                    break;
            }
        });

        return view('checkout.index', compact('checkouts'));
    }

    // Helper method untuk mendapatkan item berdasarkan type
    private function getItemByType($itemType, $itemId)
    {
        try {
            switch ($itemType) {
                case 'course':
                    return Course::find($itemId);
                case 'career':
                    return Career::find($itemId);
                case 'module':
                    return University::find($itemId);
                default:
                    return null;
            }
        } catch (\Exception $e) {
            \Log::error("Error getting item: " . $e->getMessage());
            return null;
        }
    }

    private function validateOrganizationFields(Request $request)
    {
        if ($request->organization_type === 'corporation') {
            $request->validate([
                'corporation_name' => 'required|string|max:255'
            ]);
        } elseif ($request->organization_type === 'school') {
            $request->validate([
                'school_name' => 'required|string|max:255'
            ]);
        }
    }

    private function getDefaultPrice($itemType)
    {
        switch ($itemType) {
            case 'course':
                return 234505;
            case 'career':
                return 199000;
            case 'module':
                return 99000;
            default:
                return 0;
        }
    }
}