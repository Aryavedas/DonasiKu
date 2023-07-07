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

    public function store(Request $request)
    {
        dd($request);
    }
}
