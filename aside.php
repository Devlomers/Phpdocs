<!DOCTYPE html>
<html lang="en">
    <head>
      <link rel="stylesheet" href="css1\tempusdominus-bootstrap-4.min.css">
      <link rel="stylesheet" href="css\adminlte.min.css">
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    </head>
    <body >
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TRAVINFO</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div style="" class=" mt-0 pl-4 mb-0 ">
          <a href="#" >ADMIN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="editor_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="article_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="content_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="feed_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feedback</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="useradd_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Address</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="bookmark_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bookmark</p>
                </a>
              </li>

            </ul>
          </li>
  
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="art_form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="content-form.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Content</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="alogout.php" class="nav-link">
                  <img src="img\log-out.svg"></img>
                  <p>Log out</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->



    <!-- Sidebar -->
    
    <!-- /.sidebar -->
  </aside>
</body>
</html>