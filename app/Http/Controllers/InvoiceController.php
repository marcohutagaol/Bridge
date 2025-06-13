<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Checkout; // Assuming your model is named Checkout
use Illuminate\Support\Facades\Storage;

class InvoiceController extends Controller
{
    /**
     * Generate and download PDF invoice
     */
    public function downloadInvoice($orderId)
    {
        // Find checkout by order_id
        // SQL: SELECT * FROM checkouts WHERE order_id = ? LIMIT 1
        // (dengan relasi user dimuat menggunakan eager loading)
        $checkout = Checkout::where('order_id', $orderId)
            ->with('user') // Load user relationship
            ->firstOrFail();

        // Generate PDF
        $pdf = Pdf::loadView('invoices.pdf', compact('checkout'));
        
        // Set paper size and orientation
        $pdf->setPaper('A4', 'portrait');
        
        // Set options for better rendering
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isPhpEnabled' => true,
            'defaultFont' => 'Arial',
            'enable_php' => true
        ]);

        // Return PDF for download
        return $pdf->download("invoice-{$checkout->order_id}.pdf");
    }

    /**
     * Generate and stream PDF invoice (view in browser)
     */
    public function viewInvoice($orderId)
    {
        // Find checkout by order_id
        // SQL: SELECT * FROM checkouts WHERE order_id = ? LIMIT 1
        // (dengan relasi user dimuat)
        $checkout = Checkout::where('order_id', $orderId)
            ->with('user')
            ->firstOrFail();

        // Generate PDF
        $pdf = Pdf::loadView('invoices.pdf', compact('checkout'));
        $pdf->setPaper('A4', 'portrait');
        
        // Stream PDF to browser
        return $pdf->stream("invoice-{$checkout->order_id}.pdf");
    }

    /**
     * Generate and save PDF invoice to storage
     */
    public function generateInvoice($orderId)
    {
        // Find checkout by order_id
        // SQL: SELECT * FROM checkouts WHERE order_id = ? LIMIT 1
        // (dengan relasi user dimuat)
        $checkout = Checkout::where('order_id', $orderId)
            ->with('user')
            ->firstOrFail();

        // Generate PDF
        $pdf = Pdf::loadView('invoices.pdf', compact('checkout'));
        $pdf->setPaper('A4', 'portrait');

        // Save to storage
        $filename = "invoices/invoice-{$checkout->order_id}.pdf";
        Storage::put($filename, $pdf->output());

        return response()->json([
            'success' => true,
            'message' => 'Invoice generated successfully',
            'file_path' => $filename
        ]);
    }

    /**
     * Send invoice via email
     */
    public function emailInvoice($orderId)
    {
        // Find checkout by order_id
        // SQL: SELECT * FROM checkouts WHERE order_id = ? LIMIT 1
        // (dengan relasi user dimuat)
        $checkout = Checkout::where('order_id', $orderId)
            ->with('user')
            ->firstOrFail();

        // Generate PDF
        $pdf = Pdf::loadView('invoices.pdf', compact('checkout'));
        $pdf->setPaper('A4', 'portrait');

        // (Bagian pengiriman email belum diimplementasikan)
    }

    /**
     * Bulk generate invoices
     */
    public function bulkGenerateInvoices(Request $request)
    {
        $orderIds = $request->input('order_ids', []);
        $generated = [];
        $errors = [];

        foreach ($orderIds as $orderId) {
            try {
                // Find checkout by order_id
                // SQL: SELECT * FROM checkouts WHERE order_id = ? LIMIT 1
                // (dengan relasi user dimuat)
                $checkout = Checkout::where('order_id', $orderId)
                    ->with('user')
                    ->firstOrFail();

                // Generate PDF
                $pdf = Pdf::loadView('invoices.pdf', compact('checkout'));
                $pdf->setPaper('A4', 'portrait');

                $filename = "invoices/invoice-{$checkout->order_id}.pdf";
                Storage::put($filename, $pdf->output());

                $generated[] = [
                    'order_id' => $orderId,
                    'file_path' => $filename
                ];
            } catch (\Exception $e) {
                $errors[] = [
                    'order_id' => $orderId,
                    'error' => $e->getMessage()
                ];
            }
        }

        return response()->json([
            'success' => count($generated) > 0,
            'generated' => $generated,
            'errors' => $errors,
            'total_generated' => count($generated),
            'total_errors' => count($errors)
        ]);
    }
}
