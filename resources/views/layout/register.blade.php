<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link href="css/log.css" rel="stylesheet" type="text/css">
    <title>Register Page</title>
</head>

<body>
  @extends('main_home')
  @section('content')
      <!--register form-->
    <div class="container">
      <div class="wrapper">
      <div class="exit">
      <a href="login" class="btn btn-info" role="button" style="color: white; cursor: pointer;"><i class="fas fa-times"></i></a> 
      <div class="title"><span>Register</span></div>
      </div>
       <form class ="form" action="{{ route('register.custom') }}" method="POST">
        @csrf
        <div class="row">
          <i class="fas fa-user-circle"></i>
          <input type="text" placeholder="Name" id="name" required>
          @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
          @endif
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Email" id="email_address"  name="email" required>
          @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" id="password" name="password" required>
          @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <div class="row button">
          <input type="submit" value="Create Account">
        </div>
        <div class="signup-link">Already registered?<a href="/login">Sign In</a></div>
      </form>
      </div>
    </div>
    @endsection
    
      

    
</body>
</html>