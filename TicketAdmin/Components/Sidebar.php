<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="../Images/UserImages/user.png" alt="image"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  Welcome Jane
                </p>
                <p class="designation">
                  Super Admin
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="./index-2.html">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../widgets.html">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Avilable Tickets</span>
            </a>
          </li>


          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-tickets" aria-expanded="false" aria-controls="page-tickets">
              <i class="fa fa-tasks menu-icon"></i>
              <span class="menu-title">All Tickets</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="page-tickets" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="AllTickets.php"><i class="fa fa-plus"></i>&ensp;All Tickets</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-gavel"></i>&ensp;Ongoing Tickets</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-trash"></i>&ensp;Closed Tickets</a></li>
              </ul>
            </div>
          </li>

         

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">User Changes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="page-layouts" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="CreatUser.php"><i class="fa fa-plus"></i>&ensp;Create User</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-gavel"></i>&ensp;Update User</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-trash"></i>&ensp;Delete User</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#department" aria-expanded="false" aria-controls="page-layouts">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Department Changes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse " id="department" >
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="CreateDepartment.php"><i class="fa fa-plus"></i>&ensp;Create Department</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-gavel"></i>&ensp;Update Department</a></li>
              <li class="nav-item"> <a class="nav-link" href="boxed-layout.html"><i class="fa fa-trash"></i>&ensp;Delete Department</a></li>
              </ul>
            </div>
          </li>
          
        </ul>
      </nav>