<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary Meta Tags -->
    <title>DJurnal - Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="DJurnal - Landing Page">
    <link rel="apple-touch-icon" sizes="120x120" href="images/brand/Logo-Djurnal.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/brand/Logo-Djurnal.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/brand/Logo-Djurnal.png">
    @include('includes.home.style')
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.ClientKey') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header class="header-global">
        <nav id="navbar-main"
            class="navbar navbar-main navbar-expand-lg headroom py-lg-3 px-lg-6 navbar-light navbar-theme-primary">
            <div class="container">
                <a class="navbar-brand @@logo_classes" href="../../index.html">
                    <img class="navbar-brand-dark common" src="images/brand/Dark-Djurnal.svg" height="35"
                        alt="Logo light">
                    <img class="navbar-brand-light common" src="images/brand/Light-Djurnal.svg" height="35"
                        alt="Logo dark">
                </a>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a href="{{ '' }}">
                                    <img src="images/brand/Logo-Djurnal.png" height="35" alt="Logo DJurnal">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <a href="#navbar_global" role="button" class="fas fa-times" data-toggle="collapse"
                                    data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                    aria-label="Toggle navigation"></a>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav navbar-nav-hover justify-content-center align-items-start">
                        <li class="nav-item">
                            <a href="{{ '/' }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ '/product' }}" class="nav-link">Our Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ '/about' }}" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ '/contactus' }}" class="nav-link">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cart') }}">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item my-auto">
                                    <x-app-layout></x-app-layout>
                                </li>
                        </ul>
                    </div>
                @else
                    <div class="d-none d-lg-block @@cta_button_classes">
                        <a href="{{ route('login') }}" class="btn btn-md btn-docs btn-outline-white animate-up-2 mr-3"><i
                                class="fas fa-th-large mr-2"></i> Login</a>
                        <a href="{{ route('register') }}" target="_blank" class="btn btn-md btn-secondary animate-up-2"><i
                                class="fas fa-paper-plane mr-2"></i> Sign
                            Up</a>
                    </div>
                @endauth
                @endif
                <div class="d-flex d-lg-none align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
                        aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    @if (Route::has('login'))
        @auth
            <div class="preloader bg-soft flex-column justify-content-center align-items-center">
                <div class="loader-element">
                    <span class="loader-animated-dot-after"></span>
                    <img src="images/brand/Light-Djurnal-loader.svg" height="40" alt="Djurnal logo">
                </div>
            </div>
        @else
            <div class="preloader bg-soft flex-column justify-content-center align-items-center">
                <div class="loader-element">
                    <span class="loader-animated-dot"></span>
                    <img src="images/brand/Light-Djurnal-loader.svg" height="40" alt="Djurnal logo">
                </div>
            </div>
        @endauth
    @endif
    @include('includes.home.script')
</body>

</html>
