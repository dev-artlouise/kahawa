@extends('pages-admin.app')

@section('content')

    <div class="mb-5 container-fluid">

        <div class="row">
            <div class="mt-3 col-xs-12 col-sm-12">
                <div class="bg-light border-0">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-3">
                            <li class="breadcrumb-item active">Admin</li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>      
                </div>
            </div>
        </div>

        <div class="">
            {{-- Dashboard Cards --}}

            <div class="row">

                <h5 class="text-info mb-4">Pending Request</h5>  

                <!-- Legal Documents Cards -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2 bg-primary">
                        <div class="card-body">
                            <div class="row text-white no-gutters align-items-center">
                                <div class="col mr-2 ">
                                    <div class="text-uppercase mb-1">
                                       <strong>Legal Documents</strong> 
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fa-solid fa-folders "></i> --}}
                                    <i class="fa-solid fa-file fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2 bg-success">
                        <div class="card-body">
                            <div class="row text-white no-gutters align-items-center">
                                <div class="col mr-2 ">
                                    <div class="text-uppercase mb-1">
                                       <strong>Baranagay ID</strong> 
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fa-solid fa-folders "></i> --}}
                                    <i class="fa-solid fa-id-badge fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2 bg-info">
                        <div class="card-body">
                            <div class="row text-white no-gutters align-items-center">
                                <div class="col mr-2 ">
                                    <div class="text-uppercase mb-1">
                                       <strong>Complaints</strong> 
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fa-solid fa-folders "></i> --}}
                                    <i class="fa-solid fa-users-line fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2 bg-warning">
                        <div class="card-body">
                            <div class="row text-white no-gutters align-items-center">
                                <div class="col mr-2 ">
                                    <div class="text-uppercase mb-1">
                                       <strong>Events</strong> 
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fa-solid fa-folders "></i> --}}
                                    <i class="fa-solid fa-calendar-check fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
             <!-- Content Row -->
             <div class="col-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-info">Pending Legal Documents</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="">

                                <tr>
                                    <th scope="col">Request Date</th>
                                    <th scope="col">Ref No.</th>
                                    <th scope="col">Name of Recipient</th>
                                    <th scope="col">Type of Document</th>
                                </tr>

                                <tbody>
                                    <tr>
                                        <th scope="row">03/28/2022</th>
                                        <td>DOC-000000</td>
                                        <td>Owen Cleo Vesagas</td>
                                        <td>Certificate of Indigency</td>
                                    </tr>
                                </tbody>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-info">Pending Barangay ID</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="">

                                <tr>
                                    <th scope="col">Requested Date</th>
                                    <th scope="col">Ref No.</th>
                                    <th scope="col">Name of Recipient</th>
                                </tr>

                                <tbody>
                                    <tr>
                                        <td>03/28/2022</td>
                                        <td>BID-000000</td>
                                        <td>Owen Cleo Vesagas</td>
                                    </tr>
                                </tbody>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-info">Complaints</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="">

                                <tr>
                                    <th scope="col">Request Date</th>
                                    <th scope="col">Case No.</th>
                                    <th scope="col">Name Of Complainant</th>
                                    <th scope="col">Complaint Type</th>
                                </tr>

                                <tbody>
                                    <tr>
                                        <td>03/28/2022</td>
                                        <th scope="row">BID-121212</th>
                                        <td>Owen Cleo Vesagas</td>
                                        <td>Physical Injury</td>
                                    </tr>
                                </tbody>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-info">Events</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead class="">

                                <tr> 
                                    <th scope="col">Request Date</th>
                                    <th scope="col">Organizer</th>
                                    <th scope="col">Event No.</th>
                                    <th scope="col">Event Type</th>
                                    <th scope="col">Event Location</th>
                                </tr>

                                <tbody>
                                    <tr>
                                        <td>03/28/2022</td>
                                        <td>Smart Telecom</td>
                                        <td>1</td>
                                        <td>Job Fair</td>
                                        <td>Barangay Cover Court</td>
                                    </tr>
                                </tbody>

                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection