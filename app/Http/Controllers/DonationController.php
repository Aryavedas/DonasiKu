<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'donor_name' => 'required|string',
            'donor_email' => 'required|email',
            'donation_type' => 'required|string',
            'amount' => 'required|integer',
            'note' => 'sometimes'
        ]);

        $donation = new Donation();
        $donation->donor_name = $validate['donor_name'];
        $donation->donor_email = $validate['donor_email'];
        $donation->donor_type = $validate['donation_type'];
        $donation->amount = $validate['amount'];
        $donation->note = $validate['note'];
        // $donation->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $donation->amount,
            ),
            'customer_details' => array(
                'name' => $donation->donor_name,
                'email' => $donation->donor_email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('chechkout', compact('snapToken', 'validate'));
    }
}
