<?php
 include_once('../components/header.php');
 $mainPage = 'payment';
 $subPage = 'add-payment';
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
            <h1 class="m-0">Add Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Add Payment</li>
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
                    <h3 class="card-title">Add Payment</h3>
                </div>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                    <div class="form-group col-4">
                      <label for="supplier_name">Supplier Name</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Square Pharmaceuticals Ltd.</option>
                        <option>ACI  Limited</option>
                        <option>Albion Laboratories Ltd</option>
                        <option>BEACON Pharmaceuticals Ltd</option>
                        <option>Beximco Pharmaceuticals Ltd</option>
                        <option>Delta Pharma Ltd</option>
                        <option>Drug International Limited</option>
                        <option>Healthcare Pharmaceutical Limited</option>
                      </select>
                  </div>
                  <div class="form-group col-4">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="Address" readonly>
                  </div>
                  <div class="form-group col-4">
                      <label for="money_receipt">Money Receipt</label>
                      <input type="text" class="form-control" id="money_receipt" placeholder="Money Receipt">
                  </div>
                  <div class="form-group col-4">
                      <label for="total_dues">Total Dues</label>
                      <input type="text" class="form-control" id="total_dues" placeholder="0.00" readonly>
                  </div>
                  <div class="form-group col-4">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date">
                  </div>
                  <div class="form-group col-4">
                      <label for="payment_method">Payment Method</label>
                      <select class="form-control">
                      <option>Cash in Hand</option>
                      <option>Bkash</option>
                      </select>
                  </div>
                  <div class="form-group col-4">
                      <label for="remarks">Remarks</label>
                      <input type="text" class="form-control" id="remarks" placeholder="Remarks">
                  </div>
                  <div class="form-group col-4">
                      <label for="today_paid">Today Paid</label>
                      <input type="text" class="form-control" id="today_paid" placeholder="0.00">
                  </div>
                  <div class="form-group col-2">
                      <label for="discount">Discount</label>
                      <input type="text" class="form-control" id="discount">
                  </div>
                  <div class="form-group col-2">
                      <label for="final_dues">Final Dues</label>
                      <input type="text" class="form-control" id="final_dues" placeholder="0.00" readonly>
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