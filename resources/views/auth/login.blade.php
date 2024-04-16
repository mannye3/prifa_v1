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
                                     <h4 class="text-center mb-4">Sign in your account</h4>
                                     <form action="">
                                         <div class="form-group mb-4">
                                             <label class="form-label" for="username">Full Name</label>
                                             <input type="text" class="form-control" placeholder="Enter username"
                                                 id="username">
                                         </div>
                                         <div class="form-group mb-3 mb-sm-4">
                                             <label class="form-label">Password</label>
                                             <div class="position-relative">
                                                 <input type="password" id="dz-password" class="form-control"
                                                     value="Password">
                                                 <span class="show-pass eye">
                                                     <i class="fa fa-eye-slash"></i>
                                                     <i class="fa fa-eye"></i>
                                                 </span>
                                             </div>
                                         </div>
                                         <div
                                             class="form-row d-flex flex-wrap justify-content-between align-items-baseline mb-2">
                                             <div class="form-group mb-sm-4 mb-1">
                                                 <div class="form-check custom-checkbox ms-1">
                                                     <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                     <label class="form-check-label" for="basic_checkbox_1">Remember my
                                                         preference</label>
                                                 </div>

                                             </div>
                                             <div class="form-group ms-2">
                                                 <a href="{{ route('password.request') }}">Forgot Password?</a>

                                             </div>
                                         </div>
                                         <div class="text-center">
                                             <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                         </div>
                                     </form>
                                     <div class="new-account mt-3">
                                         <p>Don't have an account? <a class="text-primary" href="{{ route('login') }}">Sign
                                                 up</a>
                                         </p>
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
