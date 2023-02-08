
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <!--<link href="log.css" rel="stylesheet" type="text/css">-->
<style>
    @import url("https://fonts.googleapis.com/css?family=Assistant:400,700");
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: #ABCDEF;
  overflow: hidden;
}
/*.logo{
    display: block;
    padding-top: 100px;
    margin-left: auto;
    margin-right: auto;
}*/
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #006a89;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 35px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
}
.exit{
    border-radius: 5px 5px 0 0;
    background: #006a89;
    padding: 10px;
    text-align: right;
    font-size: 25px;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #006a89;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #006a89;
  border: 1px solid #006a89;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #136a8a;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: #006a89;
  border: 1px solid #006a89;
  cursor: pointer;
}
form .button input:hover{
  background: #ABCDEF;
  color: black;
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: #136a8a;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
</style>
    <title>Login Page</title>
</head>
<body>
@extends('layout.main_home')
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