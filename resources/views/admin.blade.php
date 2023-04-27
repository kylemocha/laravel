<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/admin.css" rel="stylesheet" type="text/css">
     <title>Admin Page</title>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <!--i class='bx bxl-c-plus-plus'></i>-->
      <i class='bx bx-user'></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active" onclick="show('page1');">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <!--<li>
          <a href="#" onclick="show('page2');">
            <i class='bx bx-box' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>-->
        <li>
          <a href="#" onclick="show('page3');">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Contact Us</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page4');">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Journal Details</span>
          </a>
        </li>
       <li>
          <a href="#" onclick="show('page5');">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Appointments</span>
          </a>
        </li>
        <!--<li>
          <a href="#" onclick="show('page6');">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>-->
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
      
    </nav>
    <!--end of navbar-->

    <div class="home-content">
      <div class="page" id="page1">
        <h2 style="font-weight: bold;">&nbsp;Welcome, {{ Auth::user()->name }}!</h2>

        @if (session('success'))
        <h3 class="alert alert-success">{{ session('success') }}</h3>
        @endif

        <h2 style="font-weight: bold;">&nbsp;Users Section</h2>
        <p>&nbsp;Note for role '0=user, 1=admin, 3=therapist'</p>
        <table id="users">
          <tr>
            <th>User ID</th>
            <th>Role</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Add User</th>
            <th>Actions</th>  
          </tr>
          <tr>
            @if(isset($users))
            @foreach ($users as $user)
            <td>{{ $user->id }}</td>
            <td>{{ $user->is_admin }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email }}</td>
            <td><a style="text-decoration: underline;" href= "{{ url('add-user/'.$user->id) }}">Add User</a> 
            </td>
            <td>
              <a style="text-decoration: underline;" href="{{ url('edit-admin/'.$user->id) }}">Edit</a> 
              <a style="text-decoration: underline;" href="{{ url('delete-admin/'.$user->id) }}" >Delete</a> 
            </td>
          </tr>
          @endforeach
          @endif 
        </table>

      </div>
       
      <!--div class="page" id="page2" style="display:none">
        
        
      </div>-->

      <div class="page" id="page3" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;Contact Us Section</h2>
        <table id="users">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
          </tr>
          <tr>
          @if(isset($cons))
          @foreach ($cons as $con)
            <td>{{ $con->id }}</td>
            <td>{{ $con->name }}</td>
            <td>{{ $con->phone }}</td>
            <td>{{ $con->email }}</td>
            <td>{{ $con->subject }}</td>
            <td>{{ $con->message }}</td>
          </tr>
          @endforeach
          @endif 
        </table>
      </div>

      <div class="page" id="page4" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; Journal Section</h2>
        <table id="users">
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>Title</th>
            <th>Date</th>
            <th>Message</th>
          </tr>
          <tr>
          @if(isset($journals))
          @foreach ($journals as $journal)
            <td>{{ $journal->id }}</td>
            <td>{{ $journal->user_id }}</td>
            <td>{{ $journal->User_name }}</td>
            <td>{{ $journal->title }}</td>
            <td>{{ $journal->JournalDate }}</td>
            <td>{{ $journal->message }}</td>
          </tr>
          @endforeach
          @endif 
        </table>
        
      </div>

      <div class="page" id="page5" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; Appointments Section</h2>
        <table id="users">
          <p style="padding-left: 8px;"><b>Note for Status: 0=pending, 1=approved, 2=declined.</b></p>
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Mode of Consultation</th>
            <th>Therapist</th>
            <th>Status</th>
          </tr>
          <tr>
            @if(isset($appts))
            @foreach ($appts as $appt)
            <td>{{ $appt->id }}</td>
            <td>{{ $appt->Client_id }}</td>
            <td>{{ $appt->Name }}</td>
            <td>{{ $appt->Phone_number }}</td>
            <td>{{ $appt->Email }}</td>
            <td>{{ $appt->Appt_date }}</td>
            <td>{{ $appt->Appt_time }}</td>
            <td>{{ $appt->Mode_of_consultation }}</td>
            <td>{{ $appt->Therapist }}</td>
            <td>{{ $appt->status }}</td>
          </tr>
          @endforeach
          @endif 
        </table>

        
      </div>

      <div class="page" id="page6" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; </h2>
        
        
      </div>


       
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

