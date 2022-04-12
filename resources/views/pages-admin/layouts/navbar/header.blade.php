<!--nav Header-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ url('/admin/home') }}">
            {{-- <img src="{{asset('img/Documentados_logo2.png ')}}" alt="" width="200" height="24"> --}}
            KAHAWA | COFFEE PANALO 
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto mb-lg-0"> </ul>
        
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto ">
                    <!-- Authentication Links -->
                    @guest
                    
                        @if (Route::has('register'))
                            <li class="nav-item">
                                {{-- nav-link --}}
                                <a class="btn btn-outline-secondary mr-3 mb-2 mb-lg-0" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
        
                        <li class="nav-item">
                            {{-- nav-link --}}
                            <a class="btn btn-info text-white mb-2 mb-lg-0" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
        
                    @else
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">

                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                              </li>
                            </ul>
                          </div>
                    @endguest
                </ul>
            </div>
        
    </div>

</nav>     
<!--Nav Header-->


 