  <aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/logo.ico" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sports Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user.png" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$username;?></a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="dashboard.php" class="nav-link ">
              <i class="fas fa-bullhorn"></i>
              <p>
                Announcement
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="facility.php" class="nav-link ">
              <i class="fas fa-users"></i>
              <p>
                List of Facilities
               
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="equipment.php" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                List of Equipments
               
              </p>
            </a>
          </li>
           <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="fa fa-edit"></i>
              <p>
                Request
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="borrow.php" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Borrow</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pending.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Pending</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="approved.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Approved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="disapproved.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Dis-Approved</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="returned.php" class="nav-link ">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>List of Returned</p>
                </a>
              </li>
            </ul>
          </li>
          </li>  
         <?php include 'logout.php' ;?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
