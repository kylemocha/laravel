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
                    <a href="main_home" class="nav-item nav-link active" style=" color: black;">Home</a>
                    <a href="#" class="nav-item nav-link" style=" color: black;" >Take Test</a>
                    <a href="#" class="nav-item nav-link" style="color: black;">Our Center</a>
                    <a href="#modalContactForm" data-toggle="modal" data-target="#modalContactForm" class="nav-item nav-link"style=" color: black;">Contact Us</a>
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
            <li>
                <a href="#" onclick="show('page4');">Rate your Mood</a>
            </li>
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
        <h2 style="font-weight: bold;">Welcome User!</h2>
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


        <p style="font-size: 17px">Let's track your mental health today!</p>
      
        <p style="font-weight: bold;">Schedule a appointment:</p>
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
                              <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Book Now</button>

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
                            <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Book Now</button>

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
                          <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Book Now</button>

                      </div>
                  </div>
               </div>
               </div>  
          </div>
        </div>
      

        <p style="font-weight: bold;">List of upcoming appointments:</p>
        <!--div id="calendar"></div>-->


    </div>
     
        
  
    <div class="page" id="page2" style="display:none">
        <h2 style="font-weight: bold;">Write Journal</h2>
        <p>You are free to share your opinions and feelings in this section.</p>
        <form class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Your name:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Date:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="date" placeholder="Enter date">
              <!--<input type="submit">-->
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="textAreaMessage">Message:</label>
            <textarea class="form-control" id="textAreaMessage" rows="10" placeholder="Write here"></textarea>          
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </form>
    </div>

    <div class="page" id="page3" style="display:none">
        <h2 style="font-weight: bold;">View Journal</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="page" id="page4" style="display:none">
        <h2 style="font-weight: bold;">Rate your Mood</h2>
        <p style="font-size:20px;">How do you rate your mood today?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="page" id="page5" style="display:none">
        <h2 style="font-weight: bold;">Recommendations</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

</div>
</div> 

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


  <script>
    $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
  });
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
  <!--calendar-->
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