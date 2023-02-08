
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link href="css/log.css" rel="stylesheet" type="text/css">
<style>

</style>
    <title>Login Page</title>
</head>
<body>
@extends
@section('content')
  <div class="container">
    <div class="wrapper">
      <div class="exit">
      <a href="main_home" class="btn btn-info" role="button" style="color: white; cursor: pointer;"><i class="fas fa-times"></i></a> 
      <div class="title"><span>Login</span> 
      </div>
    </div>
      <form action=form method="POST" action="{{ route('login.custom') }}">
      @csrf
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Email or Phone" id="email" autofocus required>
          @if ($errors->has('email'))
           <span class="text-danger">{{ $errors->first('email') }}</span>
          @endif
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" id="password" required>
          @if ($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not yet registered?<a href="register">Sign In</a></div>
      </form>
    </div>
  </div>
  
</body>
</html>