<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ghidaq Jewellery">
    <meta name="author" content="Mohd">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="{{ asset('/style.css') }}" rel="stylesheet">
    <!-- <script src="{{ asset('/jas.js') }}"></script>-->


    @yield('custom_styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-s text-white" style="background-color: @yield('color1', '#1A3027')">
            <div class="container">
                <a class="navbar-brand fw-bold" style="color: @yield('color2', '#DBAD7E')" href="{{ url('/') }}"><i class="far fa-gem fa-xl"></i> Ghidaq Jewellery</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <ul class="navbar-nav fw-bold">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/#about') }}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/#product') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                            </li>
                        </ul>

                                               <!-- Authentication Links -->
                                               @guest
                                               @if (Route::has('login'))
                                               <li class="nav-item fw-bold">
                                                   <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                               </li>
                                           @endif
               
                                           @if (Route::has('register'))
                                               <li class="nav-item fw-bold">
                                                   <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                               </li>
                                           @endif
                                           @else
                                               <li class="nav-item dropdown fw-bold">
                                                   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                       {{ Auth::user()->name }}
                                                   </a>
                   
                                                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('orders') }}">{{ __('My Orders') }}</a>
                                                       <a class="dropdown-item" href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                                           {{ __('Logout') }}
                                                       </a>                   
                                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                           @csrf
                                                       </form>
                                                   </div>
                                               </li>
                                           @endguest
                    </ul>
                </div>
            </div>
        </nav>
        

        <main class="py">
            @yield('content')
        </main>
    </div>



        <footer class="footer mt-auto py-3 bg-dark text-white">
            @yield('footer')
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>About Us</h5>
                        <p>Where elegance meets craftsmanship. <br>We offer a wide range of exquisite jewelry pieces crafted with precision and passion. <br>Shop with confidence and indulge in the beauty of Ghidaq Jewelry. <br>Experience luxury at its finest.</p>
                    </div>
                    <div class="col-md-3">
                        <h5>Contact Us</h5>
                        <address>
                            Ghidaq luxury Jewellery Company<br>
                            Al Arouba Street, Riyadh<br>
                            Kingdom of Saudi Arabia<br>
                            Phone: 800 122 2221<br>
                            Email: info@ghidaq.com<br>
                            <div class="social-icons my-2">
                                <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-twitter fa-xl"></i></a>
                                <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-instagram fa-xl"></i></a>
                                <a href="#" class="social-icon text-white mx-2"><i class="fa-brands fa-snapchat fa-xl"></i></a>
                              </div>
                        </address>
                    </div>
                    <div class="col-md-3">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('/') }}" class="h5 text-white" style="text-decoration: none;">Home</a></li>
                            <li><a href="{{ url('/#about') }}" class="h5 text-white" style="text-decoration: none;">About</a></li>
                            <li><a href="{{ url('/#product') }}" class="h5 text-white" style="text-decoration: none;">Products</a></li>
                            <li><a href="{{ url('/#contact') }}" class="h5 text-white" style="text-decoration: none;">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center">
                &copy; {{ date('Y') }} By Mohd | Ghidaq Jewellery. All Rights Reserved.
            </div>
        </footer>


</body>
</html>
