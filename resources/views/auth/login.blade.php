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
                            <a class="registration" href=" {{route('register')}}">Create new account</a><br>
                            <a href=" {{route('password.request')}}" class="">I forgot my password</a>
                         
                        </div>
                        <button type="submit" class="btn btn-primary float-left">Login</button>
                    </form>
                   <button class="btn btn-primary btn-lg btn-block " style="margin-top: 30px;">  <i class="fab fa-facebook" aria-hidden="true"></i> Login with Facebook</button>
                    <button class="btn btn-danger btn-lg btn-block mt-3"><i class="fab fa-google-plus-g"></i> Login with Google</button>
                    <div class="footer">
                       <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                    </div>
                    
                </div>
            </div>
    </div><!--/ content wrapper -->
</div><!--/ wrapper -->
</div>
@endsection
