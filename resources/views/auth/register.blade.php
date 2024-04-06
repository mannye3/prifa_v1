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
                                 <h4 class="text-center mb-4">Sign up your account</h4>
                                 <form action="https://omah.dexignzone.com/xhtml/index.html">
                                     <div class="form-group mb-4">
                                         <label class="form-label" for="username">Username</label>
                                         <input type="text" class="form-control" placeholder="Enter username"
                                             id="username">
                                     </div>
                                     <div class="form-group mb-4">
                                         <label class="form-label" for="email">Email</label>
                                         <input type="email" class="form-control" placeholder="hello@example.com"
                                             id="email">
                                     </div>
                                     <div class="form-group mb-sm-4 mb-3">
                                         <label class="form-label">Password</label>
                                         <div class="position-relative">
                                             <input type="password" id="dz-password" class="form-control" value="123456">
                                             <span class="show-pass eye">
                                                 <i class="fa fa-eye-slash"></i>
                                                 <i class="fa fa-eye"></i>
                                             </span>
                                         </div>
                                     </div>

                                     <div class="text-center">
                                         <button type="submit" class="btn btn-primary btn-block">Sign up</button>

                                     </div>
                                 </form>
                                 <div class="new-account mt-3">
                                     <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign
                                             in</a>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
