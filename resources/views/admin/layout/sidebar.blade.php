<?php
				$segment1	=	Request::segment(2);
				$segment2	=	Request::segment(3);
				$segment3	=	Request::segment(4);
				$segment4	=	Request::segment(5);
			?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{assets('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Pierce</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('admin/dashboard')}}" class="nav-link {{ in_array($segment1 ,array('dashboard')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/users')}}" class="nav-link {{ in_array($segment1 ,array('users')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p> Users Management</p>
            </a>
          </li>
       
       
          

          <li class="nav-item">
                <a href="{{url('admin/email_template')}}" class="nav-link {{ in_array($segment1 ,array('email_template','email_template_edit')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Template</p>
                </a>
          </li>

          <li class="nav-item">
                <a href="{{url('admin/video/index')}}" class="nav-link {{ in_array($segment1 ,array('video')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video Managment</p>
                </a>
          </li>

          <li class="nav-item">
                <a href="{{url('admin/slider/index')}}" class="nav-link {{ in_array($segment1 ,array('slider')) ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/cms-manager')}}" class="nav-link {{ in_array($segment1 ,array('cms-manager')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p> Cms Management</p>
            </a>
          </li>


           <li class="nav-item">
           <a href="{{url('admin/testimonials')}}" class="nav-link {{ in_array($segment1 ,array('testimonials')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Testimonials</p>
            </a>
          </li>


          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-dollar-sign"></i>
              <p>Payment Management</p>
            </a>
          </li>  -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>Setting</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
