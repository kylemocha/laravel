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
    <title>Main Home</title>
</head>
<body>
    <!--navbar-->  
    <div class="m-4">
        <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
            <div class="container-fluid">
                <a href="main_home" class="navbar-brand">
                    <img src="https://i.ibb.co/MVz8Mnw/MENTAL-HELPLINE-LOGO.png" alt="MENTAL-HELPLINE-LOGO" border="0" width="50">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="main_home" class="nav-item nav-link active" style=" color: black;">Home</a>
                        <a href="#" class="nav-item nav-link" style=" color: black;" >Take Test</a>
                        <a href="#" class="nav-item nav-link" style="color: black;">Our Center</a>
                        <a href="#modalContactForm" data-toggle="modal" data-target="#modalContactForm" class="nav-item nav-link"style=" color: black;">Contact Us</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                    <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="font-size:20px; border: none; color: black; background-color: aqua;"><i class="far fa-user"></i></button>
                    <div class="dropdown-menu">
                      @guest
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                      @endguest
                    </div>                     
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    
    
  <!--Carousel-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
      <li data-target="#carousel-example-2" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/RhccWrh/Craigslist-2-3.png"
            alt="Craigslist-2-3">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive" style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">
            Welcome to CSWD Mental Health Counseling Application</h3>
          <p style="color: #006a89;">Providing a safe platform for mental health counseling</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/KV1nPsg/Craigslist-2-9.png"
            alt="Craigslist-2-9">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive" style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">Schedule an appointment</h3>
          <p style="color: #006a89;">Providing mental health services at any moment</p>
          <li class="list-inline-item">
            <a href="login" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Sign In</a>
          </li>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/FXbSgGV/Craigslist-2-3.png"
            alt="Craigslist-2-3">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive" style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">Mental Health Test</h3>
          <p style="color: #006a89;">To assess your mental health requirements</p>
          <li class="list-inline-item">
            <a href="#" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Take a Test</a>
          </li>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/3CN44Tb/Craigslist-2-10.png"
            alt="Craigslist-2-10">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive" style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">Mental health is important</h3>
          <p style="color: #006a89;">How to care for our mental health</p>
          <li class="list-inline-item">
            <a href="#" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Read More</a>
          </li>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only" >Next</span>
    </a>
  </div>

  <!--Section counseling-->
  <div class="bg-white py-5">
    <div class="container py-5">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="font-weight-light" style="font-weight: bold;">The Importance of Mental Health Counseling</h2>
          <p class="font-italic text-muted mb-4">Counseling can help people overcome earlier trauma or mental and emotional hurdles, allowing them to minimize stress and anxiety, avoid emotional triggers, build healthy relationships, and take other beneficial steps in various situations.</p>
          <a href="https://counseling.online.wfu.edu/blog/what-is-clinical-mental-health-counseling/" target="_blank" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
        </div>
        <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://i.ibb.co/gjx01VM/6.png" alt="6" class="img-fluid mb-4 mb-lg-0"></div>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-5 px-5 mx-auto"><img src="https://i.ibb.co/5Ypt2NW/5.png" alt="5" class="img-fluid mb-4 mb-lg-0"></div>
        <div class="col-lg-6">
          <h2 class="font-weight-light" style="font-weight: bold;">Counseling is only a mouse click away</h2>
          <p class="font-italic text-muted mb-4">
            Begin caring for your mental health today and schedule a consultation with a doctor using CSWD Mental Health Counseling Application.</p>
          <!--<a href="#" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>-->
        </div>
      </div>
    </div>
  </div>
  
  <!--image gallery-->
  <div class="img-gal">
  <h1 style="text-align: center; font-weight: bold; padding: 15px 10px; margin: 8px;">Meet our Therapists</h1>
  <h5 style="padding: 5px 8px; font-size: 18px; text-align: center;">The assistance you need here for your mental health.</h5>
  <div class="responsive">
    <div class="gallery">
      <a href="#">
        <img src="https://i.ibb.co/my39KRW/Image-For-Article-23295-16680815010862881.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="#">
        <img src="https://i.ibb.co/my39KRW/Image-For-Article-23295-16680815010862881.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="#">
        <img src="https://i.ibb.co/my39KRW/Image-For-Article-23295-16680815010862881.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="#">
        <img src="https://i.ibb.co/my39KRW/Image-For-Article-23295-16680815010862881.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Add a description of the image here</div>
    </div>
  </div>
 </div>

 
 <!--footer-->
 <footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span style="font-size: 17px;">Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-facebook-f" style="color: #4267B2;"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-twitter" style="color: #1DA1F2;"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-google" style="color: #4285F4;"></i>
      </a>
      <a href="#" class="me-4 text-reset">
        <i class="fab fa-instagram" style="color: #E1306C;"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-brain"></i>  CSWD Mental Health Counseling
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Links
          </h6>
          <p>
            <a href="#" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#" class="text-reset">Take Test</a>
          </p>
          <p>
            <a href="#" class="text-reset">Our Center</a>
          </p>
          <p>
            <a href="#" class="text-reset">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i>CDOC</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            1234@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <!--<p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>-->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="#">CSWD Mental Health Counseling.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!--back to top btn-->
<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>

<!--modal contact form-->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form34" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-unique">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>



   <script  src="main.js"></script>
   <script src="https://code.jquery.com/jquery.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>