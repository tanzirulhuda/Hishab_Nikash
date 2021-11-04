<?php
 include_once('../components/header.php');
 $mainPage = '';
 $subPage = '';
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php include_once('../components/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Employee</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Add Employee</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-gradient-primary">
                <div class="pt-2">
                    <h3 class="card-title">Add Employee</h3>
                </div>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="form-group col-3">
                      <label for="name">Employee name</label>
                      <input type="text" class="form-control" id="name" placeholder="Employee name">
                  </div>
                  <div class="form-group col-3">
                      <label for="fathers_name">Father's name</label>
                      <input type="text" class="form-control" id="fathers_name" placeholder="Father's name">
                  </div>
                  <div class="form-group col-3">
                      <label for="mothers_name">Mother's name</label>
                      <input type="text" class="form-control" id="mothers_name" placeholder="Mother's name">
                  </div>
                  <div class="form-group col-3">
                      <label for="basic_salary">Basic salary</label>
                      <input type="text" class="form-control" id="basic_salary" placeholder="0.00">
                  </div>
                  <div class="form-group col-3">
                      <label for="house_rent">House Rent</label>
                      <input type="text" class="form-control" id="house_rent" placeholder="0.00">
                  </div>
                  <div class="form-group col-3">
                      <label for="designation">Designation</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Doctor</option>
                        <option>Word Boy</option>
                        <option>Genarel Manager</option>
                        <option>Word Girl</option>
                        <option>Front Desk Officer</option>
                        <option>Accounts Officer</option>
                      </select>
                  </div>
                  <div class="form-group col-3">
                      <label for="cng_cost">CNG Cost</label>
                      <input type="text" class="form-control" id="cng_cost" placeholder="0.00">
                  </div>
                  <div class="form-group col-3">
                      <label for="image">Image</label>
                      <input style="padding: 3px;" type="file" class="form-control" id="image">
                  </div>
                  <div class="form-group col-3">
                      <label for="overtime_rate">OverTime Salary Rate</label>
                      <input type="text" class="form-control" id="overtime_rate" placeholder="0.00">
                  </div>
                  <div class="form-group col-3">
                      <label for="per_day_salary">Per day Salary</label>
                      <input type="text" class="form-control" id="per_day_salary" placeholder="0.00">
                  </div>
                  <div class="form-group col-3">
                      <label for="mobile_number">Mobile Number</label>
                      <input type="text" class="form-control" id="mobile_number" placeholder="Mobile Number">
                  </div>
                  <div class="form-group col-3">
                      <label for="parmanent_address">Parmanent Address</label>
                      <input type="text" class="form-control" id="parmanent_address" placeholder="Parmanent Address">
                  </div>
                  <div class="form-group col-3">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email Address">
                  </div>
                  <div class="form-group col-3">
                      <label for="NID">NID No</label>
                      <input type="text" class="form-control" id="nid_no" placeholder="NID No">
                  </div>
                  <div class="form-group col-3">
                      <label for="joining_date">Joining Date</label>
                      <!-- <input type="date" class="form-control" id="joining_date" placeholder="Joining Date"> -->
                      <input type="text" placeholder="Date" name="daterange" class="form-control date-picker" id="date-picker" />
                  </div>
                  <div class="form-group col-3">
                      <label for="payment_method">Status</label>
                      <select class="form-control">
                      <option>Active</option>
                      <option>Inactive</option>
                      </select>
                  </div>
                </div>
                <div class="form-group text-center mt-3">
                  <button class="btn btn-flat bg-gradient-primary" type="submit">Submit</button>
                  <button class="btn btn-flat bg-gradient-danger" type="reset">Cancel</button>
                </div>
              </form>
            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
<?php include_once('../components/footer.php'); ?>