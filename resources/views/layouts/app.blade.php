<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key={{ config('midtrans.client_key') }}></script>
    <title>Donasiku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body style="font-family: 'Poppins'; background-color: #F0F2F5">

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-white navbar-light py-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex" href="/">
                <img src="{{ asset('image/logo.png') }}" alt="" width="30" height="30">
                <span style="font-size: 23.5px; margin-left: -4px; font-weight: 600;">onasiKu</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/donation">Donation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="mb-5" style="margin-top: 110px">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <div class="text-center py-5" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?= date('Y') ?> Make By ♥:
            <a class="text-white" href="https://www.instagram.com/veedooo/?hl=id">Arya Veda S</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    @yield('snap-script')
</body>

</html>
