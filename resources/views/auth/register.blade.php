@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xs-12 col-md-8 col-lg-5 col-xl-5">

            <div class="text-center mb-3">
                <img class="w-25" src="{{asset('img/hakab-removebg-preview.png')}}" alt="">
            </div>

            <p class="text-center">
                Welcome to Coffee panalo !<br>
                Let us brew Kahawa with love for you 
            </p>  
    
            <div class="card">
                

                <div class="card-body">

                    <div class="container">
                        {{-- <h4 class="text-secondary text-center"> <strong>REGISTER</strong> </h4> --}}
    
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>First Name</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('firstName') is-invalid @enderror" 
                                    type="text" 
                                    name="firstName"
                                    value="{{old('firstName')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder=" " value="{{old('firstName')}}">
                                <label for="name">First Name</label>
    
                                    @error('firstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Last Name</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('lastName') is-invalid @enderror" 
                                    type="text" 
                                    name="lastName"
                                    value="{{old('lastName')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('lastName') is-invalid @enderror" name="lastName" placeholder=" " value="{{old('lastName')}}">
                                <label for="name">Last Name</label>
    
                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Middle Name</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm" 
                                    type="text" 
                                    name="middleName"
                                    value="{{old('middleName')}}"
                                    aria-label=".form-control-sm example"
                                >
                            </div>
{{-- 
                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control" name="middleName" placeholder=" " value="{{old('middleName')}}">
                                <label for="middleName">Middle Name</label>
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Address</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('address') is-invalid @enderror" 
                                    type="text" 
                                    name="address"
                                    value="{{old('address')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address" placeholder=" " value="{{old('address')}}">
                                <label for="name">Address</label>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>City</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('city') is-invalid @enderror" 
                                    type="text" 
                                    name="city"
                                    value="{{old('city')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

{{-- 
                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('city') is-invalid @enderror" name="city" placeholder=" " value="{{old('city')}}">
                                <label for="name">City</label>
    
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Contact Number</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('contactNumber') is-invalid @enderror" 
                                    type="text" 
                                    name="contactNumber"
                                    value="{{old('contactNumber')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('contactNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('contactNumber') is-invalid @enderror" name="contactNumber" placeholder=" " value="{{old('contactNumber')}}">
                                <label for="name">Contact Number</label>
    
                                    @error('contactNumber')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Email</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" 
                                    type="text" 
                                    name="email"
                                    value="{{old('email')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder=" " value="{{old('email')}}">
                                <label for="name">Email Address</label>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Password</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm @error('password') is-invalid @enderror" 
                                    type="text" 
                                    name="password"
                                    value="{{old('password')}}"
                                    aria-label=".form-control-sm example"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" name="password" placeholder=" ">
                                <label for="name">Password</label>

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div> --}}

                            <div class="mb-3">
                                <label class="form-label"> 
                                    <small>Confirm Password</small> 
                                </label>
                                <input 
                                    class="form-control form-control-sm" 
                                    type="text" 
                                    name="password_confirmation"
                                    aria-label=".form-control-sm example"
                                >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-floating mt-4 mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder=" ">
                                <label for="password-confirm">Confirm Password</label>
                            </div> --}}

                            <div class="d-grid col-12 mb-3">
                                <button type="submit" class="btn btn-secondary ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            
                        </form>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
