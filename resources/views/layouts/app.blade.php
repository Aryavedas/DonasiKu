<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donasiku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">
            <a class="navbar-brand" href="/">Donasiku</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/donation">Donation <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- content --}}
    <main class="mb-5">
        @yield('content')
    </main>

    {{-- footer --}}
    <footer class="bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center py-5" style="background-color: rgba(0, 0, 0, 0.2);">
            © <?= date('Y') ?> Make By Love:
            <a class="text-white" href="https://www.instagram.com/veedooo/?hl=id">Arya Veda S</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
