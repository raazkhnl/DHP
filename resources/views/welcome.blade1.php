<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

        <title>Dharan Health Portal</title>
            {{-- Icon --}}
        <link rel="icon" href="{{ asset('storage\Images\Logo.png') }}" type="image/gif" sizes="30x30">
        <!-- Styles -->
        <style>body {font-family: 'Nunito', sans-serif;}</style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0"
            style="background-color: white">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ route('dashboard') }}" class="h3" style="color: rgb(61, 35, 35)"><b>Welcome Back!</b></a>
                    @else
                        <a href="{{ route('login') }}" class="h3" style="color: rgb(61, 35, 35)"><b>Log in</b></a>
    
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 h3 text-gray-700" style="color: rgb(61, 35, 35)"><b>Register</b></a>
                        @endif
                    @endauth
                </div>
            @endif
            {{-- Welcome --}} 
        </div> 
            
                
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="index.html">Regna</a></h1>-->
      </div>
    </div>
  </header><!-- End Header -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to Regna</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section>






            <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    </body>
</html>
