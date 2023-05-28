<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sigma Doc</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('home/gallery/logo.webp') }}" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    <style>
        .form_Css input {
            display: block;
            width: 100%;
            border: 2px #00B98E solid;
            border-top: none;
            border-right: none;
            border-left: none;
            margin-bottom: 50px;
            transition: all .5s ease-in-out;

        }

        .form_Css input:hover {
            width: 100%;
            border-bottom-left-radius: 0%;
            border-bottom-right-radius: 0%;
        }

        .form_Css input:focus {
            border-top: none;
            border-left: none;
            border-right: none;
            border-radius: 20px;
            outline: 0;
        }

        .register input,
        .form-select {
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid #6bd4bd;
        }

        .register input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }

        .register .form-floating>label {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            padding: 1rem 0.75rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P27NFMV');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body style="overflow-x: hidden;">

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P27NFMV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="container-xxl bg-white p-0 font">
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="{{ asset('home/gallery/black.webp') }}" alt="">
                    <!-- <img src="img/logo.webp" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}"
                            class="nav-item nav-link {{ Request::path() == '/' ? 'active' : '' }}">الرئيسية</a>
                        <a href="{{ route('about_us') }}"
                            class="nav-item nav-link {{ Request::path() == 'about-us' ? 'active' : '' }}">من نحن</a>
                        <a href="{{ route('partners') }}"
                            class="nav-item nav-link {{ Request::path() == 'partners' ? 'active' : '' }}">شركائنا</a>
                        <a href="{{ route('form') }}"
                            class="nav-item nav-link {{ Request::path() == 'form' ? 'active' : '' }}">احجز كارتك</a>
                        <a href="{{ route('articles') }}"
                            class="nav-item nav-link {{ Request::path() == 'articles' ? 'active' : '' }}"> المقالات</a>
                    </div>
                    <a href="{{ route('doc') }}" class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">سجل
                        الآن كطبيب</a>
                </div>
            </nav>

            <!-- Navbar & Hero End -->
