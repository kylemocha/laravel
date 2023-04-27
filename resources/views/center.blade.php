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
    <link href="css/center.css" rel="stylesheet" type="text/css">
    <title>Our Centers</title>
</head>
<body>
    <div class="m-4">
        <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
            <div class="container-fluid">
                <a href="main_home" class="navbar-brand">
                    <img src="https://i.ibb.co/MVz8Mnw/MENTAL-HELPLINE-LOGO.png" alt="MENTAL-HELPLINE-LOGO" border="0" width="50">
                    <!--<span class="font-weight-bold" style="font-weight: bold; color: black; font-size: 22px;">Mental Health Counseling Application</span>-->
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="main_home" class="nav-item nav-link active" style=" color: black;">Home</a>
                        <a href="https://www.mdcalc.com/calc/1725/phq9-patient-health-questionnaire9" target="_blank" class="nav-item nav-link" style=" color: black;" >Take PHQ-9 Test</a>
                        <a href="center" class="nav-item nav-link" style="color: black;">Our Centers</a>
                        <a href="contact" class="nav-item nav-link" style=" color: black;" target="_blank">Contact Us</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                      <!--<a href="#" class="text-dark mx-3">
                        <i class="fas fa-envelope fa-2x"></i>
                        <span class="badge bg-danger badge-dot"></span>
                      </a>-->
                        <!--<a href="#" class="nav-item nav-link"><i class="fa-solid fa-user"></i></a>
                        <button style="font-size:22px; border: none; color: black;"><a href="#" class="nav-item nav-link"><i class="far fa-user"></i></a></button>-->
                        <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="font-size:20px; border: none; color: black; background-color: aqua;"><i class="far fa-user"></i></button>
                        <div class="dropdown-menu">
                            <!--<a class="dropdown-item" href="#">Profile</a>-->
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>  
                        </div>   
                    </div>   
                </div>
            </div>
        </nav>
    </div>



</body>
</html>