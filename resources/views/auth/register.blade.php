@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xs-12 col-md-8 col-lg-7 col-xl-7">
            <div class="card">
                

                <div class="card-body">

                    <div class="container">
                        <h4 class="text-secondary text-center"> <strong>REGISTER</strong> </h4>

                        <hr>
    
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('first_name') is-invalid @enderror" name="first_name" placeholder=" " value="{{old('first_name')}}">
                                <label for="name">First Name</label>
    
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('last_name') is-invalid @enderror" name="last_name" placeholder=" " value="{{old('last_name')}}">
                                <label for="name">Last Name</label>
    
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control" name="middle_name" placeholder=" " value="{{old('middle_name')}}">
                                <label for="name">Middle Name</label>
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address" placeholder=" " value="{{old('address')}}">
                                <label for="name">Address</label>
    
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('city') is-invalid @enderror" name="city" placeholder=" " value="{{old('city')}}">
                                <label for="name">City</label>
    
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="text" class="form-control  @error('contact_number') is-invalid @enderror" name="contact_number" placeholder=" " value="{{old('contact_number')}}">
                                <label for="name">Contact Number</label>
    
                                    @error('contact_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <hr>

                            <div class="form-floating mt-4 mb-3">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder=" " value="{{old('email')}}">
                                <label for="name">Email</label>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input type="password" name="password"  class="form-control @error('password') is-invalid @enderror" name="password" placeholder=" ">
                                <label for="name">Password</label>

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>

                            <div class="form-floating mt-4 mb-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder=" ">
                                <label for="password-confirm">Confirm Password</label>
                            </div>

                            <div class="d-grid gap-2 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg">
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
