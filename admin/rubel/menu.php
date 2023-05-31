<?php
if(!isset($_SESSION['username'])){
  header('Location: index.php');
}
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <?php if($_SESSION['role']=='super'){ ?>
              <li class="nav-item">
                <a href="../list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            
              <li class="nav-item">
                <a href="../create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Create</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <?php }?>

              <?php if($_SESSION['role']=='admin'){ ?>
              <li class="nav-item">
                <a href="../list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./R_leads.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leads</p>
             </a>
              </li> 
                    
              <li class="nav-item">
                <a href="./lead_list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of lead manager</p>
             </a>
       
              <li class="nav-item">
                <a href="./payament_dealer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Dealer</p>
             </a>
              </li> 
              <?php }?>
            </ul>
              </li>
      
          
       

          <li class="nav-item">
            <a href="tst.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                test page
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>