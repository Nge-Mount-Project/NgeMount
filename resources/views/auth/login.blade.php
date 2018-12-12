<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/normalize.css" />
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      <link rel="icon" type="image/png" href="img/logo/2.png" />
	</head>
	<body>
      <header class="codrops-header">
         <a href="{{ url('/') }}"><img src="img/logo/logo.png" class="codrops-header__title" style="width:230px;margin-top:5px;"></img></a>
         <p class="codrops-header__tagline">handheld and circle the world</p>
         <!-- sidebar -->
         <nav class="dummy-links">
            <a class="dummy-links__link" href="{{ route('login') }}">Login</a>
            <a class="dummy-links__link" href="{{ route('register') }}">Register</a>
         </nav>
      </header>
   <div style="width: 100%;height: 100%;background:url('BG.png');background-size:cover">
   <div class="logo">
       <img src="img/logo/2.png" class="logodalam">
   </div>
   <div class="login">
   <div class="login-header"></div>
       <form class="login-container" method="POST" action="{{ route('login') }}">
           @csrf
           <p>Email</p>
           <p>
               <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required autofocus>
               @if ($errors->has('email'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                              @endif
           </p>
           <p>Password</p>
           <p>
               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                              @endif
           </p>
           <p class="p1">
                                   <input  class="col-md-1 offset-md-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                   <label  for="remember">
                                       Remember Me
                                   </label>
                           </p>
         <p>
               <input type="submit" value="Log in"class="btn btn-primary">
           </p>
         <a class="forgot" href="{{ route('password.request') }}">
                                 Forgot Your Password?
                              </a>
                           </div>

       </form>
   </div>
	</body>
</html>
