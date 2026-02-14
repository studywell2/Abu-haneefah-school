<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Abu Haneefah Islamic Academy')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fb;
        }

        /* NAVBAR */
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .navbar {
            box-shadow: 0 3px 12px rgba(0,0,0,0.08);
        }

        .nav-link {
            font-weight: 500;
            margin-left: 10px;
            transition: 0.3s ease;
        }

        .nav-link:hover {
            color: #d4edda !important;
        }

        /* HERO SECTION DEFAULT */
        .page-header {
            background: linear-gradient(rgba(0,0,0,0.45), rgba(0,0,0,0.45)), url('/images/school.jpg') center/cover no-repeat;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .page-header h1 {
            font-weight: 700;
        }

        /* MAIN CONTENT */
        main {
            min-height: 60vh;
            padding: 50px 0;
        }

        /* FOOTER */
        footer {
            background: #111;
        }

        footer h5 {
            font-weight: 600;
            margin-bottom: 15px;
        }

        footer p, footer a {
            font-size: 14px;
            color: #bbb;
            text-decoration: none;
        }

        footer a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            margin-top: 25px;
            padding-top: 15px;
            font-size: 13px;
        }
    </style>

    @stack('styles')
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Abu Haneefah Islamic Academy</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/academics') }}">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/admissions') }}">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- PAGE HEADER (optional) -->
@hasSection('page-header')
    <section class="page-header">
        <div class="container">
            @yield('page-header')
        </div>
    </section>
@endif

<!-- MAIN CONTENT -->
<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<!-- FOOTER -->
<footer class="text-light pt-5 pb-3">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-4">
                <h5>About Us</h5>
                <p>Abu Haneefah Islamic Academy is dedicated to nurturing students with excellent Western and Islamic education in a disciplined environment.</p>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Quick Links</h5>
                <p><a href="{{ url('/') }}">Home</a></p>
                <p><a href="{{ url('/about') }}">About</a></p>
                <p><a href="{{ url('/admissions') }}">Admissions</a></p>
                <p><a href="{{ url('/contact') }}">Contact</a></p>
            </div>

            <div class="col-md-4 mb-4">
                <h5>Contact</h5>
                <p>Email: abuaneefah330@gmail.com</p>
                <p>Phone: +2348056501115</p>
                <p>Atan, Ogun State, Nigeria</p>
            </div>
        </div>

        <div class="text-center footer-bottom">
            © {{ date('Y') }} Abu Haneefah Islamic Academy • Built by WETech
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
