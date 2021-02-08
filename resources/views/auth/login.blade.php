@extends('layouts.app')

@section('content')
<div class="container">


  <!-- wrapper -->
  <div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
            <!-- page content -->
            
            <div class="login_page center_container row">
                <div class="center_content col-lg-8">
                    {{-- <div class="logo">
                        <img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                    </div> --}}
                    <form method="POST" class="d-block" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group icon_parent">
                            <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span> <label for="password">Email</label>
                             <input id="email" type="email" placeholder="Enter Email id" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                             
                             @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                        </div>
                        <div class="form-group icon_parent">
                            <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>   <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                            
                            
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <span class="checkmark"></span> <label class="chech_container">Remember me
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                             
                            </label>
                        </div>
                        <div class="form-group">
                            <a class="registration" href=" {{route('register')}}">Create new account</a><br>
                            <a href=" {{route('password.request')}}" class="text-white">I forgot my password</a>
                            <button type="submit" class="btn btn-primary float-left">Login</button>
                        </div>
                    </form>
                    <div class="footer">
                       <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                    </div>
                    
                </div>
            </div>
    </div><!--/ content wrapper -->
</div><!--/ wrapper -->
</div>
@endsection
