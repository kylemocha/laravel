<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <title>Contact Form</title>
    <style>
     .container {
    max-width: 500px;
    margin: 50px auto;
    text-align: left;
    font-family: sans-serif;
     }
    form {
    border: 1px solid #1A33FF;
    background: #ecf5fc;
    padding: 40px 50px 45px;
    }
    .form-control:focus {
    border-color: #000;
    box-shadow: none;
    }
    label {
    font-weight: 600;
    }
    .error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
    }
    .form-control.error {
    border-color: red;
    padding: .375rem .75rem;
    }   
    </style>
</head>
<body>
<!--contact form-->
    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name">
                <!-- Error -->
                @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
                @if ($errors->has('email'))
                <div class="error">
                    {{ $errors->first('email') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                @if ($errors->has('phone'))
                <div class="error">
                    {{ $errors->first('phone') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                    id="subject">
                @if ($errors->has('subject'))
                <div class="error">
                    {{ $errors->first('subject') }}
                </div>
                @endif
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message"
                    rows="4"></textarea>
                @if ($errors->has('message'))
                <div class="error">
                    {{ $errors->first('message') }}
                </div>
                @endif
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>


<script  src="main.js"></script>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>