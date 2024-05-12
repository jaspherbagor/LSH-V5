<?php

// Declare the namespace for the controller
namespace App\Http\Controllers\Admin;

// Import necessary classes
use App\Http\Controllers\Controller;  // Base controller class
use App\Mail\WebsiteMail;
use App\Models\Customer;  // Model for customers
use App\Models\Order;  // Model for orders
use App\Models\OrderDetail;  // Model for order details
use Illuminate\Http\Request;  // Request handling class
use Illuminate\Support\Facades\Auth;  // Authentication facade for handling logins
use Illuminate\Support\Facades\Mail;

// Define the AdminOrderController class, extending the base Controller class
class AdminOrderController extends Controller
{
    // Method to display all orders
    public function index()
    {
        // Retrieve all orders from the database
        $orders = Order::all();
        
        // Return the 'admin.orders' view with the orders data
        return view('admin.orders', compact('orders'));
    }

    public function pending_order()
    {
        $pending_orders = Order::where('status', 'Pending')->get();

        return view('admin.pending_orders', compact('pending_orders'));
    }

    public function confirm($id)
    {
        $order_data = Order::where('id', $id)->first();
        $order_data->status = 'Completed';
        $order_data->update();

        $customer = Customer::where('id', $order_data->customer_id)->first();
        $subject = 'Your booking has been confirmed';
        $message = '<p>Dear <strong>' . $customer->name . '</strong>,</p>';
        $message .= '<p>We are delighted to inform you that your booking with booking number: <strong>'.$order_data->order_no . '</strong> has been approved! Thank you for choosing us for your upcoming stay.</p>';

        $message .= '<p>Your booking has been confirmed, and we are eagerly awaiting your arrival. At Labason Safe Haven, we are dedicated to providing you with a comfortable and memorable experience.</p>';
        $message .= '<p>If you have any special requests or requirements, please feel free to let us know, and we will do our best to accommodate them.</p>';
        $message .= '<p>Once again, thank you for choosing Labason Safe Haven. We look forward to welcoming you and providing you with exceptional hospitality.</p>';
        $message .= 'Warm regards, <br>';
        $message .= '<strong>Celine Lerios</strong> <br>';
        $message .= '<strong>Chief Operating Officer</strong><br>';
        $message .= '<strong>Labason Safe Haven</strong><br>';

        // Get the customer's email address and send the email message
        $customer_email = $customer->email;
        Mail::to($customer_email)->send(new WebsiteMail($subject, $message));

        return redirect()->back()->with('success', 'Booking has been confirmed!');
    }

    // Method to display an invoice for a specific order
    public function invoice($id)
    {
        // Retrieve the order data based on the provided order ID
        $order = Order::where('id', $id)->first();

        // Retrieve the order details associated with the order ID
        $order_detail = OrderDetail::where('order_id', $id)->get();

        // Retrieve the customer data associated with the order
        $customer_data = Customer::where('id', $order->customer_id)->first();

        // Return the 'admin.invoice' view with the order, order details, and customer data
        return view('admin.invoice', compact('order', 'order_detail', 'customer_data'));
    }

    // Method to delete an order
    public function delete($id)
    {
        // Delete the order from the database based on the provided order ID
        Order::where('id', $id)->delete();

        // Delete the order details associated with the order ID
        OrderDetail::where('order_id', $id)->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Order is deleted successfully!');
    }
}
