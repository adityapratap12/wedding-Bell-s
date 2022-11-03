 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>Admin/Home" class="brand-link">
      <img src="<?php echo base_url();?>Public/Admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Home" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home/Starter</p>
                </a>
              </li>
            </ul>
          </li>

            


               

 

               

                 


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-info"></i>
              <p>
               &nbsp;Package's
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Package_C/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Package</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Package_C/View_Packages" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Package</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-info"></i>
              <p>
               &nbsp;Services
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Service_C/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Service_C/View_Services" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
            </ul>
          </li>

               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-video"></i>
              <p>
               &nbsp;My Video Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
                 <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Video/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Video</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Video/View_Video" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Video</p>
                </a>
              </li>
            </ul>
          </li>


            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-info"></i>
              <p>
               &nbsp;Event Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Event/index" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Admin/Event/View_Event" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p>
                </a>
              </li>
            </ul>
          </li>



           <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>Admin/Contact/View_Contact" class="nav-link">
              <i class="nav-icon fa fa-phone"></i>
              <p>
               &nbsp;Contact 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          </li>

            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
