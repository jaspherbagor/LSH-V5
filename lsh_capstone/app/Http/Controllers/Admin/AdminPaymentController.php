<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminPaymentController extends Controller
{
    public function index()
    {
        $payment_info = Payment::where('id', 1)->first();

        return view('admin.payment_info', compact('payment_info'));
    }


}
