 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          Admin
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url();?>Admin/Home/Password" class="dropdown-item">
            <i class="fas fa-key"></i>&nbsp;Update Password
     
          </a>

            <a href="<?php echo base_url();?>Admin/Login/Logout" class="dropdown-item">
            <i class="fas fa-user"></i>&nbsp;Logout
      
          </a>

        </div>
      </li>
  
    </ul>
  </nav>
  <!-- /.navbar -->