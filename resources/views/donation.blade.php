@extends('layouts.app')
@section('active-nav-donation', 'active-nav')
@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid p-5"
        style="margin-top: -33px; background-image: url('https://source.unsplash.com/BErJJL_KsjA'); background-size: cover; object-fit: cover;">
        <div class="container">
            <div class="">
                <h1 class="display-2 px-3 shadow-lg" style="font-weight: 400; background: white; display: inline-block;">
                    DonasiKu</h1>
            </div>
            <p class="lead px-4 shadow-lg" style="display: inline-block; background-color: white; font-weight: 500; ">Platform
                donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container mt-5">
        <form action="{{ route('donation.store') }}" id="donation_form" method="POST">
            @csrf
            <legend>Donation</legend>
            <div class="row">

                <div class="col-6">

                    {{-- Input Name --}}
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="donor_name" class="form-control @error('donor_name') is-invalid @enderror" id="donor_name">
                        </div>

                        @error('donor_name')
                            <div class="text-danger text-sm" style="font-size: 12px">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Input Email --}}
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" name="donor_email"
                                class="form-control @error('donor_email') is-invalid @enderror" id="donor_email">
                        </div>
                        @error('donor_email')
                        <div class="text-danger text-sm" style="font-size: 12px">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Jenis Donasi</label>
                            <select name="donation_type" class="form-control" id="donation_type">
                                <option value="medis_kesehatan">Medis & Kesehatan</option>
                                <option value="kemanusiaan">Kemanusiaan</option>
                                <option value="bencana_alam">Bencana Alam</option>
                                <option value="rumah_ibadah">Rumah Ibadah</option>
                                <option value="beasiswa_pendidikan">Beasiswa & Pendidikan</option>
                                <option value="sarana_infrastruktur">Sarana & Infrastruktur</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="amount"
                                class="form-control @error('amount') is-invalid @enderror" value id="amount">
                        </div>
                        @error('amount')
                        <div class="text-danger text-sm" style="font-size: 12px">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Catatan (Opsional)</label>
                            <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Lanjut Checkout</button>
                </div>

            </div>
        </form>
    </div>
@endsection
