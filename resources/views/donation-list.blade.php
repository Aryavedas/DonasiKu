@extends('layouts.app')
@section('active-nav-donation-list', 'active-nav')
@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid p-5"
        style="margin-top: -33px; background-image: url('https://source.unsplash.com/vHPCC9xegWA'); background-size: cover; object-fit: cover;">
        <div class="container">
            <div class="">
                <h1 class="display-2 px-3 shadow-lg" style="font-weight: 400; background: white; display: inline-block;">
                    Daftar Donasi</h1>
            </div>
            <p class="lead px-4 shadow-lg" style="display: inline-block; background-color: white; font-weight: 500; ">
            Daftar Orang yang telah donasi</p>
        </div>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Donor Type</th>
                    <th>Status Pembayaran</th>
                    <th>Jumlah Donasi</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donations as $donation)
                    <tr>
                        <td>{{ $donation->donor_name }}</td>
                        <td>{{ $donation->donor_email }}</td>
                        <td>{{ $donation->donor_type }}</td>
                        <td class="{{ $donation->status == 'Paid' ? 'paid' : 'pending' }}">{{ $donation->status }}</td>
                        <td>Rp.{{ number_format($donation->amount, 0, ',', '.') }}</td>
                        <td>{{ $donation->note }}</td>
                    </tr>
                @empty
                    <h1>kosong</h1>
                @endforelse
            </tbody>
        </table>

        <div class="">
            {{ $donations->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
