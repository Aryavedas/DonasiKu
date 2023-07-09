<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index(Donation $donation)
    {
        $totalDonations = Donation::where('status', 'Paid')->pluck('amount')->sum();

        return view('home', compact('totalDonations'));
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
        $donation->snap_token = $snapToken;
        $donation->save();

        return view('chechkout', compact('snapToken', 'validate'));
    }

    public function afterPayment(Request $request)
    {
        // Next For Production
        // $serverKey = config('midtrans.server_key');
        // $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        // if ($hashed == $request->signature_key) {
        //     if ($request->transaction_status == "capture") {
        //         $donation = new Donation();
        //         $donation->status = "Paid";
        //         $donation->save();
        //     }
        // }

        $userKey = $request->query('userKey');
        $donation = Donation::where('snap_token', $userKey)->first();

        if ($donation) {
            $donation->status = "Paid";
            $donation->save();
        }

        return view('home');
    }

    public function donationList(Donation $donation)
    {

        $donations = $donation->where('status', 'Paid')->paginate(10);

        return view('donation-list', compact('donations'));
    }

    public function checkoutCancel(Request $request)
    {
        $donations = Donation::where('snap_token', $request->snap_token)->delete();

        return view('donation');
    }

}
