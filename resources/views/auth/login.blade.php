 @extends('layouts.auth')

 @section('content')
     <div class="body_content">
         <!-- Our Compare Area -->
         <section class="our-compare pt60 pb60">
             <img src="images/icon/login-page-icon.svg" alt="" class="login-bg-icon wow fadeInLeft"
                 data-wow-delay="300ms">
             <div class="container">
                 <div class="row wow fadeInRight" data-wow-delay="300ms">
                     <div class="col-lg-6">
                         <div class="log-reg-form signup-modal form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
                             <div class="text-center mb40">
                                 <img class="mb25" src="images/header-logo2.svg" alt="">
                                 <h2>Sign in</h2>
                                 <p class="text">Sign in with this account across the following sites.</p>
                             </div>
                             <div class="mb25">
                                 <label class="form-label fw600 dark-color">Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email">
                             </div>
                             <div class="mb15">
                                 <label class="form-label fw600 dark-color">Password</label>
                                 <input type="text" class="form-control" placeholder="Enter Password">
                             </div>
                             <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                 <label class="custom_checkbox fz14 ff-heading">Remember me
                                     <input type="checkbox" checked="checked">
                                     <span class="checkmark"></span>
                                 </label>
                                 <a class="fz14 ff-heading" href="#">Lost your password?</a>
                             </div>
                             <div class="d-grid mb20">
                                 <button class="ud-btn btn-thm" type="button">Sign in <i
                                         class="fal fa-arrow-right-long"></i></button>
                             </div>
                             {{-- <div class="hr_content mb20">
                                    <hr><span class="hr_top_text">OR</span>
                                </div>
                                <div class="d-grid mb10">
                                    <button class="ud-btn btn-white fw400" type="button"><i class="fab fa-google"></i>
                                        Continue Google</button>
                                </div>
                                <div class="d-grid mb10">
                                    <button class="ud-btn btn-fb fw400" type="button"><i
                                            class="fab fa-facebook-f"></i> Continue Facebook</button>
                                </div>
                                <div class="d-grid mb20">
                                    <button class="ud-btn btn-apple fw400" type="button"><i
                                            class="fab fa-apple"></i> Continue Apple</button>
                                </div> --}}
                             <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600"
                                     href="page-register.html">Create an account.</a></p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
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
