<!-- Offcanvas -->
<div class="offcanvas offcanvas-start sidebar-nav bg-dark text-white" tabindex="-1" id="offcanvasExample"
    data-bs-backdrop="false" aria-labelledby="offcanvasExampleLabel">
    <div class="container offcanvas-body p-3">

        {{-- <div class="offcanvas-header">
            <button type="button" class="btn-close text-reset bg-secondary" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div> --}}

        <nav class="navbar-dark">
            <ul class="navbar-nav">
                
                {{-- <hr> --}}

                {{-- <li>
                    <a href="{{ route('admin.home') }}" class="nav-link">
                       Dashboard
                    </a>
                </li> --}}

                <li>
                    <a href="" class="nav-link active">
                       Dashboard
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.order.index')}}" class="nav-link active">
                       Orders
                    </a>
                </li>

                <hr>

                <!-- Settings -->
                <li>
                    <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                        <span class="me-2">
                            Settings
                        </span>
                    </a>

                    <div class="collapse show" id="collapseExample">
                        <ul class="list-group">
                            <li class="list-group-item bg-dark">
                                <a class="nav-link text-white" href="{{ route('admin.size.index') }}">
                                   Size
                                </a> 
                            </li>

                            <li class="list-group-item bg-dark">
                                <a class="nav-link text-white" href="{{ route('admin.category.index') }}">
                                    Categories
                                </a> 
                            </li>

                            <li class="list-group-item bg-dark">
                                <a class="nav-link text-white" href="{{ route('admin.products.index') }}">
                                    Products
                                </a> 
                            </li>


                            <hr>

                            <li class="list-group-item bg-dark">
                                <a class="nav-link text-white" href="{{ route('admin.user-management.index') }}">
                                    User Management
                                </a> 
                            </li>


                        </ul>
                    </div>
                </li> 
                <!-- Settings-->

            </ul>

        </nav>
    </div>
    
</div>

<!-- Offcanvas -->