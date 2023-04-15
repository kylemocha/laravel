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
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#" onclick="show('page2');">
            <i class='bx bx-box' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
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
        <li>
          <a href="#" onclick="show('page6');">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <button type="button" class="btn btn-danger dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false" style="font-size:20px; border: none; color: black; background-color: aqua;"><i class="far fa-user"></i></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>  
        </div>   
      </div>
    </nav>
    <!--end of navbar-->

    <div class="home-content">
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
    
      <div class="page" id="page1">
        <h2 style="font-weight: bold;">&nbsp;Welcome, {{ Auth::user()->name }}!</h2>
      </div>
       
      <div class="page" id="page2" style="display:none">
        <h2 style="font-weight: bold;">&nbsp;Users Section</h2>
        <a style="text-decoration: underline; float:right;" href= "#">Add User</a> 
        <table id="users">
          <tr>
            <th>User ID</th>
            <th>Role</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td>
              <a style="text-decoration: underline;" href= "#">Edit</a> 
              <a style="text-decoration: underline;" href= "#">Delete</a> 
            </td>
          </tr>
          <tr>
            <td>Berglunds snabbköp</td>
            <td>Christina Berglund</td>
            <td>Sweden</td>
            <td>Germany</td>
            <td>
              <a style="text-decoration: underline;" href= "#">Edit</a> 
              <a style="text-decoration: underline;" href= "#">Delete</a> 
            </td>
          </tr>
          <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
            <td>Germany</td>
            <td>
              <a style="text-decoration: underline;" href= "#">Edit</a> 
              <a style="text-decoration: underline;" href= "#">Delete</a> 
            </td>
          </tr>
          <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
            <td>Germany</td>
            <td>
              <a style="text-decoration: underline;" href= "#">Edit</a> 
              <a style="text-decoration: underline;" href= "#">Delete</a> 
            </td>
          </tr>
          <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
            <td>Germany</td>
            <td>
              <a style="text-decoration: underline;" href= "#">Edit</a> 
              <a style="text-decoration: underline;" href= "#">Delete</a> 
            </td>
          </tr>
        </table>
        
      </div>

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
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Berglunds snabbköp</td>
            <td>Christina Berglund</td>
            <td>Sweden</td>
            <td>Germany</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
            <td>Germany</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
            <td>Germany</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
            <td>Germany</td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>

      <div class="page" id="page4" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; Journal Section</h2>
        <table id="users">
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Message</th>
          </tr>
          <tr>
            <td>Alfreds Futterkiste</td>
            <td>Maria Anders</td>
            <td>Germany</td>
            <td>Germany</td>
            <td></td>
          </tr>
          <tr>
            <td>Berglunds snabbköp</td>
            <td>Christina Berglund</td>
            <td>Sweden</td>
            <td>Germany</td>
            <td></td>
          </tr>
          <tr>
            <td>Centro comercial Moctezuma</td>
            <td>Francisco Chang</td>
            <td>Mexico</td>
            <td>Germany</td>
            <td></td>
          </tr>
          <tr>
            <td>Ernst Handel</td>
            <td>Roland Mendel</td>
            <td>Austria</td>
            <td>Germany</td>
            <td></td>
          </tr>
          <tr>
            <td>Island Trading</td>
            <td>Helen Bennett</td>
            <td>UK</td>
            <td>Germany</td>
            <td></td>
          </tr>
        </table>
        
      </div>

      <div class="page" id="page5" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; Appointments Section</h2>

        
      </div>

      <div class="page" id="page6" style="display:none">
        <h2 style="font-weight: bold;">&nbsp; AAAAAAA</h2>
        
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

