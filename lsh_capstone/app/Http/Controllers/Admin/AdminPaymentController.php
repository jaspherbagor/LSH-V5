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

    public function update(Request $request)
    {
        // Retrieve the existing payment info from the database
        $payment_data = Payment::where('id', 1)->first();

        // Check if a new photo is uploaded
        if ($request->hasFile('gcash_qr')) {
            // Validate the new photo
            $request->validate([
                'gcash_qr' => 'image|mimes:jpeg,jpg,svg,png,webp,gif|max:5120',
            ]);

            // Remove the existing photo file
            unlink(public_path('uploads/' . $payment_data->gcash_qr));

            // Get the extension of the new photo
            $gcash_ext = $request->file('gcash_qr')->extension();
            // Generate a unique name for the new photo
            $gcash_final = time() . '.' . $gcash_ext;

            // Move the new photo to the uploads directory
            $request->file('gcash_qr')->move(public_path('uploads/'), $gcash_final);

            // Update the photo attribute of the payment info
            $payment_data->gcash_qr = $gcash_final;
        }

        if ($request->hasFile('maya_qr')) {
            // Validate the new photo
            $request->validate([
                'maya_qr' => 'image|mimes:jpeg,jpg,svg,png,webp,gif|max:5120',
            ]);

            // Remove the existing photo file
            unlink(public_path('uploads/' . $payment_data->may_qr));

            // Get the extension of the new photo
            $maya_ext = $request->file('maya_qr')->extension();
            // Generate a unique name for the new photo
            $maya_final = time() . '.' . $maya_ext;

            // Move the new photo to the uploads directory
            $request->file('maya_qr')->move(public_path('uploads/'), $maya_final);

            // Update the photo attribute of the payment info
            $payment_data->maya_qr = $maya_final;
        }

        // Update the other attributes of the payment info
        $payment_data->gcash_name = $request->gcash_name;
        $payment_data->gcash_number = $request->gcash_number;
        $payment_data->maya_name = $request->maya_name;
        $payment_data->maya_number = $request->maya_number;
        // Save the updated payment info to the database
        $payment_data->update();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Payment has been updated successfully!');
    }


}
