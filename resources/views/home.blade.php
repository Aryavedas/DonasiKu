@extends('layouts.app')
@section('active-nav-home', 'active-nav')
@section('content')
    <div class="container mt-3">
        {{-- Carousel  --}}
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('image/memberi.jpg') }}" height="400" style="object-fit: cover;"
                        class="d-block rounded-2 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Luangkan Sedikit, Ubah Banyak.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/larm-rmah-AEaTUnvneik-unsplash.jpg') }}" height="400"
                        style="object-fit: cover;" class="d-block rounded-2 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Membuat Dunia Lebih Baik, Langkah Sedekah.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/christian-dubovan-Y_x747Yshlw-unsplash.jpg') }}" height="400"
                        style="object-fit: cover;" class="d-block rounded-2 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Di Setiap Sedekah, Ada Harapan yang Berkembang.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev" style="fill: white;">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
                </svg>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next" style="fill: white;">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z" />
                </svg>
            </button>
        </div>

        {{-- Totdal Donation --}}
        <a href="{{ route('donation.list') }}" class="text-decoration-none">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-md-6">
                        <div class="card rounded-lg">
                            <div class="card-header">
                                <h5 class="mb-0">
                                    <i class="fas fa-donate"></i> Total Donasi
                                </h5>
                            </div>
                            <div class="card-body">
                                <h1 class="display-4 text-center">
                                    @if ($totalDonations !== null)
                                        Rp.{{ number_format($totalDonations, 0, ',', '.') }}
                                    @else
                                        Donasi Kosong
                                    @endif
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </a>

        {{-- Home Content --}}
        <div class="row" style="margin-top: 80px">
            <div class="col">
                <img src="{{ asset('image/christian-dubovan-Y_x747Yshlw-unsplash.jpg') }}" height="270"
                    style="object-fit: cover;" class="d-block rounded-2 w-100 m-auto" alt="...">
            </div>

            <div class="col" >
                <h1>Manfaat Bersedekah</h1>
                <p class="mt-3 lh-lg">Sedekah adalah salah satu amalan yang dianjurkan dalam agama dan memiliki manfaat yang besar bagi diri kita
                    dan orang lain. Melalui sedekah, kita dapat membantu mereka yang membutuhkan, serta memberikan dampak positif
                    bagi masyarakat.</p>
                <a href="/donation" class="btn btn-primary mt-3">Donasi Sekarang</a>
            </div>
        </div>

        <div class="row" style="margin-top: 80px">
            <div class="col">
                <h1>Memberi Harapan</h1>
                <p class="mt-3 lh-lg">Bersedekah memberikan harapan kepada mereka yang sedang menghadapi kesulitan. Saat kita memberikan bantuan, kita tidak hanya memberikan bantuan materiil, tetapi juga memberikan dukungan emosional dan spiritual</p>
                <a href="{{ route('donation.list') }}" class="btn btn-primary mt-3">Daftar Donasi</a>
            </div>

            <div class="col">
                <img src="{{ asset('image/larm-rmah-AEaTUnvneik-unsplash.jpg') }}" height="270"
                    style="object-fit: cover;" class="d-block rounded-2 w-100 m-auto" alt="...">
            </div>

        </div>

        <div class="row" style="margin-top: 80px">
            <div class="col">
                <img src="{{ asset('image/memberi.jpg') }}" height="270"
                    style="object-fit: cover;" class="d-block rounded-2 w-100 m-auto" alt="...">
            </div>

            <div class="col">
                <h1>Membangun Rasa Syukur</h1>
                <p class="mt-3 lh-lg">Melalui bersedekah, kita dapat mengembangkan rasa syukur yang lebih dalam terhadap apa yang kita miliki. Saat kita melihat kehidupan orang lain yang kurang beruntung, kita menjadi lebih menghargai berkat dan rezeki yang telah kita terima</p>
            </div>
        </div>

    </div>
@endsection
