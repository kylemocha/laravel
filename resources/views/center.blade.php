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

    <div class="wrapper">
    <!--Carousel wrapper -->
    <h1 style="text-align: center; font-weight: bold; font-size: 28px;">Our Centers</h1>
    <!--Carousel Wrapper-->
   <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
   <!--Indicators-->
   <ol class="carousel-indicators">
     <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
     <li data-target="#carousel-example-2" data-slide-to="1"></li>
     <li data-target="#carousel-example-2" data-slide-to="2"></li>
   </ol>
   <!--/.Indicators-->
   <!--Slides-->
   <div class="carousel-inner" role="listbox">
     <div class="carousel-item active">
       <div class="view">
         <img class="d-block w-100" src="https://i.ibb.co/gTYHBZB/Beige-and-Dark-Brown-Curated-Editorial-General-Photography-Photography-Website.png" alt="First slide">
         <div class="mask rgba-black-light"></div>
       </div>
       <div class="carousel-caption">
         <h3 class="h3-responsive"  style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">BAHAY PAG-ASA FOR GIRLS</h3>
         <!--<p style="color: #006a89;">First text</p>-->
         <li class="list-inline-item">
           <a href="#bahay_girls " class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Learn More</a>
         </li>
       </div>
     </div>
     <div class="carousel-item">
       <!--Mask color-->
       <div class="view">
         <img class="d-block w-100" src="https://i.ibb.co/DVkx2hL/Beige-and-Dark-Brown-Curated-Editorial-General-Photography-Photography-Website-1.png" alt="Second slide">
         <div class="mask rgba-black-light"></div>
       </div>
       <div class="carousel-caption">
         <h3 class="h3-responsive"  style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">BAHAY PAG-ASA: TAHANAN NG KABATAAN</h3>
          <!--<p style="color: #006a89;">Secondary text</p>-->
         <li class="list-inline-item">
           <a href="#bahay_pag-asa" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Learn More</a>
         </li>
       </div>
     </div>
     <div class="carousel-item">
       <!--Mask color-->
       <div class="view">
         <img class="d-block w-100" src="https://i.ibb.co/vZM6Y54/Beige-and-Dark-Brown-Curated-Editorial-General-Photography-Photography-Website-2.png" alt="Third slide">
         <div class="mask rgba-black-light"></div>
       </div>
       <div class="carousel-caption">
         <h3 class="h3-responsive"  style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">BOYS TOWN OF CDO</h3>
         <!--<p style="color: #006a89;">Third text</p>-->
         <li class="list-inline-item">
           <a href="#bahay_boys" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Learn More</a>
         </li>
       </div>
     </div>
     <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/zFZFTpp/Beige-and-Dark-Brown-Curated-Editorial-General-Photography-Photography-Website-3.png" alt=" Fourth slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive"  style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">GOLDEN HOME CARE FOR THE ELDERLY</h3>
          <!--<p style="color: #006a89;">Third text</p>-->
          <li class="list-inline-item">
            <a href="#bahay_elders" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Learn More</a>
          </li>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://i.ibb.co/3kyKdfM/Beige-and-Dark-Brown-Curated-Editorial-General-Photography-Photography-Website-4.png" alt=" Fifth slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive"  style="color: #006a89; text-shadow: 2px 2px 2px #ABCDEF; font-weight: bold;">SOCIAL DEVELOPMENT CENTER - HOME CARE FOR GIRLS</h3>
          <!--<p style="color: #006a89;">Third text</p>-->
          <li class="list-inline-item">
            <a href="#bahay_care" class="btn btn-primary d-flex justify-content-center d-md-table mx-auto">Learn More</a>
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
     <span class="sr-only">Next</span>
   </a>
   <!--/.Controls-->
 </div>
 <!--/.Carousel Wrapper-->
</div>

<section class="firstsection">
    <div class="box-main" id="bahay_girls">
        <div class="firstHalf">
            <h1 class="text-big" id="web">BAHAY PAG-ASA FOR GIRLS</h1>
            <p class="text-small">
                It admits 15 - 17 years old female children-in-conflict with the Law (CICL) 
                committed by the court for temporary shelter and intervention program.
            </p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>
            <!--<p><b>Center Head:</b> Rowena G. Palarca, RSW</p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>-->

        </div>
    </div>
</section>

<section class="firstsection">
    <div class="box-main" id="bahay_pag-asa">
        <div class="firstHalf">
            <h1 class="text-big" id="web">BAHAY PAG-ASA: TAHANAN NG KABATAAN</h1>
            <p class="text-small">
                This center temporarily houses: <br> male Children in Conflict with the Law (CICL) 
                ages from 15 - 18 years old committed by the court for temporary shelter and intervention program
            </p>
            <p><b>Address:</b> Bahay Pag-Asa Tahanan ng Kabataan, Lumbia, Cagayan De Oro, Philippines</p>
            <!--<p><b>Center Head:</b> Rowena G. Palarca, RSW</p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>-->

        </div>
    </div>
</section>

<section class="firstsection">
    <div class="box-main" id="bahay_boys">
        <div class="firstHalf">
            <h1 class="text-big" id="web">BOYS TOWN OF CDO</h1>
            <p class="text-small">
                This center provides temporary shelter to those 7 to 17 years old boys who experienced abuse, abandonment, and neglect.<br> 
                They accept male youngsters who are regarded as dependents and who required the support of the center since their relatives were unable or <br>unable to provide it.
            </p>
            <p><b>Address:</b> Lumbia, Cagayan de Oro City</p>
            <!--<p><b>Center Head:</b> Rowena G. Palarca, RSW</p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>-->

        </div>
    </div>
</section>

<section class="firstsection">
    <div class="box-main" id="bahay_elders">
        <div class="firstHalf">
            <h1 class="text-big" id="web">GOLDEN HOME CARE FOR THE ELDERLY</h1>
            <p class="text-small">
                This center temporarily houses the elderly in the city who 
                experienced abandonment and neglect while undergoing rehabilitation and preparing <br>them for possible family reintegration
            </p>
            <p><b>Address:</b> Maitum, Upper Puerto, Cagayan de Oro City</p>
            <!--<p><b>Center Head:</b> Rowena G. Palarca, RSW</p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>-->

        </div>
    </div>
</section>

<section class="firstsection">
    <div class="box-main" id="bahay_care">
        <div class="firstHalf">
            <h1 class="text-big" id="web">SOCIAL DEVELOPMENT CENTER - HOME CARE FOR GIRLS</h1>
            <p class="text-small">
                This center temporarily houses 7 to 17 years old girls who experienced abuse and exploitation that need immediate treatment and rehabilitation.<br>
                They also cater to those girls considered to be as Children in Conflict with the Law (CICL) committed by the court<br> for temporary shelter and intervention program
            </p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>
            <!--<p><b>Center Head:</b> Rowena G. Palarca, RSW</p>
            <p><b>Address:</b> Macanhan, Carmen, Cagayan de Oro City</p>-->

        </div>
    </div>
</section>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>