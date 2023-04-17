<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://use.fontawesome.com/releases/v5.1.0/css/all.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
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
                        <!--<a class="dropdown-item" href="#">Profile</a>-->
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
            CSWD Mental Health Web Application</h3>
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
                <!--<a href="#" onclick="show('page1');"><b>Dashboard</b></a>-->
                <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"  onclick="show('page1');"><b>Dashboard</b></a>
                <ul class="collapse list-unstyled" id="dashboard">  
                  <!--<li>
                    <a href="#" onclick="show('page6');">Schedule Appointments</a>
                </li>-->
                <li>
                    <a href="#" onclick="show('page4');">Upcoming Events</a>
                </li>
                </ul>
            </li>
        </li>  
            <li>
            <a href="#moodjournal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><b>Mood Journal</b></a>
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
                <a href="#" onclick="show('page4');"><b>Upcoming Events</b></a>
            </li>-->
            <li>
                <a href="#" onclick="show('page5');"><b>Recommendations</b></a>
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
        <!--Modal Calendar-->
        <button type="button" id="myCalendar" class="btn btn-primary btn-md float-end"><i class="fa fa-calendar" aria-hidden="true"></i> See your schedule</button>
        <h2 style="font-weight: bold;">Welcome, {{ Auth::user()->name }}!</h2>
        <div id="myDiv" class="modal1">
          <!-- Modal content -->
          <div class="modal-content1">
            <span class="close">&times;</span>
            <h4 style="font-weight: bold;">See your schedule</h4>
            <div class="calendar"></div> 
          </div>
        
        </div>

        <!--<p style="font-size: 17px; color: #8d97ad;">Let's track your mental health today!</p>-->
        <div class="row justify-content-center">
        <div class="col-md-8 text-center">
        <h3 class="my-3">Schedule Appointment Form</h3>
        <h6 class="subtitle font-weight-normal" style="color: #8d97ad;">Feel free to consult with our mental health specialists.</h6>

        
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
        <h6 class="subtitle font-weight-normal" style="color: #8d97ad;">See your journal entries</h6>
        @csrf
        <table class="table table-striped" id="editable">
          <thead>
              <tr>
                  <th>Title</th>
                  <th>Date Created</th>
                  <th>Content</th>
                  <th>Actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                  <td>{{ $user->title }}</td>
                  <td>{{ $user->JournalDate }}</td> 
                  <td>{{ $user->message }}</td> 
                  <td>
                    <a style="text-decoration: underline;" href={{'edit/'.$user->id}}>Edit</a>  
                    <a style="text-decoration: underline;" href={{'delete/'.$user->id}}>Delete</a> 
                  </td>
              </tr>
              @endforeach              
          </tbody>
      </table>                          
    </div>

    <div class="page" id="page4" style="display:none">
      <button type="button" id="sidebarCollapse4" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
      
       <div class="blog-home2 py-5">
        <div class="container">
          <!-- Row  -->
          <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-md-8 text-center">
              <h3 class="my-3">Upcoming Events</h3>
              <h6 class="subtitle font-weight-normal">In order to stay up to date, you can view any upcoming events.</h6>
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
    
    <div class="page" id="page5" style="display:none">
      <button type="button" id="sidebarCollapse5" class="btn btn-info">
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

    <div class="page" id="page6" style="display:none">
      <button type="button" id="sidebarCollapse6" class="btn btn-info">
        <i class="fas fa-align-left"></i>
        <span></span>
       </button>
       <h2 style="font-weight: bold;">Schedule Appointments</h2>
       <!--<p style="color: #8d97ad;">This section contains articles with our best recommendations on how to take care of your mental health.</p>-->

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
     <script>
      $(document).ready(function () {
      $('#sidebarCollapse5').on('click', function () {
          $('#sidebar').toggleClass('active');
      });
    });
    </script>
    <script>
      $(document).ready(function () {
      $('#sidebarCollapse6').on('click', function () {
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>