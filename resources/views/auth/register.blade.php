 @extends('layouts.auth')

 @section('content')
     <div class="body_content">
         <!-- Our Compare Area -->
         <section class="our-compare pt60 pb60">
             <img src="user/images/icon/register-page-icon.svg" alt="" class="login-bg-icon wow fadeInLeft"
                 data-wow-delay="300ms">
             <div class="container">
                 <div class="row wow fadeInRight" data-wow-delay="300ms">
                     <div class="col-lg-6">
                         <div class="log-reg-form signup-modal form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
                             <div class="text-center mb40">
                                 <a href="{{ route('welcome') }}"><img class="mb25" src="user/images/header-logo2.svg"
                                         alt=""></a>
                                 <h2>Create account</h2>

                             </div>
                             <div class="mb25">
                                 <label class="form-label fw600 dark-color">Full Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Full Name">
                             </div>

                             <div class="mb25">
                                 <label class="form-label fw600 dark-color">Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email">
                             </div>
                             <div class="mb15">
                                 <label class="form-label fw600 dark-color">Password</label>
                                 <input type="text" class="form-control" placeholder="Enter Password">
                             </div>
                             <div class="d-grid mb20">
                                 <button class="ud-btn btn-thm" type="button">Sign Up <i
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
                                 <button class="ud-btn btn-fb fw400" type="button"><i class="fab fa-facebook-f"></i>
                                     Continue Facebook</button>
                             </div>
                             <div class="d-grid mb20">
                                 <button class="ud-btn btn-apple fw400" type="button"><i class="fab fa-apple"></i>
                                     Continue Apple</button>
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
