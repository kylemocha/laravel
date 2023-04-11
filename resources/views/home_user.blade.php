<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <script>
      function show(elementID) {
    var ele = document.getElementById(elementID);
    if (!ele) {
        alert("no such element");
        return;
    }
    var pages = document.getElementsByClassName('page');
    for(var i = 0; i < pages.length; i++) {
        pages[i].style.display = 'none';
    }
    ele.style.display = 'block';
    }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/hom.css" rel="stylesheet" type="text/css">
    <title>Home Page</title>
</head>

<html>
<body>
  @section('content')
<!--home page for the users-->
  <div class="m-4">
    <nav class="navbar navbar-expand-lg fixed-top bg-light navbar-light">
        <div class="container-fluid">
            <a href="home_user" class="navbar-brand">
                <img src="https://i.ibb.co/MVz8Mnw/MENTAL-HELPLINE-LOGO.png" alt="MENTAL-HELPLINE-LOGO" border="0" width="50">
                <!--<span class="font-weight-bold" style="font-weight: bold; color: black; font-size: 22px;">Mental Health Counseling Application</span>-->
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="home_user" class="nav-item nav-link active" style=" color: black;">Home</a>
                    <a href="#" class="nav-item nav-link" style=" color: black;" >Take Test</a>
                    <a href="#" class="nav-item nav-link" style="color: black;">Our Center</a>
                    <a href="contact" class="nav-item nav-link" style=" color: black;" target="_blank">Contact Us</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <!--<a href="#" class="nav-item nav-link"><i class="fa-solid fa-user"></i></a>
                    <button style="font-size:22px; border: none; color: black;"><a href="#" class="nav-item nav-link"><i class="far fa-user"></i></a></button>-->
                    <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" style="font-size:20px; border: none; color: black; background-color: aqua;"><i class="far fa-user"></i></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>   
                </div>   
            </div>
        </div>
    </nav>
