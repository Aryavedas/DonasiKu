@extends('layouts.app')

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
                    <img src="{{ asset('image/memberi.jpg') }}" height="400"
                        style="object-fit: cover;
"
                        class="d-block rounded-4 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Luangkan Sedikit, Ubah Banyak.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/larm-rmah-AEaTUnvneik-unsplash.jpg') }}" height="400"
                        style="object-fit: cover;
"
                        class="d-block rounded-4 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Membuat Dunia Lebih Baik, Langkah Sedekah.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/christian-dubovan-Y_x747Yshlw-unsplash.jpg') }}" height="400"
                        style="object-fit: cover;"
                        class="d-block rounded-4 w-100 m-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Di Setiap Sedekah, Ada Harapan yang Berkembang.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev" style="fill: white; transform: scale(2);">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM271 135c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-87 87 87 87c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L167 273c-9.4-9.4-9.4-24.6 0-33.9L271 135z" />
                </svg>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next" style="fill: white; transform: scale(2);">
                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM241 377c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l87-87-87-87c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L345 239c9.4 9.4 9.4 24.6 0 33.9L241 377z" />
                </svg>
            </button>

        </div>
    @endsection
