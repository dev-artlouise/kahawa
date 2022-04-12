<nav class="navbar navbar-expand-md navbar-light bg-white position-fized top-0 start-0 w-100 shadow-sm">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse p-2 flex-column" id="navbarContent">

        <div class="justify-content-center justify-content-lg-between flex-column flex-lg-row w-100">

            <form class="d-flex">

                <input class="form-control me-2" 
                    type="search"
                    placeholder="Search"
                >
    
                <button class="btn btn-outline-dark"
                    type="submit"
                >
                    <i class="fas fa-search"></i>
                </button>
    
            </form>

            <a class="navbar-brand" href="{{ url('/') }}">
                KAHAWA | COFFEE PANALO
            </a>
            
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center">
                    My Account
                </li>
            </ul>


        </div>
        
      

       
        <!-- Right Side Of Navbar -->
        {{-- <ul class="navbar-nav ml-auto">
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
        </ul> --}}
    </div>
    
</nav>