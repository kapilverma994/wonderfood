@extends('layouts.app')

@section('content')


<div class="container">


 <div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="registration_page center_container row">
            <div class="center_content col-lg-8">
                {{-- <div class="logo">
                    <img src="{{asset('panel/assets/images/logo.png')}}" alt="" class="img-fluid">
                </div> --}}
                <form action="{{ route('register') }}"  method="post" >
                   @csrf
                    <div class="form-group icon_parent">
                        <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>  <label for="uname">Username</label>
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off" autofocus>

                                         
                    
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                    </div>
                    <div class="form-group icon_parent">
                        <span class="icon_soon_bottom_right"><i class="fas fa-mobile-alt"></i></span>  <label for="uname">Mobile</label>
                        <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="off" autofocus>

                                         
                    
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   
                    </div>
      <div class="form-group icon_parent">
        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>  <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                 
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                      
                    </div>
                    <div class="form-group icon_parent">
                      
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>  <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
   
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      
                    </div>
                    <div class="form-group icon_parent">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span> <label for="rtpassword">Re-type Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       
                    </div>
                    <div class="form-group">
                        <a class="registration" href="{{route('login')}} ">Already have an account</a><br>
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; 2020 <a href="https://wonderdevelopers.com/">wonder developer</a>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div><!--/ content wrapper -->
</div><!--/ wrapper -->
</div>
@endsection
