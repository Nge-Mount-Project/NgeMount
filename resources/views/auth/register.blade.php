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
      <div style="background:url('BG.png');background-size:cover">
      <header class="codrops-header">
         <a href="{{ url('/') }}"><img src="img/logo/logo.png" class="codrops-header__title" style="width:230px;margin-top:5px;"></img></a>
         <p class="codrops-header__tagline">handheld and circle the world</p>
         <!-- sidebar -->
         <nav class="dummy-links">
            <a class="dummy-links__link" href="{{ route('login') }}">Login</a>
            <a class="dummy-links__link" href="{{ route('register') }}">Register</a>
         </nav>
      </header>
      <div class="login">
         <div class="login-header">
             <div class="logo2">
             <img src="1.png" class="logodalam2">
         </div>
         </div>
         
         <div class="reg">
                 <form method="POST" action="{{ route('register') }}" class="login-container">
                     @csrf
                     <p>Username</p>
                     <p>
                         <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="username"  }} required autofocus>

                                         @if ($errors->has('name'))
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('name') }}</strong>
                                             </span>
                                         @endif
                     </p>
                     <p>Email</p>
                     <p >
                         <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required>

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
                     <p>Re-Type Password</p>
                     <p>
                         <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                     </p>

                     <p>
                         <input type="submit" value="Register">
                     </p>


                 </form>
         </div>
      </div>

	</body>
</html>