</div>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3 style="text-align: center; font-family: Assistant, sans-serif; font-size: 20px; font-weight: bold;">
            CSWD Mental Health Counseling Application</h3>
        </div>
        <!--searchbar-->
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control" placeholder="Search">
        </div>
    <ul class="list-unstyled components">
        <!--<p>Features</p>-->
        <li class="active">
            <li>
                <a href="#" onclick="show('page1');">Meet our Therapists</a>
            </li>
        </li>  
            <li>
            <a href="#moodjournal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mood Journal</a>
            <ul class="collapse list-unstyled" id="moodjournal">
                <li>
                    <a href="#" onclick="show('page2');">Write Journal</a>
                </li>
                <li>
                    <a href="#" onclick="show('page3');">View Journal</a>
                </li>
            </ul>
            </li>
            <!--<li>
                <a href="#" onclick="show('page4');">Rate your Mood</a>
            </li>-->
            <li>
                <a href="#" onclick="show('page5');">Recommendations</a>
            </li>  
    </ul>
    </nav>
 
 <div id="content">
  <div class="card-body">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  </div>
    <div class="page" id="page1">
        <button type="button" id="sidebarCollapse" class="btn btn-info">
         <i class="fas fa-align-left"></i>
         <span></span>
        </button>
        <h2 style="font-weight: bold;">Welcome, {{ Auth::user()->name }}!</h2>
        <!--Modal Calendar-->
        <button type="button" id="myCalendar" class="btn btn-primary btn-md float-end"><i class="fa fa-calendar" aria-hidden="true"></i> Calendar</button>
        <div id="myDiv" class="modal1">
          <!-- Modal content -->
          <div class="modal-content1">
            <span class="close">&times;</span>
            <h4 style="font-weight: bold;">See your schedule</h4>
            <div class="calendar"></div> 
          </div>
        
        </div>


        <p style="font-size: 17px; color: #8d97ad;">Let's track your mental health today!</p>
        <div class="row justify-content-center">
        <div class="col-md-8 text-center">
        <h3 class="my-3">Schedule an appointment</h3>
        <h6 class="subtitle font-weight-normal" style="color: #8d97ad;">Decide which of our mental health specialists best meets your needs.</h6>
        </div>
        </div>
        
        <div class="content">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4">
                      <div class="text-center card-box">
                          <div class="member-card pt-2 pb-2">
                              <div class="thumb-lg member-thumb mx-auto"><img src="https://i.ibb.co/XXnRvHS/920988.png"  class="rounded-circle img-thumbnail" alt="profile-image"></div>
                              <div class="">
                                  <h4>Dr. Freddie J. Plourde</h4>
                                  <h4>Psychiatrist</h4>
                                  <p class="text-muted">09675721234 <span>| </span><span><a href="#" class="text-pink">ed@gmail.com</a></span></p>
                              </div>
                              <ul class="social-links list-inline">
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                  <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                              </ul>
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" id="myAppt">Book Now</button>
                              <!--modal appt form-->
                              <div id="myMod" class="modal1">
                              <!-- Modal content -->
                              <div class="modal-content2">  
                              <span class="close1">&times;</span>
                              <h4 style="font-weight: bold;">See Dr. ---- schedule</h4>
                              <div class="container1">
                                <div class="calendar1">
                                  <div class="front">
                                    <!--<div class="current-date">
                                      <h1>March 2023</h1>	
                                    </div>-->
                                    <div class="current-month">
                                      <ul class="week-days">
                                        <li>MON</li>
                                        <li>TUE</li>
                                        <li>WED</li>
                                        <li>THU</li>
                                        <li>FRI</li>
                                        <li>SAT</li>
                                        <li>SUN</li>
                                      </ul>
                          
                                      <div class="weeks">
                                        <div class="first">
                                          <span class="last-month">28</span>
                                          <span class="last-month">29</span>
                                          <span class="last-month">30</span>
                                          <span class="last-month">31</span>
                                          <span>01</span>
                                          <span>02</span>
                                          <span>03</span>
                                        </div>
                          
                                        <div class="second">
                                          <span>04</span>
                                          <span>05</span>
                                          <span>06</span>
                                          <span>07</span>
                                          <span>08</span>
                                          <span>09</span>
                                          <span>10</span>
                                        </div>
                          
                                        <div class="third">
                                          <span>11</span>
                                          <span>12</span>
                                          <span>13</span>
                                          <span>14</span>
                                          <span>15</span>
                                          <span>16</span>
                                          <span>17</span>
                                        </div>
                          
                                        <div class="fourth">
                                          <span>18</span>
                                          <span>19</span>
                                          <span>20</span>
                                          <span>21</span>
                                          <span>22</span>
                                          <span>23</span>
                                          <span>24</span>
                                        </div>
                          
                                        <div class="fifth">
                                          <span>25</span>
                                          <span>26</span>
                                          <span>27</span>
                                          <span>28</span>
                                          <span>29</span>
                                          <span>30</span>
                                          <span>31</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>                         
                                </div>
                              </div>
                            
                              <div class="formbold-main-wrapper">
                                <div class="formbold-form-wrapper">                      
                                  <form action="#">
                                    <div class="formbold-mb-5">
                                      <label for="name" class="formbold-form-label" style="font-weight: bold;"> Full Name </label>
                                      <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        placeholder="Full Name"
                                        class="formbold-form-input"
                                      />
                                    </div>
                                    <div class="formbold-mb-5">
                                      <label for="phone" class="formbold-form-label" style="font-weight: bold;"> Phone Number </label>
                                      <input
                                        type="text"
                                        name="phone"
                                        id="phone"
                                        placeholder="Enter your phone number"
                                        class="formbold-form-input"
                                      />
                                    </div>
                                    <div class="formbold-mb-5">
                                      <label for="email" class="formbold-form-label" style="font-weight: bold;"> Email Address </label>
                                      <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="Enter your email"
                                        class="formbold-form-input"
                                      />
                                    </div>
                                    <div class="flex flex-wrap formbold--mx-3">
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5 w-full">
                                          <label for="date" class="formbold-form-label" style="font-weight: bold;"> Date </label>
                                          <input
                                            type="date"
                                            name="date"
                                            id="date"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <label for="time" class="formbold-form-label">Time </label>
                                          <input
                                            type="time"
                                            name="time"
                                            id="time"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>
                                    </div>
                              
                                    <div class="formbold-mb-5 formbold-pt-3">
                                      <label class="formbold-form-label formbold-form-label-2" style="font-weight: bold;">
                                        Address
                                      </label>
                                      <div class="flex flex-wrap formbold--mx-3">
                                        <div class="w-full sm:w-half formbold-px-3">
                                          <div class="formbold-mb-5">
                                            <input
                                              type="text"
                                              name="area"
                                              id="area"
                                              placeholder="Enter area"
                                              class="formbold-form-input"
                                            />
                                          </div>
                                        </div>   
                                        <div class="w-full sm:w-half formbold-px-3">
                                          <div class="formbold-mb-5">
                                            <input
                                              type="text"
                                              name="city"
                                              id="city"
                                              placeholder="Enter city"
                                              class="formbold-form-input"
                                            />
                                          </div>
                                        </div>   
                                      </div>
                                    </div>
                                    <div>
                                      <button class="formbold-btn" style="font-size: 21px;">Book Appointment</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4">
                    <div class="text-center card-box">
                        <div class="member-card pt-2 pb-2">
                            <div class="thumb-lg member-thumb mx-auto"><img src="https://i.ibb.co/sqnjy4F/1055642-200.png"  class="rounded-circle img-thumbnail" alt="1055642-200"></div>
                            <div class="">
                                <h4>Dr. Ester Dean</h4>
                                <h4>Psychologist</h4>
                                <p class="text-muted">09675721234 <span>| </span><span><a href="#" class="text-pink">ed@gmail.com</a></span></p>
                            </div>
                            <ul class="social-links list-inline">
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                            </ul>
                            <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" id="myAppt1">Book Now</button>
                            <!-- The Modal -->
                            <div id="myMod1" class="modal2">
                            <!-- Modal content -->
                            <div class="modal-content3">
                             <span class="close2">&times;</span>
                             <div class="formbold-main-wrapper">
                              <div class="formbold-form-wrapper">
                                  <!---->
                                    <h4 style="font-weight: bold;">See Dr. ---- schedule</h4>
                                    <div class="container1">
                                      <div class="calendar1">
                                        <div class="front">
                                          <!--<div class="current-date">
                                            <h1>March 2023</h1>	
                                          </div>-->
                                          <div class="current-month">
                                            <ul class="week-days">
                                              <li>MON</li>
                                              <li>TUE</li>
                                              <li>WED</li>
                                              <li>THU</li>
                                              <li>FRI</li>
                                              <li>SAT</li>
                                              <li>SUN</li>
                                            </ul>
                                
                                            <div class="weeks">
                                              <div class="first">
                                                <span class="last-month">28</span>
                                                <span class="last-month">29</span>
                                                <span class="last-month">30</span>
                                                <span class="last-month">31</span>
                                                <span>01</span>
                                                <span>02</span>
                                                <span>03</span>
                                              </div>
                                
                                              <div class="second">
                                                <span>04</span>
                                                <span>05</span>
                                                <span>06</span>
                                                <span>07</span>
                                                <span>08</span>
                                                <span>09</span>
                                                <span>10</span>
                                              </div>
                                
                                              <div class="third">
                                                <span>11</span>
                                                <span>12</span>
                                                <span>13</span>
                                                <span>14</span>
                                                <span>15</span>
                                                <span>16</span>
                                                <span>17</span>
                                              </div>
                                
                                              <div class="fourth">
                                                <span>18</span>
                                                <span>19</span>
                                                <span>20</span>
                                                <span>21</span>
                                                <span>22</span>
                                                <span>23</span>
                                                <span>24</span>
                                              </div>
                                
                                              <div class="fifth">
                                                <span>25</span>
                                                <span>26</span>
                                                <span>27</span>
                                                <span>28</span>
                                                <span>29</span>
                                                <span>30</span>
                                                <span>31</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>                         
                                      </div>
                                    </div>
                              
                                <form action="#">
                                  <div class="formbold-mb-5">
                                    <label for="name" class="formbold-form-label" style="font-weight: bold;"> Full Name </label>
                                    <input
                                      type="text"
                                      name="name"
                                      id="name"
                                      placeholder="Full Name"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="formbold-mb-5">
                                    <label for="phone" class="formbold-form-label" style="font-weight: bold;"> Phone Number </label>
                                    <input
                                      type="text"
                                      name="phone"
                                      id="phone"
                                      placeholder="Enter your phone number"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="formbold-mb-5">
                                    <label for="email" class="formbold-form-label" style="font-weight: bold;"> Email Address </label>
                                    <input
                                      type="email"
                                      name="email"
                                      id="email"
                                      placeholder="Enter your email"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="flex flex-wrap formbold--mx-3">
                                    <div class="w-full sm:w-half formbold-px-3">
                                      <div class="formbold-mb-5 w-full">
                                        <label for="date" class="formbold-form-label" style="font-weight: bold;"> Date </label>
                                        <input
                                          type="date"
                                          name="date"
                                          id="date"
                                          class="formbold-form-input"
                                        />
                                      </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                      <div class="formbold-mb-5">
                                        <label for="time" class="formbold-form-label">Time </label>
                                        <input
                                          type="time"
                                          name="time"
                                          id="time"
                                          class="formbold-form-input"
                                        />
                                      </div>
                                    </div>
                                  </div>
                            
                                  <div class="formbold-mb-5 formbold-pt-3">
                                    <label class="formbold-form-label formbold-form-label-2" style="font-weight: bold;">
                                      Address
                                    </label>
                                    <div class="flex flex-wrap formbold--mx-3">
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <input
                                            type="text"
                                            name="area"
                                            id="area"
                                            placeholder="Enter area"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>   
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <input
                                            type="text"
                                            name="city"
                                            id="city"
                                            placeholder="Enter city"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>   
                                    </div>
                                  </div>
                                  <div>
                                    <button class="formbold-btn" style="font-size: 21px;">Book Appointment</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                  <div class="text-center card-box">
                      <div class="member-card pt-2 pb-2">
                          <div class="thumb-lg member-thumb mx-auto"><img src="https://i.ibb.co/XXnRvHS/920988.png"  class="rounded-circle img-thumbnail" alt="profile-image"></div>
                          <div class="">
                              <h4>Dr. Stephen Strange</h4>
                              <h4>Psychoanalyst</h4>
                              <p class="text-muted">09675721234 <span>| </span><span><a href="#" class="text-pink">ed@gmail.com</a></span></p>
                          </div>
                          <ul class="social-links list-inline">
                              <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                              <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Google"><i class="fab fa-google"></i></a></li>
                          </ul>
                          <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" id="myAppt2">Book Now</button>
                           <!-- The Modal -->
                          <div id="myMod2" class="modal3">
                            <!-- Modal content -->
                            <div class="modal-content4">
                             <span class="close3">&times;</span>
                             <div class="formbold-main-wrapper">
                              <div class="formbold-form-wrapper">
                                  <!---->
                                    <h4 style="font-weight: bold;">See Dr. ---- schedule</h4>
                                    <div class="container1">
                                      <div class="calendar1">
                                        <div class="front">
                                          <!--<div class="current-date">
                                            <h1>March 2023</h1>	
                                          </div>-->
                                          <div class="current-month">
                                            <ul class="week-days">
                                              <li>MON</li>
                                              <li>TUE</li>
                                              <li>WED</li>
                                              <li>THU</li>
                                              <li>FRI</li>
                                              <li>SAT</li>
                                              <li>SUN</li>
                                            </ul>
                                
                                            <div class="weeks">
                                              <div class="first">
                                                <span class="last-month">28</span>
                                                <span class="last-month">29</span>
                                                <span class="last-month">30</span>
                                                <span class="last-month">31</span>
                                                <span>01</span>
                                                <span>02</span>
                                                <span>03</span>
                                              </div>
                                
                                              <div class="second">
                                                <span>04</span>
                                                <span>05</span>
                                                <span>06</span>
                                                <span>07</span>
                                                <span>08</span>
                                                <span>09</span>
                                                <span>10</span>
                                              </div>
                                
                                              <div class="third">
                                                <span>11</span>
                                                <span>12</span>
                                                <span>13</span>
                                                <span>14</span>
                                                <span>15</span>
                                                <span>16</span>
                                                <span>17</span>
                                              </div>
                                
                                              <div class="fourth">
                                                <span>18</span>
                                                <span>19</span>
                                                <span>20</span>
                                                <span>21</span>
                                                <span>22</span>
                                                <span>23</span>
                                                <span>24</span>
                                              </div>
                                
                                              <div class="fifth">
                                                <span>25</span>
                                                <span>26</span>
                                                <span>27</span>
                                                <span>28</span>
                                                <span>29</span>
                                                <span>30</span>
                                                <span>31</span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>                         
                                      </div>
                                    </div>
                                              
                                <form action="#">
                                  <div class="formbold-mb-5">
                                    <label for="name" class="formbold-form-label" style="font-weight: bold;"> Full Name </label>
                                    <input
                                      type="text"
                                      name="name"
                                      id="name"
                                      placeholder="Full Name"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="formbold-mb-5">
                                    <label for="phone" class="formbold-form-label" style="font-weight: bold;"> Phone Number </label>
                                    <input
                                      type="text"
                                      name="phone"
                                      id="phone"
                                      placeholder="Enter your phone number"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="formbold-mb-5">
                                    <label for="email" class="formbold-form-label" style="font-weight: bold;"> Email Address </label>
                                    <input
                                      type="email"
                                      name="email"
                                      id="email"
                                      placeholder="Enter your email"
                                      class="formbold-form-input"
                                    />
                                  </div>
                                  <div class="flex flex-wrap formbold--mx-3">
                                    <div class="w-full sm:w-half formbold-px-3">
                                      <div class="formbold-mb-5 w-full">
                                        <label for="date" class="formbold-form-label" style="font-weight: bold;"> Date </label>
                                        <input
                                          type="date"
                                          name="date"
                                          id="date"
                                          class="formbold-form-input"
                                        />
                                      </div>
                                    </div>
                                    <div class="w-full sm:w-half formbold-px-3">
                                      <div class="formbold-mb-5">
                                        <label for="time" class="formbold-form-label">Time </label>
                                        <input
                                          type="time"
                                          name="time"
                                          id="time"
                                          class="formbold-form-input"
                                        />
                                      </div>
                                    </div>
                                  </div>
                            
                                  <div class="formbold-mb-5 formbold-pt-3">
                                    <label class="formbold-form-label formbold-form-label-2" style="font-weight: bold;">
                                      Address
                                    </label>
                                    <div class="flex flex-wrap formbold--mx-3">
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <input
                                            type="text"
                                            name="area"
                                            id="area"
                                            placeholder="Enter area"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>   
                                      <div class="w-full sm:w-half formbold-px-3">
                                        <div class="formbold-mb-5">
                                          <input
                                            type="text"
                                            name="city"
                                            id="city"
                                            placeholder="Enter city"
                                            class="formbold-form-input"
                                          />
                                        </div>
                                      </div>   
                                    </div>
                                  </div>
                                  <div>
                                    <button class="formbold-btn" style="font-size: 21px;">Book Appointment</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                            </div>
                          </div>

                      </div>
                  </div>
               </div>
            </div>  
          </div>
        </div>
      
        <div class="blog-home2 py-5">
          <div class="container">
            <!-- Row  -->
            <div class="row justify-content-center">
              <!-- Column -->
              <div class="col-md-8 text-center">
                <h3 class="my-3">Upcoming Events</h3>
                <h6 class="subtitle font-weight-normal">In order to stay up to date, you can view any upcoming appointments.</h6>
              </div>
              <!-- Column -->
              <!-- Column -->
            </div>
            <div class="row mt-4">
              <!-- Column -->
              <div class="col-md-4 on-hover">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://i.ibb.co/mH6ty5W/get-the-most-out-of-mental-health-therapy.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Mar<span class="d-block">23</span></div>
                  <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">Session with Dr. Ester Dean</a></h5>
                  <p class="mt-3"> CDOC</p>
                  <!--<a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>-->
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-4 on-hover">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://i.ibb.co/mH6ty5W/get-the-most-out-of-mental-health-therapy.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Mar<span class="d-block">23</span></div>
                  <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">Session with Dr. Ester Dean</a></h5>
                  <p class="mt-3"> CDOC</p>
                  <!--<a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>-->
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-4 on-hover">
                <div class="card border-0 mb-4">
                  <a href="#"><img class="card-img-top" src="https://i.ibb.co/mH6ty5W/get-the-most-out-of-mental-health-therapy.jpg" alt="wrappixel kit"></a>
                  <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Mar<span class="d-block">23</span></div>
                  <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">Session with Dr. Ester Dean</a></h5>
                  <p class="mt-3"> CDOC</p>
                  <!--<a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>-->
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
     
        
    <div class="page" id="page2" style="display:none">
      <button type="button" id="sidebarCollapse1" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
        <h2 style="font-weight: bold;">Write Journal</h2>
        <h6 class="subtitle font-weight-normal" style="color: #8d97ad;">You are free to share your opinions and feelings in this section.</h6>
        <form class="form-horizontal" action="/create" method="POST">
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <!--<div class="form-group"> need to add radio buttons
            <label class="control-label col-sm-2" style="font-weight: bold">Rate your mood:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="rating" id="ratings" placeholder="Enter date">
              <div class="ratings" class="form-control">
                <input type="radio" id="star5" name="ratings" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="ratings" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="ratings" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="ratings" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="ratings" value="1" />
                <label for="star1" title="text">1 star</label>
              </div>
            </div>
          </div>-->
          <div class="form-group">
            <label class="control-label col-sm-2"  style="font-weight: bold;  text-align:left;" >Title:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" id="name" placeholder="Title of your journal" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2"  style="font-weight: bold;  text-align:left;" >Name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="User_name" id="name" placeholder="Enter your name here" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" style="font-weight: bold">Date:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="JournalDate" id="date" placeholder="Enter date"  required>
              <!--<input type="submit">-->
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="textAreaMessage" style="font-weight: bold ">Message:</label>
            <textarea class="form-control" id="textAreaMessage" rows="10" name="message" placeholder="Write here.."  required></textarea>          
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="button-5" style="margin: 4px; float: left;">Submit</button>
            </div>
          </div>
        </form>
    </div>

    <div class="page" id="page3" style="display:none">
      <button type="button" id="sidebarCollapse2" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
        <h2 style="font-weight: bold;">View Journal</h2>
        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
          <header>
            <h6 class="subtitle font-weight-normal" style="color: #8d97ad;">See your journal entries</h6>
            <div class="col-6" style="margin:5px;">
              <select class="form-select d-inline-block w-auto border pt-1">
                <option value="0">Recent</option>
                <option value="1">Previous</option>
              </select>
            </div>
          </header>
       
        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://i.ibb.co/VV1DxHf/3173-8-diary-icon-iconbunny.jpg" alt="3173-8-diary-icon-iconbunny" width="100" height="130" class="w-100"/>
                      <a href="#">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-5 col-sm-7">
              
                  @foreach ($users as $user)
                  <h5>Title: {{ $user->title }}</h5>
                   <p class="text mb-4 mb-md-0">
                   Date Created: {{ $user->JournalDate }}
                  </p>
                  @endforeach
               
                  </div>
              
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Open</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://i.ibb.co/VV1DxHf/3173-8-diary-icon-iconbunny.jpg" alt="3173-8-diary-icon-iconbunny" width="100" height="130" class="w-100"/>
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>
                  
                  <div class="col-xl-6 col-md-5 col-sm-7">
                  
                    @foreach ($users as $user)
                    <h5>Title: {{ $user->title }}</h5>
                     <p class="text mb-4 mb-md-0">
                     Date Created: {{ $user->JournalDate }}
                    </p>
                    @endforeach
                 
                    </div>
                  
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Open</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <img src="https://i.ibb.co/VV1DxHf/3173-8-diary-icon-iconbunny.jpg" alt="3173-8-diary-icon-iconbunny" width="100" height="130" class="w-100"/>
                      <a href="#!">
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                  </div>

                   
                  <div class="col-xl-6 col-md-5 col-sm-7">
                  
                    @foreach ($users as $user)
                    <h5>Title: {{ $user->title }}</h5>
                     <p class="text mb-4 mb-md-0">
                     Date Created: {{ $user->JournalDate }}
                    </p>
                    @endforeach
                 
                    </div>
                   
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="mt-4">
                      <button class="btn btn-primary shadow-0" type="button">Open</button>
                      <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg px-1"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!--<div class="page" id="page4" style="display:none">
      <button type="button" id="sidebarCollapse3" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
        <h2 style="font-weight: bold; text-align:center;">Rate your Mood</h2>
        <h6 class="subtitle font-weight-normal" style="text-align:center;">How do you rate your mood today?</h6>
        ratings
        <div class="container1">
          <div class="feedback">
            <div class="rating">
              <input type="radio" name="rating" id="rating-5" onclick="ShowHideDiv5()" >
              <label for="rating-5"></label>
              <input type="radio" name="rating" id="rating-4" onclick="ShowHideDiv4()" >
              <label for="rating-4"></label>
              <input type="radio" name="rating" id="rating-3" onclick="ShowHideDiv3()" >
              <label for="rating-3"></label>
              <input type="radio" name="rating" id="rating-2" onclick="ShowHideDiv2()" >
              <label for="rating-2"></label>
              <input type="radio" name="rating" id="rating-1" onclick="ShowHideDiv()" >
              <label for="rating-1"></label>
              <div class="emoji-wrapper">
                <div class="emoji">
                  <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                  <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                  <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                  <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                  <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                  <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                  <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                  <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                  <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                </svg>
                  <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                  <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                  <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                  <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                  <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                  <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                  <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                  <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                  <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                  <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                </svg>
                  <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                  <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                  <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                  <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                  <g fill="#fff">
                    <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                    <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                  </g>
                  <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                  <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                </svg>
                  <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
            <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
            <g fill="#fff">
              <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
              <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
            </g>
            <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
            <g fill="#fff">
              <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
              <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
            </g>
            <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
            <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
          </svg>
                  <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                  <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                  <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                  <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                  <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                  <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                  <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                  <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                  <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                  <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                </svg>
                  <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <g fill="#ffd93b">
                    <circle cx="256" cy="256" r="256"/>
                    <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                  </g>
                  <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                  <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                  <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                  <g fill="#38c0dc">
                    <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                  </g>
                  <g fill="#d23f77">
                    <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                  </g>
                  <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                  <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                  <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                </svg>
                </div>
              </div>           
            </div>
            <div id="feedback" style="display: none" class="content1">
              <form action="#">
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
              <label>Write down your feelings for the day:</label>
              <textarea id="txtfeedback" rows="10" cols="54" name="message" required></textarea>
              <input type="submit" value="Submit" >
              <input type="reset" value="Reset">
              </form>
          </div>
          </div>
        </div>
    </div>-->
    
    <div class="page" id="page5" style="display:none">
      <button type="button" id="sidebarCollapse4" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
        <h2 style="font-weight: bold;">Recommendations</h2>
        <p style="color: #8d97ad;">This section contains articles with our best recommendations on how to take care of your mental health.</p>
        <!---->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="cards-wrapper">
              <div class="card">
                <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Caring for Your Mental Health</h5>
                  <p class="card-text">Self-care can play a role in maintaining your mental health.</p>
                  <a href="https://www.nimh.nih.gov/health/topics/caring-for-your-mental-health" class="btn btn-primary" target="_blank">Learn More</a>
                </div>
              </div>
              <div class="card d-none d-md-block">
                <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">6 ways to take care of your mental health and well-being</h5>
                  <p class="card-text">Here are 6 things you can do to help you cope.</p>
                  <a href="https://www.who.int/westernpacific/about/how-we-work/pacific-support/news/detail/07-10-2021-6-ways-to-take-care-of-your-mental-health-and-well-being-this-world-mental-health-day" class="btn btn-primary" target="_blank">Learn More</a>
                </div>
              </div>
              <div class="card d-none d-md-block">
                <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems"class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Taking Good Care of Yourself</h5>
                  <p class="card-text">This article contains tools to aid you in the process.</p>
                  <a href="https://mhanational.org/taking-good-care-yourself" class="btn btn-primary" target="_blank">Learn More</a>
                </div>
              </div>
            </div>
            </div>
            <div class="carousel-item">
              <div class="cards-wrapper">
                <div class="card">
                  <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Ten Things You Can Do for Your Mental Health</h5>
                    <p class="card-text">Try these tips to keep your balance.</p>
                    <a href="https://uhs.umich.edu/tenthings" class="btn btn-primary" target="_blank">Learn More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">Why is mental health important?</h5>
                    <p class="card-text">Mental health encompasses our psychological, emotional and social well-being.</p>
                    <a href="https://doctorondemand.com/blog/mental-health/why-its-important-to-care-for-your-mental-health/" class="btn btn-primary" target="_blank">Learn More</a>
                  </div>
                </div>
                <div class="card d-none d-md-block">
                  <img src="https://i.ibb.co/Q6sYkdN/engl-poems.png" alt="engl-poems" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title">How to Improve Mental Health</h5>
                    <p class="card-text">Why is mental health important?</p>
                    <a href="https://medlineplus.gov/howtoimprovementalhealth.html" class="btn btn-primary" target="_blank">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>

