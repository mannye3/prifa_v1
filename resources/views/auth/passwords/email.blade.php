     @extends('layouts.auth')

     @section('content')

         <body>
             <div class="fix-wrapper">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-lg-5 col-md-6">
                             <div class="card mb-0 h-auto">
                                 <div class="card-body">
                                     <div class="text-center mb-3">
                                         <a href="{{ route('welcome') }}"><img class="logo-auth"
                                                 src="{{ asset('user/images/logo-full.png') }}" alt=""></a>
                                     </div>
                                     <h4 class="text-center mb-4">Reset your password</h4>
                                     <form action="https://omah.dexignzone.com/xhtml/index.html">
                                         <div class="form-group mb-4">
                                             <label class="form-label" for="username">Email</label>
                                             <input type="email" class="form-control" placeholder="Enter username"
                                                 id="username">
                                         </div>


                                         <div class="text-center">
                                             <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                         </div>
                                     </form>
                                     <div class="new-account mt-3">
                                         {{-- <p>Don't have an account? <a class="text-primary" href="{{ route('login') }}">Sign
                                                 up</a>
                                         </p> --}}
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         @endsection































         {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
