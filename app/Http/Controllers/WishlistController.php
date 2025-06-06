<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\University;
use App\Models\Career;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class WishlistController extends Controller
{
    public function toggle(Request $request)
    {
        try {
            // Validate request
            $request->validate([
                'item_id' => 'required|integer|min:1',
                'item_type' => 'required|in:university,course,career'
            ]);

            // Check if user is authenticated
            if (!Auth::check()) {
                return response()->json([
                    'error' => 'Unauthorized',
                    'message' => 'Please login first'
                ], 401);
            }

            $itemId = $request->item_id;
            $itemType = $request->item_type;
            $userId = Auth::id();

            // Map item types to model classes
            $morphMap = [
                'university' => University::class,
                'course' => Course::class,
                'career' => Career::class,
            ];

            $modelClass = $morphMap[$itemType];

            // Check if the item exists
            $item = $modelClass::find($itemId);
            if (!$item) {
                return response()->json([
                    'error' => 'Not Found',
                    'message' => 'Item not found'
                ], 404);
            }

            // Log the attempt
            Log::info("Wishlist toggle attempt", [
                'user_id' => $userId,
                'item_id' => $itemId,
                'item_type' => $itemType,
                'model_class' => $modelClass
            ]);

            // Check if item is already in wishlist
            $existingWishlist = Wishlist::where([
                'user_id' => $userId,
                'wishlistable_id' => $itemId,
                'wishlistable_type' => $modelClass
            ])->first();

            if ($existingWishlist) {
                // Remove from wishlist
                $existingWishlist->delete();
                
                Log::info("Item removed from wishlist", [
                    'user_id' => $userId,
                    'item_id' => $itemId,
                    'item_type' => $itemType
                ]);

                return response()->json([
                    'status' => 'removed',
                    'message' => 'Item removed from wishlist'
                ]);
            } else {
                // Add to wishlist
                $wishlist = Wishlist::create([
                    'user_id' => $userId,
                    'wishlistable_id' => $itemId,
                    'wishlistable_type' => $modelClass
                ]);

                Log::info("Item added to wishlist", [
                    'user_id' => $userId,
                    'item_id' => $itemId,
                    'item_type' => $itemType,
                    'wishlist_id' => $wishlist->id
                ]);

                return response()->json([
                    'status' => 'added',
                    'message' => 'Item added to wishlist'
                ]);
            }

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error("Validation error in wishlist toggle", [
                'errors' => $e->errors(),
                'request' => $request->all()
            ]);

            return response()->json([
                'error' => 'Validation Error',
                'message' => 'Invalid data provided',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error("Error in wishlist toggle", [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'request' => $request->all()
            ]);

            return response()->json([
                'error' => 'Server Error',
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    /**
     * Get user's wishlist items
     */
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        $type = $request->get('type'); // optional filter by type

        // Get wishlist items with relationships
        $wishlistQuery = Wishlist::where('user_id', $user->id)
                                ->with('wishlistable')
                                ->orderBy('created_at', 'desc');

        // Filter by type if specified
        if ($type && in_array($type, ['university', 'course', 'career'])) {
            $morphMap = [
                'university' => University::class,
                'course' => Course::class,
                'career' => Career::class,
            ];
            $wishlistQuery->where('wishlistable_type', $morphMap[$type]);
        }

        $wishlistItems = $wishlistQuery->get();

        return view('pages.wishlist', compact('wishlistItems'));
    }

    /**
     * Check if item is in user's wishlist (for AJAX requests)
     */
    public function check(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['in_wishlist' => false]);
        }

        $request->validate([
            'item_id' => 'required|integer|min:1',
            'item_type' => 'required|in:university,course,career'
        ]);

        $morphMap = [
            'university' => University::class,
            'course' => Course::class,
            'career' => Career::class,
        ];

        $modelClass = $morphMap[$request->item_type];

        $exists = Wishlist::where([
            'user_id' => Auth::id(),
            'wishlistable_id' => $request->item_id,
            'wishlistable_type' => $modelClass
        ])->exists();

        return response()->json(['in_wishlist' => $exists]);
    }

    /**
     * Get wishlist count for a user
     */
    public function count()
    {
        if (!Auth::check()) {
            return response()->json(['count' => 0]);
        }

        $count = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['count' => $count]);
    }

    
public function remove(Request $request)
{
    $request->validate([
        'item_id' => 'required',
        'item_type' => 'required',
    ]);

    $user = auth()->user();

    $wishlistItem = Wishlist::where('wishlistable_id', $request->item_id)
        ->where('wishlistable_type', 'App\\Models\\' . ucfirst($request->item_type))
        ->where('user_id', $user->id)
        ->first();

    if ($wishlistItem) {
        $wishlistItem->delete();
        return response()->json(['success' => true, 'message' => 'Item removed from wishlist.']);
    }

    return response()->json(['success' => false, 'message' => 'Item not found.'], 404);
}
    
}