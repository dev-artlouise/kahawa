@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5 col-xl-5">

            <div class="text-center mb-3">
                <img class="w-25" src="{{asset('img/hakab-removebg-preview.png')}}" alt="">
            </div>
        
            <p class="text-center">
                Experience the taste of our Freshly Brewed coffee
            </p>  

            <div class="card">
                <div class="card-body ">
                    <div class="container">
                        {{-- <h4 class="text-secondary text-center"> <strong> KAHAWA PANALO</strong> </h4> --}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-floating mt-4 mb-3" >
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder=" " value="{{old('email')}}">
                                <label for="name">Email Address</label>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
    
                            <div class="form-floating mt-4 mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder=" " value="{{old('password')}}">
                                <label for="name">Password</label>
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                @if (Route::has('password.request'))
                                        <a class="btn btn-link href="{{ route('password.request') }}" style="text-decoration: none">
                                            <small>
                                            {{ __('Forgot Your Password?') }}
                                            </small>    
                                        </a>
                                @endif
    
                            </div>

                            <div class="d-grid col-12">
                                <button type="submit" class="btn btn-secondary" >
                                    {{ __('Login') }}
                                </button>
                            </div>

                            {{-- <div class="d-grid gap-2 col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mx-auto">
                                <button type="submit" class="btn btn-secondary btn-lg">
                                    {{ __('Register') }}
                                </button>
                            </div> --}}
    
                            
                        </form>
                    </div>

                </div>
            </div>

            <div class="card mt-3">
                <div class="card-body ">
                    <div class="container text-center">
                        <small> New to Coffee Panalo ? <a class="link-primary " href="{{ route('register') }}" style="text-decoration: none" >  Create an account </a></small>
                    </div>      
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
