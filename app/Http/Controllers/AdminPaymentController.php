<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function degreePayment(Request $request)
    {
        $perPage = $request->input('per_page', 25);

        $checkouts = Checkout::with(['module', 'user'])
            ->where('item_type', 'module')
            ->when($request->user_name, function ($query, $value) {
                $query->whereHas('user', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->item_name, function ($query, $value) {
                $query->whereHas('module', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->method, fn($q, $v) => $q->where('payment_method', $v))
            ->paginate($perPage)
            ->appends($request->query());
            // SELECT * FROM checkouts
            // WHERE item_type = 'module'
            // AND (
            //     {user_name} IS NULL OR EXISTS (
            //     SELECT 1 FROM users
            //     WHERE users.id = checkouts.user_id
            //         AND users.name LIKE '%{user_name}%'
            //     )
            // )
            // AND (
            //     {item_name} IS NULL OR EXISTS (
            //     SELECT 1 FROM modules
            //     WHERE modules.id = checkouts.item_id
            //         AND modules.name LIKE '%{item_name}%'
            //     )
            // )
            // AND (
            //     {method} IS NULL OR payment_method = '{method}'
            // )
            // LIMIT {perPage} OFFSET {(currentPage - 1) * perPage};
            
        return view('admin.payment.degree_payment', compact('checkouts'));
    }
    public function careerPayment(Request $request)
    {
        $perPage = $request->input('per_page', 25);

        $checkouts = Checkout::with(['career', 'user'])
            ->where('item_type', 'career')
            ->when($request->user_name, function ($query, $value) {
                $query->whereHas('user', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->item_name, function ($query, $value) {
                $query->whereHas('career', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->method, fn($q, $v) => $q->where('payment_method', $v))
            ->paginate($perPage)
            ->appends($request->query());
            // SELECT * FROM checkouts
            // WHERE item_type = 'career'
            // AND (
            //     {user_name} IS NULL OR EXISTS (
            //     SELECT 1 FROM users
            //     WHERE users.id = checkouts.user_id
            //         AND users.name LIKE '%{user_name}%'
            //     )
            // )
            // AND (
            //     {item_name} IS NULL OR EXISTS (
            //     SELECT 1 FROM careers
            //     WHERE careers.id = checkouts.item_id
            //         AND careers.name LIKE '%{item_name}%'
            //     )
            // )
            // AND (
            //     {method} IS NULL OR payment_method = '{method}'
            // )
            // LIMIT {perPage} OFFSET {(currentPage - 1) * perPage};

        return view('admin.payment.career_payment', compact('checkouts'));
    }
    public function coursePayment(Request $request)
    {
        $perPage = $request->input('per_page', 25);

        $checkouts = Checkout::with(['course', 'user'])
            ->where('item_type', 'course')
            ->when($request->user_name, function ($query, $value) {
                $query->whereHas('user', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->item_name, function ($query, $value) {
                $query->whereHas('course', fn($q) => $q->where('name', 'like', '%' . $value . '%'));
            })
            ->when($request->method, fn($q, $v) => $q->where('payment_method', $v))
            ->paginate($perPage)
            ->appends($request->query());
            // SELECT * FROM checkouts
            // WHERE item_type = 'course'
            //   AND (
            //     {user_name} IS NULL OR EXISTS (
            //       SELECT 1 FROM users
            //       WHERE users.id = checkouts.user_id
            //         AND users.name LIKE '%{user_name}%'
            //     )
            //   )
            //   AND (
            //     {item_name} IS NULL OR EXISTS (
            //       SELECT 1 FROM courses
            //       WHERE courses.id = checkouts.item_id
            //         AND courses.name LIKE '%{item_name}%'
            //     )
            //   )
            //   AND (
            //     {method} IS NULL OR payment_method = '{method}'
            //   )
            // LIMIT {perPage} OFFSET {(currentPage - 1) * perPage};

        return view('admin.payment.course_payment', compact('checkouts'));
    }
}
