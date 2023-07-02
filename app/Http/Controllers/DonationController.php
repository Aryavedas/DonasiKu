<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Donation;
use Midtrans\Notification;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    private $response;

    public function index()
    {
        return view('donation');
    }

    /**
     * Store the donation and return the JSON response.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Start Transaction
        DB::transaction(function () use ($request) {

            // Eloquent Insert To Database
            $donation = new Donation();
            $donation->donor_name = $request->donor_name;
            $donation->donor_email = $request->donor_email;
            $donation->donation_type = $request->donation_type;
            $donation->amount = $request->amount;
            $donation->note = $request->note;

            // input the required into $payload
            $payload = [
                'transaction_detals' => [
                    'order_id' => 'SANDBOX-' . uniqid(),
                    'gross_amount' => $donation->amount
                ],

                'customers_details' => [
                    'first_name' => $donation->donor_name,
                    'email' => $donation->email,
                ],

                'item_details' => [
                    'id' => $donation->donation_type,
                    'price' => $donation->amount,
                    'name' => ucwords(str_replace('_', ' ', $donation->donation_type)),
                ]
            ];

            // save the eloquent and get snap token
            $snapToken = Snap::getSnapToken($payload);
            $donation->snap_token = $snapToken;
            $donation->save();

            // input snap token on the response for user / client
            $this->response['snap_token'] = $snapToken;
        });

        return response()->json($this->response);
    }
}
