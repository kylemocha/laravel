<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Therapist Page</title>
    <link href="css/admin.css" rel="stylesheet" type="text/css">
</head>

<body>
    
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Therapist</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active" onclick="show('page1');">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page2');">
            <i class='bx bx-box' ></i>
            <span class="links_name">Schedule</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page3');">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page4');">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Journal</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page5');">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <!--<li>
          <a href="#" onclick="show('page6');">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>-->
        </li>
        <li class="log_out">
          <a href="{{ route('logout') }}">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <!--<div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>-->
    </nav>
    
    <div class="home-content">
      <div class="page" id="page1">
        <h3 style="font-weight: normal">&nbsp;Welcome, {{ Auth::user()->name }}!</h3>
        @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
        <h5 style="font-weight: bold; margin:10px; ">&nbsp;Profile Section</h5>
        <div class="container">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      @foreach($users as $user)
                      <h4>{{ $user->name }}</h4>
                      <!--<p class="text-secondary mb-1">Full Stack Developer</p>-->
                      <!--<p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>-->
                    </div>
                  </div>
                </div>
              </div>
             </div>
          </div>

          <div class="col-md-8">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $user->name }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $user->email }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $user->phonenumber }}
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Address</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    {{ $user->address }}
                  </div>
                  
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-info " href="{{ url('edit-therapist/'.$user->id) }}">Edit</a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>

      <div class="page" id="page2" style="display:none">
        <h2 style="font-weight: bold; margin:10px; ">&nbsp;Schedule Section</h2>
        <p style="padding-left: 15px;">This section allows you to edit your schedule.</p>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:15px;">
          Create Event
        </button>

         <!--The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

               <!--Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Create Event Form</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

               <!--Modal body -->
              <div class="modal-body">
                <form action="/createform" method="POST">
                  @csrf
                  <label for="name">Event Name:</label>
                  <input type="text" id="name" name="name" required>
                  <br><label for="description">Event Description:</label>
                  <!-- <input type="textarea" id="description" name="description" rows="4" cols="50">-->
                  <textarea id="description" name="description" rows="5" cols="50" required></textarea>
                  <br><label for="date">Select Date:</label>
                  <input type="date" id="date" name="date" required>
                  <br><label for="time">Select time:</label>
                  <input type="time" id="time" name="time" required>
                  <br><input type="submit" value="Submit">
                </form>
                
              </div>        
            </div>
          </div>
        </div>
        <!--modal-->
       

       
      </div>

      <div class="page" id="page3" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;Appointments Section</h2>
        <p style="padding-left: 8px;">This section allows you to see your pending appointments.</p>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Client's Name</th>
              <th scope="col">Appointment Date</th>
              <th scope="col">Appointment Time</th>
              <th scope="col">Mode of Consultation</th>
              <th scope="col">Status</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach ($appts as $appt)
              <th scope="row">{{ $appt->id }}</th>
              <td>{{ $appt->Name }}</td>
              <td>{{ $appt->Appt_date }}</td>
              <td>{{ $appt->Appt_time  }}</td>
              <td>{{ $appt->Mode_of_consultation }}</td>
              <td>{{ $appt->status }}</td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" >Accept <i class="fas fa-chevron-right"></i></button></a>
                <button type="button" class="btn btn-danger btn-sm">Decline <i class="fas fa-times"></i></button>
                <!--<a style="text-decoration: underline;" href="#">Approve</a>  
                <a style="text-decoration: underline;" href="#">Reject</a>  -->  
              </td> <!--approved or rejected-->
            </tr>
            @endforeach
          </tbody>
        </table>

        
      </div>

      <div class="page" id="page4" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;Journal Section</h2>
        
      </div>

      <div class="page" id="page5" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;BLEH!!!!</h2>
        
      </div>

      <!--<div class="page" id="page6" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;MOOO!!!!</h2>
        
      </div>-->



    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

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

</body>
</html>