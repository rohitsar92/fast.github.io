<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Fast</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>public/admin/plugins/summernote/summernote-bs4.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <!-- Welcome, <b><?php echo $username; ?></b> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          
          <div class="dropdown-divider"></div>
          <!-- <a href="<?php echo base_url().'admin/login/logout';?>" class="dropdown-item">
            logout
          </a> -->
          
          
        </div>
      </li>
      
          </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-white">
      <!-- <img src="<?php //echo base_url()?>public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text ml-4"><strong>Fast</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php //echo base_url()?>public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!------------------------------------------------home page details-------------->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Home Page
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/Home_controller/index'?>" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


          <!------------------------------------------------home endpage details-------------->



          <li class="nav-item has-treeview <?php echo(!empty($Main_Module) && $Main_Module == 'category') ? 'menu-open' : ''?>">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/cotegorys/create'?>" class="nav-link <?php echo(!empty($Main_Module) && $Main_Module == 'category' && !empty($Sub_Module) && $Sub_Module == 'addcategory') ? 'active' : ''?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add category </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/cotegorys/'?>" class="nav-link <?php echo(!empty($Main_Module) && $Main_Module == 'category' && !empty($Sub_Module) && $Sub_Module == 'viewcategory') ? 'active' : ''?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view category</p>
                </a>
              </li>
            </ul>
          </li>

       <li class="nav-item has-treeview <?php echo(!empty($Main_Module) && $Main_Module == 'article') ? 'menu-open' : ''?> ">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                articles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'admin/article/create'?>" class="nav-link <?php echo(!empty($Main_Module) && $Main_Module == 'article' && !empty($Sub_Module) && $Sub_Module == 'createarticle') ? 'active' : ''?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>add articles </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo (base_url().'admin/article/')?>" class="nav-link <?php echo(!empty($Main_Module) && $Main_Module == 'article' && !empty($Sub_Module) && $Sub_Module == 'viewarticle') ? 'active' : ''?> ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>view articles</p>
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">