</div> 

  <!--appt-->
  <script>

  var modal1 = document.getElementById("myMod");

  var btn1 = document.getElementById("myAppt");

  var span1 = document.getElementsByClassName("close1")[0];

  // When the user clicks on the button, open the modal
  btn1.onclick = function() {
  modal1.style.display = "block";
  }

  span1.onclick = function() {
  modal1.style.display = "none";
  }

  window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
    }
  }
  </script>
  <script>

    var mod = document.getElementById("myMod1");
  
    var button = document.getElementById("myAppt1");
  
    var s = document.getElementsByClassName("close2")[0];
  
    // When the user clicks on the button, open the modal
    button.onclick = function() {
    mod.style.display = "block";
    }
  
    s.onclick = function() {
    mod.style.display = "none";
    }
  
    window.onclick = function(event) {
    if (event.target == mod) {
      mod.style.display = "none";
      }
    }
    </script>
    <script>

      var Mod = document.getElementById("myMod2");
    
      var Btn = document.getElementById("myAppt2");
    
      var Span = document.getElementsByClassName("close3")[0];
    
      // When the user clicks on the button, open the modal
      Btn.onclick = function() {
      Mod.style.display = "block";
      }
    
      Span.onclick = function() {
      Mod.style.display = "none";
      }
    
      window.onclick = function(event) {
      if (event.target == Mod) {
        Mod.style.display = "none";
        }
      }
    </script>
  
  <!--sidebar-->
  <script>
    $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  });
  </script>
  <script>
    $(document).ready(function () {
    $('#sidebarCollapse1').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  });
  </script>
   <script>
    $(document).ready(function () {
    $('#sidebarCollapse2').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  });
  </script>
   <script>
    $(document).ready(function () {
    $('#sidebarCollapse3').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  });
  </script>
    <script>
      $(document).ready(function () {
      $('#sidebarCollapse4').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
    });
    </script>

