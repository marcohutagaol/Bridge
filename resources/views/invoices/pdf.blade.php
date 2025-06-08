<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - {{ $checkout->order_id }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            line-height: 1.4;
            color: #333;
            background: #fff;
            font-size: 11px;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }

        .invoice-header {
            display: table;
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 3px solid #3B82F6;
            padding-bottom: 10px;
        }

        .company-info {
            display: table-cell;
            width: 50%;
            vertical-align: top;
        }

        .company-logo {
            font-size: 22px;
            font-weight: bold;
            color: #3B82F6;
            margin-bottom: 6px;
        }

        .company-details {
            font-size: 10px;
            color: #666;
            line-height: 1.3;
        }

        .invoice-info {
            display: table-cell;
            width: 50%;
            text-align: right;
            vertical-align: top;
        }

        .invoice-title {
            font-size: 24px;
            font-weight: bold;
            color: #1F2937;
            margin-bottom: 6px;
        }

        .invoice-number {
            font-size: 13px;
            color: #666;
            margin-bottom: 3px;
        }

        .invoice-date {
            font-size: 11px;
            color: #666;
        }

        .billing-section {
            display: table;
            width: 100%;
            margin-bottom: 20px;
        }

        .billing-info {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding-right: 15px;
        }

        .billing-info:last-child {
            padding-right: 0;
        }

        .billing-title {
            font-size: 13px;
            font-weight: bold;
            color: #1F2937;
            margin-bottom: 8px;
            padding-bottom: 3px;
            border-bottom: 2px solid #E5E7EB;
        }

        .billing-details {
            font-size: 10px;
            line-height: 1.5;
        }

        .billing-details p {
            margin-bottom: 2px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            border: 1px solid #E5E7EB;
        }

        .invoice-table th {
            background-color: #F9FAFB;
            padding: 8px;
            text-align: left;
            font-weight: bold;
            color: #374151;
            border-bottom: 2px solid #E5E7EB;
            font-size: 10px;
        }

        .invoice-table td {
            padding: 8px;
            border-bottom: 1px solid #F3F4F6;
            font-size: 10px;
        }

        .invoice-table tr:last-child td {
            border-bottom: none;
        }

        .item-description {
            font-weight: 500;
            color: #1F2937;
            margin-bottom: 2px;
            font-size: 11px;
        }

        .item-details {
            font-size: 9px;
            color: #6B7280;
        }

        .text-right {
            text-align: right;
        }

        .invoice-summary {
            margin-left: auto;
            width: 220px;
            margin-top: 10px;
        }

        .summary-row {
            display: table;
            width: 100%;
            padding: 3px 0;
            border-bottom: 1px solid #F3F4F6;
            font-size: 10px;
        }

        .summary-row:last-child {
            border-bottom: none;
            font-weight: bold;
            font-size: 13px;
            color: #1F2937;
            padding-top: 8px;
            border-top: 2px solid #E5E7EB;
        }

        .summary-label {
            display: table-cell;
            width: 70%;
        }

        .summary-value {
            display: table-cell;
            text-align: right;
            width: 30%;
        }

        .payment-info {
            background-color: #F9FAFB;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            border: 1px solid #E5E7EB;
        }

        .payment-title {
            font-size: 13px;
            font-weight: bold;
            color: #1F2937;
            margin-bottom: 8px;
        }

        .payment-details {
            font-size: 10px;
        }

        .payment-row {
            display: table;
            width: 100%;
            margin-bottom: 3px;
        }

        .payment-label {
            display: table-cell;
            color: #6B7280;
            font-weight: 500;
            width: 40%;
        }

        .payment-value {
            display: table-cell;
            color: #1F2937;
            font-weight: 600;
            text-align: right;
            width: 60%;
        }

        .invoice-footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 2px solid #E5E7EB;
            text-align: center;
        }

        .footer-text {
            font-size: 10px;
            color: #6B7280;
            line-height: 1.4;
        }

        .contact-info {
            margin-top: 10px;
            font-size: 9px;
            color: #6B7280;
        }

        .contact-info a {
            color: #3B82F6;
            text-decoration: none;
        }

        .qr-section {
            margin-top: 15px;
            text-align: center;
            padding: 10px;
            background-color: #F9FAFB;
            border-radius: 6px;
        }

        .qr-title {
            font-size: 11px;
            font-weight: bold;
            color: #1F2937;
            margin-bottom: 5px;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            
            .invoice-container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <!-- Header -->
        <div class="invoice-header">
            <div class="company-info">
                <div class="company-logo">Bridge Learning</div>
                <div class="company-details">
                    Jl. Teknologi No. 123<br>
                    Jakarta Selatan, 12345<br>
                    Indonesia<br>
                    Phone: +62 123 456 789<br>
                    Email: support@bridge.com<br>
                    Website: www.bridge.com
                </div>
            </div>
            <div class="invoice-info">
                <div class="invoice-title">INVOICE</div>
                <div class="invoice-number">#{{ $checkout->order_id }}</div>
                <div class="invoice-date">{{ $checkout->created_at->format('F j, Y') }}</div>
                <div class="invoice-date">{{ $checkout->created_at->format('g:i A') }}</div>
            </div>
        </div>

        <!-- Billing Information -->
        <div class="billing-section">
            <div class="billing-info">
                <div class="billing-title">Bill To:</div>
                <div class="billing-details">
                    <p><strong>{{ $checkout->user->name }}</strong></p>
                    <p>{{ $checkout->user->email }}</p>
                    @if($checkout->user->phone)
                        <p>{{ $checkout->user->phone }}</p>
                    @endif
                    @if($checkout->organization_type === 'corporation')
                        <p><strong>{{ $checkout->corporation_name }}</strong></p>
                        <p>Corporation</p>
                    @elseif($checkout->organization_type === 'school')
                        <p><strong>{{ $checkout->school_name }}</strong></p>
                        <p>Educational Institution</p>
                    @else
                        <p>Individual</p>
                    @endif
                    <p>{{ strtoupper($checkout->country) }}</p>
                </div>
            </div>
            <div class="billing-info">
                <div class="billing-title">Invoice Details:</div>
                <div class="billing-details">
                    <p><strong>Item Type:</strong> {{ ucfirst($checkout->item_type) }}</p>
                    <p><strong>Item ID:</strong> {{ $checkout->item_id }}</p>
                    <p><strong>Payment Method:</strong> 
                        @if($checkout->payment_method === 'card')
                            Credit Card (**** {{ substr($checkout->card_number ?? '0000', -4) }})
                        @else
                            {{ ucfirst($checkout->payment_method) }}
                        @endif
                    </p>
                    @if($checkout->checkout_date)
                        <p><strong>Purchase Date:</strong> {{ $checkout->checkout_date->format('F j, Y') }}</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- Invoice Items -->
        <table class="invoice-table">
            <thead>
                <tr>
                    <th style="width: 60%;">Description</th>
                    <th style="width: 15%;" class="text-right">Qty</th>
                    <th style="width: 25%;" class="text-right">Amount</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $itemDetails = $checkout->item_details ?? [];
                    $itemName = $itemDetails['name'] ?? ucfirst($checkout->item_type) . ' Enrollment';
                    $provider = $itemDetails['provider'] ?? 'Bridge Learning';
                    $originalAmount = $checkout->payment_amount ?? 0;
                @endphp
                <tr>
                    <td>
                        <div class="item-description">{{ $itemName }}</div>
                        <div class="item-details">
                            Provider: {{ $provider }} • {{ ucfirst($checkout->item_type) }} • Certificate Included
                            <br>Lifetime Access
                            <br>Order ID: {{ $checkout->order_id }}
                            <br>Transaction Date: {{ $checkout->created_at->format('M j, Y g:i A') }}
                        </div>
                    </td>
                    <td class="text-right">1</td>
                    <td class="text-right">${{ number_format($originalAmount, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Invoice Summary -->
        <div class="invoice-summary">
            <div class="summary-row">
                <div class="summary-label">Subtotal:</div>
                <div class="summary-value">${{ number_format($originalAmount, 2) }}</div>
            </div>
            <div class="summary-row">
                <div class="summary-label">Tax (0%):</div>
                <div class="summary-value">$0.00</div>
            </div>
            <div class="summary-row">
                <div class="summary-label">Discount:</div>
                <div class="summary-value">$0.00</div>
            </div>
            <div class="summary-row">
                <div class="summary-label">Total Amount:</div>
                <div class="summary-value">${{ number_format($originalAmount, 2) }}</div>
            </div>
        </div>

        <!-- Payment Information -->
        <div class="payment-info">
            <div class="payment-title">Payment Information</div>
            <div class="payment-details">
                <div class="payment-row">
                    <div class="payment-label">Payment Method:</div>
                    <div class="payment-value">
                        @if($checkout->payment_method === 'card')
                            Credit Card
                        @else
                            {{ ucfirst($checkout->payment_method) }}
                        @endif
                    </div>
                </div>
                @if($checkout->payment_method === 'card' && $checkout->card_number)
                    <div class="payment-row">
                        <div class="payment-label">Card Number:</div>
                        <div class="payment-value">**** **** **** {{ substr($checkout->card_number, -4) }}</div>
                    </div>
                @endif
                <div class="payment-row">
                    <div class="payment-label">Transaction Date:</div>
                    <div class="payment-value">{{ $checkout->created_at->format('F j, Y g:i A') }}</div>
                </div>
                <div class="payment-row">
                    <div class="payment-label">Order ID:</div>
                    <div class="payment-value">{{ $checkout->order_id }}</div>
                </div>
                <div class="payment-row">
                    <div class="payment-label">Customer ID:</div>
                    <div class="payment-value">{{ $checkout->user_id }}</div>
                </div>
            </div>
        </div>

        <!-- QR Code Section -->
        <div class="qr-section">
            <div class="qr-title">Verify Invoice</div>
            <p style="font-size: 9px; color: #6B7280;">
                Scan QR code or visit: https://bridge.com/verify/{{ $checkout->order_id }}
            </p>
        </div>

        <!-- Footer -->
        <div class="invoice-footer">
            <div class="footer-text">
                <strong>Thank you for your purchase!</strong><br>
                This invoice serves as your official receipt for the transaction.<br>
                Payment has been successfully processed and your access has been granted.
            </div>
            <div class="contact-info">
                Questions about this invoice? Contact us at 
                <a href="mailto:support@bridge.com">support@bridge.com</a> or 
                <a href="tel:+62123456789">+62 123 456 789</a><br>
                Bridge Learning Platform - Empowering Your Learning Journey<br>
                Generated on {{ now()->format('F j, Y g:i A') }}
            </div>
        </div>
    </div>
</body>
</html>