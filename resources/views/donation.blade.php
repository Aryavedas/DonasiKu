@extends('layouts.app')

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid p-5" style="margin-top: -33px; background-image: url('https://source.unsplash.com/BErJJL_KsjA'); background-size: cover; object-fit: cover;">
        <div class="container">
            <div class="">
                <h1 class="display-2 px-3 shadow-lg" style="font-weight: 400; background: white; display: inline-block;">DonasiKu</h1>
            </div>
            <p class="lead px-4 shadow-lg" style="display: inline-block; background-color: white; font-weight: 500; ">Platform donasi untuk saudara kita yang membutuhkan.</p>
        </div>
    </div>

    <div class="container mt-5">
        <form action="#" id="donation_form">
            <legend>Donation</legend>
            <div class="row">

                <div class="col-6">
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="donor_name" class="form-control" id="donor_name">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">E-Mail</label>
                            <input type="email" name="donor_email" class="form-control" id="donor_email">
                        </div>
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
                            <input type="number" name="amount" class="form-control" id="amount">
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="">Catatan (Opsional)</label>
                            <textarea name="note" cols="30" rows="3" class="form-control" id="note"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3" type="submit">Kirim</button>
                </div>

            </div>
        </form>
    </div>
@endsection