<!--rating-->
<script type="text/javascript">
    function ShowHideDiv() {
        var chkYes = document.getElementById("rating-1");
        var dvPassport = document.getElementById("feedback");
        dvPassport.style.display = chkYes.checked ? "block" : "none";
    }
</script>
<script type="text/javascript">
  function ShowHideDiv2() {
      var chkYes = document.getElementById("rating-2");
      var dvPassport = document.getElementById("feedback");
      dvPassport.style.display = chkYes.checked ? "block" : "none";
  }
</script>
<script type="text/javascript">
  function ShowHideDiv3() {
      var chkYes = document.getElementById("rating-3");
      var dvPassport = document.getElementById("feedback");
      dvPassport.style.display = chkYes.checked ? "block" : "none";
  }
</script>
<script type="text/javascript">
  function ShowHideDiv4() {
      var chkYes = document.getElementById("rating-4");
      var dvPassport = document.getElementById("feedback");
      dvPassport.style.display = chkYes.checked ? "block" : "none";
  }
</script>
<script type="text/javascript">
  function ShowHideDiv5() {
      var chkYes = document.getElementById("rating-5");
      var dvPassport = document.getElementById("feedback");
      dvPassport.style.display = chkYes.checked ? "block" : "none";
  }
</script>
 

<!--Calendar-->
<script>
  // Get the modal
  var modal = document.getElementById("myDiv");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myCalendar");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
  
  <!--1st calendar-->
  <script>
    function CalendarControl() {
    const calendar = new Date();
    const calendarControl = {
      localDate: new Date(),
      prevMonthLastDate: null,
      calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
      calMonthName: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      daysInMonth: function (month, year) {
        return new Date(year, month, 0).getDate();
      },
      firstDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
      },
      lastDay: function () {
        return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
      },
      firstDayNumber: function () {
        return calendarControl.firstDay().getDay() + 1;
      },
      lastDayNumber: function () {
        return calendarControl.lastDay().getDay() + 1;
      },
      getPreviousMonthLastDate: function () {
        let lastDate = new Date(
          calendar.getFullYear(),
          calendar.getMonth(),
          0
        ).getDate();
        return lastDate;
      },
      navigateToPreviousMonth: function () {
        calendar.setMonth(calendar.getMonth() - 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToNextMonth: function () {
        calendar.setMonth(calendar.getMonth() + 1);
        calendarControl.attachEventsOnNextPrev();
      },
      navigateToCurrentMonth: function () {
        let currentMonth = calendarControl.localDate.getMonth();
        let currentYear = calendarControl.localDate.getFullYear();
        calendar.setMonth(currentMonth);
        calendar.setYear(currentYear);
        calendarControl.attachEventsOnNextPrev();
      },
      displayYear: function () {
        let yearLabel = document.querySelector(".calendar .calendar-year-label");
        yearLabel.innerHTML = calendar.getFullYear();
      },
      displayMonth: function () {
        let monthLabel = document.querySelector(
          ".calendar .calendar-month-label"
        );
        monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
      },
      selectDate: function (e) {
        console.log(
          `${e.target.textContent} ${
            calendarControl.calMonthName[calendar.getMonth()]
          } ${calendar.getFullYear()}`
        );
      },
      plotSelectors: function () {
        document.querySelector(
          ".calendar"
        ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
          <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
          <div class="calendar-year-month">
          <div class="calendar-month-label"></div>
          <div>-</div>
          <div class="calendar-year-label"></div>
          </div>
          <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
          </div>
          <div class="calendar-today-date">Today: 
            ${calendarControl.calWeekDays[calendarControl.localDate.getDay()]}, 
            ${calendarControl.localDate.getDate()}, 
            ${calendarControl.calMonthName[calendarControl.localDate.getMonth()]} 
            ${calendarControl.localDate.getFullYear()}
          </div>
          <div class="calendar-body"></div></div>`;
      },
      plotDayNames: function () {
        for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
        }
      },
      plotDates: function () {
        document.querySelector(".calendar .calendar-body").innerHTML = "";
        calendarControl.plotDayNames();
        calendarControl.displayMonth();
        calendarControl.displayYear();
        let count = 1;
        let prevDateCount = 0;
  
        calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
        let prevMonthDatesArray = [];
        let calendarDays = calendarControl.daysInMonth(
          calendar.getMonth() + 1,
          calendar.getFullYear()
        );
        // dates of current month
        for (let i = 1; i < calendarDays; i++) {
          if (i < calendarControl.firstDayNumber()) {
            prevDateCount += 1;
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="prev-dates"></div>`;
            prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
          } else {
            document.querySelector(
              ".calendar .calendar-body"
            ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
          }
        }
        //remaining dates after month dates
        for (let j = 0; j < prevDateCount + 1; j++) {
          document.querySelector(
            ".calendar .calendar-body"
          ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
        }
        calendarControl.highlightToday();
        calendarControl.plotPrevMonthDates(prevMonthDatesArray);
        calendarControl.plotNextMonthDates();
      },
      attachEvents: function () {
        let prevBtn = document.querySelector(".calendar .calendar-prev a");
        let nextBtn = document.querySelector(".calendar .calendar-next a");
        let todayDate = document.querySelector(".calendar .calendar-today-date");
        let dateNumber = document.querySelectorAll(".calendar .dateNumber");
        prevBtn.addEventListener(
          "click",
          calendarControl.navigateToPreviousMonth
        );
        nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
        todayDate.addEventListener(
          "click",
          calendarControl.navigateToCurrentMonth
        );
        for (var i = 0; i < dateNumber.length; i++) {
            dateNumber[i].addEventListener(
              "click",
              calendarControl.selectDate,
              false
            );
        }
      },
      highlightToday: function () {
        let currentMonth = calendarControl.localDate.getMonth() + 1;
        let changedMonth = calendar.getMonth() + 1;
        let currentYear = calendarControl.localDate.getFullYear();
        let changedYear = calendar.getFullYear();
        if (
          currentYear === changedYear &&
          currentMonth === changedMonth &&
          document.querySelectorAll(".number-item")
        ) {
          document
            .querySelectorAll(".number-item")
            [calendar.getDate() - 1].classList.add("calendar-today");
        }
      },
      plotPrevMonthDates: function(dates){
        dates.reverse();
        for(let i=0;i<dates.length;i++) {
            if(document.querySelectorAll(".prev-dates")) {
                document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
            }
        }
      },
      plotNextMonthDates: function(){
       let childElemCount = document.querySelector('.calendar-body').childElementCount;
       //7 lines
       if(childElemCount > 42 ) {
           let diff = 49 - childElemCount;
           calendarControl.loopThroughNextDays(diff);
       }

       //6 lines
       if(childElemCount > 35 && childElemCount <= 42 ) {
        let diff = 42 - childElemCount;
        calendarControl.loopThroughNextDays(42 - childElemCount);
       }

      },
      loopThroughNextDays: function(count) {
        if(count > 0) {
            for(let i=1;i<=count;i++) {
                document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
            }
        }
      },
      attachEventsOnNextPrev: function () {
        calendarControl.plotDates();
        calendarControl.attachEvents();
      },
      init: function () {
        calendarControl.plotSelectors();
        calendarControl.plotDates();
        calendarControl.attachEvents();
      }
    };
    calendarControl.init();
  }
  
  const calendarControl = new CalendarControl();
    
  </script>
   

  <script  src="hom.js"></script>
  
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>