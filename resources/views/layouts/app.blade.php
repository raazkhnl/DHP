<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Dharan Health Portal</title>
        {{-- Icon --}}
        <link rel="icon" href="{{ asset('storage\Images\Logo.png') }}" type="image/gif" sizes="30x30">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <style>/*Footer's Style*/  body { color: } .footer-widget p { margin-bottom: 3px; } p { font-family: 'Nunito', sans-serif; font-size: 16px; color: #520514; line-height: 28px; }  @keyframes primary-long { 0% { width: 80%; } 50% { width: 0%; } 100% { width: 80%; } } .dk-footer { padding: 75px 0 0; background-color: #520514; position: relative; z-index: 2; } .dk-footer .contact-us { margin-top: 0; margin-bottom: 10px; padding-left: 80px; } .dk-footer .contact-us .contact-info { margin-left: 50px; } .dk-footer .contact-us.contact-us-last { margin-left: -80px; } .dk-footer .contact-icon i { font-size: 24px; top: -15px; position: relative; color:#007bff; } .dk-footer-box-info { position: relative; top: -75px; background: dk-footer; height: 5; padding: 10px; z-index: 2; } .dk-footer-box-info .footer-social-link h3 { color: #fff; font-size: 24px; margin-bottom: 25px; } .dk-footer-box-info .footer-social-link ul { list-style-type: none; padding: 0; margin: 0; } .dk-footer-box-info .footer-social-link li { display: inline-block; } .dk-footer-box-info .footer-social-link a i { display: block; width: 40px; height: 40px; border-radius: 50%; text-align: center; line-height: 40px; background: rgb(51, 36, 36); margin-right: 5px; color: #fff; } .dk-footer-box-info .footer-social-link a i.fa-facebook { background-color: #3B5998; } .dk-footer-box-info .footer-social-link a i.fa-twitter { background-color: #55ACEE; } .dk-footer-box-info .footer-social-link a i.fa-envelope { background-color: #a84739; } .dk-footer-box-info .footer-social-link a i.fa-linkedin { background-color: #0976B4; } .dk-footer-box-info .footer-social-link a i.fa-instagram { background-color: #B7242A; } .footer-awarad { margin-top: 255px; display: -webkit-box; display: -webkit-flex; display: -moz-box; display: -ms-flexbox; display: flex; -webkit-box-flex: 0; -webkit-flex: 0 0 100%; -moz-box-flex: 0; -ms-flex: 0 0 100%; flex: 0 0 100%; -webkit-box-align: center; -webkit-align-items: center; -moz-box-align: center; -ms-flex-align: center; align-items: center; } .footer-awarad p { color: #fff; text-align: center; font-size: 24px; font-weight: 700; margin-left: 20px; padding-top: 15px; } .footer-info-text { margin: 26px 0 32px; } .footer-left-widget { padding-left: 80px; } .footer-widget .section-heading { margin-bottom: 35px; } .footer-widget h3 { font-size: 24px; color: #fff; position: relative; margin-bottom: 15px; max-width: -webkit-fit-content; max-width: -moz-fit-content; max-width: fit-content; } .footer-widget ul { width: 50%; float: left; list-style: none; margin: 0; padding: 0; } .footer-widget li { margin-bottom: 18px; } .footer-widget p { margin-bottom: 27px; } .footer-widget a { color: #878787; -webkit-transition: all 0.3s; -o-transition: all 0.3s; transition: all 0.3s; } .footer-widget a:hover { color: #007bff; } .footer-widget:after { display: block; clear: both; } .dk-footer-form { position: relative; } .dk-footer-form input[type=email] { padding: 14px 28px; border-radius: 50px; background: #2E2E2E; border: 1px solid #2E2E2E; } .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::-webkit-input-placeholder { color: #878787; font-size: 14px; } .dk-footer-form input::-webkit-input-placeholder, .dk-footer-form input::-moz-placeholder, .dk-footer-form input:-ms-input-placeholder, .dk-footer-form input::-ms-input-placeholder, .dk-footer-form input::placeholder { color: #878787; font-size: 14px; } .dk-footer-form button[type=submit] { position: absolute; top: 0; right: 0; padding: 12px 24px 12px 17px; border-top-right-radius: 50px; border-bottom-right-radius: 50px; border: 7px solid #007bff; background: #007bff; color: #fff; } .dk-footer-form button:hover { cursor: pointer; } /* ========================== Contact =============================*/ .contact-us { position: relative; z-index: 2; margin-top: 65px; display: -webkit-box; display: -webkit-flex; display: -moz-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -webkit-align-items: center; -moz-box-align: center; -ms-flex-align: center; align-items: center; } .contact-icon { position: absolute; } .contact-icon i { font-size: 36px; top: -5px; position: relative; color: #007bff; } .contact-info { margin-left: 75px; color: #fff; } .contact-info h3 { font-size: 20px; color: #fff; margin-bottom: 0; } .copyright { padding: 28px 0; margin-top: 55px; background-color: #520514; } .copyright span, .copyright a { color: #878787; -webkit-transition: all 0.3s linear; -o-transition: all 0.3s linear; transition: all 0.3s linear; } .copyright a:hover { color:#007bff; } .copyright-menu ul { text-align: right; margin: 0; } .copyright-menu li { display: inline-block; padding-left: 20px; } .back-to-top { position: relative; z-index: 2; } .back-to-top .btn-dark { width: 35px; height: 35px; border-radius: 50%; padding: 0; position: fixed; bottom: 20px; right: 20px; background: #2e2e2e; border-color: #2e2e2e; display: none; z-index: 999; -webkit-transition: all 0.3s linear; -o-transition: all 0.3s linear; transition: all 0.3s linear; } .back-to-top .btn-dark:hover { cursor: pointer; background: #520514; border-color: #520514; } </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        {{-- Additional --}}
        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        {{-- <link rel="stylesheet" type="text/css" href="resources\css\app.css"> --}}
        {{-- <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        
        {{-- footer FA icons and nav --}}
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"> --}}
	    {{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}


        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
        {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
        {{-- <link rel="stylesheet" type="text/css" href="resources\css\app.css"> --}}
        
        
        {{-- <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script> --}}

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>


    <footer id="dk-footer" class="dk-footer" style="background-color: #005792">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="{{ route('dashboard') }}" class="footer-logo">
                            <img src="{{ asset('storage\Images\Logo.png') }}" class="img-fluid" style="width:100px "  alt="logo">
                        </a>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/raazkhnl/">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/raazkhnl/">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/raazkhnl/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/raazkhnl/">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto: raazkhnl@gmail.com">
                                        <i class="fa fa-envelope"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                <div class="footer-awarad ">
                    <p></p>
                </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <a href="https://goo.gl/maps/7TEfQSy6P22t598TA"><h3>Dharan Nepal</h3></a>
                                        <p>Dharan-Dhankuta Hwy</p>
                                </div>
                                <!-- End Contact Info -->

                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last ml-1">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3><a href="tel:+977-9863244500">+977-9863244500</a></h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading mt-3">
                                    <h3>Useful Links</h3>
                                    <!-- <span class="animate-border border-black"></span> -->
                                </div>
                                <ul>
                                    <li>
                                        <a href="{{ route('blog.aboutus') }}">About us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.feedback') }}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.programs') }}">Programs</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.institutions') }}">Health Institutions</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="mailto: raazkhnl@gmail.com">Mail us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.dashboard') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="https://drive.google.com/file/d/1NnpEnaba30Z8AudM1NSkJJmzUSe_vlAm/view?usp=sharing">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.dashboard') }}">FAQ</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                   
                                <form action="">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->
    
    
        <div class="copyright" style="background-color: #005792">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2021, All Right Reserved</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('dashboard') }}">Home</a>
                                </li>
                                <li>
                                    <a href="https://drive.google.com/file/d/1NnpEnaba30Z8AudM1NSkJJmzUSe_vlAm/view?usp=sharing">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="../policy.pdf">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="mailto: raazkhnl@gmail.com">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button onclick="topFunction()" id="myBtn" class="btn btn-dark" title="Back to Top" style="display: block;">
                <a href="#"> <i class="fa fa-angle-up"></i></a>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>

</html>
