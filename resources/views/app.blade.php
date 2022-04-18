<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
<body>

    <div id="app">

        <nav class="mb-5 navbar navbar-expand-md navbar-light bg-white position-fized top-0 start-0 w-100 shadow-sm">
            
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarContent">
    
                    <ul class="navbar-nav me-auto">
                        @guest
                            <li class="nav-item"> 
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item"> 
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                        
                            <li class="nav-item"> 
                                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('order.index') }}" class="nav-link">Orders</a>
                            </li>
                        @endguest
                    </ul>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
    
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('notifications.index')}}">
                                        <i class="fa-solid fa-bell"></i>
                                        <span class="badge bg-danger">3</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cart.index')}}">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                        <span class="badge bg-danger">3</span>
                                    </a>
                                </li>
                            </ul>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <main class="container mb-5">
            @yield('content')
        </main>

        @include('layouts.footer')
        
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}" defer></script>
    <script src="{{ asset('js/mixitup.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
