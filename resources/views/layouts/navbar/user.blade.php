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
    </div>
    
</nav>