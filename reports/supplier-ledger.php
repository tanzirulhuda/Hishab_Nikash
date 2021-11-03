<?php
 include_once('../components/header.php');
 $mainPage = 'reports';
 $subPage = 'supplier-ledger';
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
            <h1 class="m-0">Supplier Ledger</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Supplier Ledger</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card p-3">
                <div class="text-left">
                    <p style="margin-bottom: 1px;"><strong>Supplier Name: </strong>Square Pharmaceuticals Ltd</p>
                    <p style="margin-bottom: 1px;">Address : null</p>
                    <p style="margin-bottom: 1px;">Mobile Number: 017########</p>
                    <p style="margin-bottom: 1px;">Prepared By : Admin</p>
                </div>
            </div>
            <!-- Date Picker -->
            <from class="form-inline mb-3">
              <div class="form-group mr-3">
                <label>From Date</label>
                <input type="text" placeholder="Date" name="daterange" class="form-control date-picker" id="date-picker" />
              </div>
              <div class="form-group mr-3">
                <label>To Date</label>
                <input type="text" placeholder="Date" name="daterange" class="form-control date-picker-2" id="date date-picker-2" />
              </div>
              <div class="form-group">
                <button class="btn bg-gradient-info btn-flat">Search</button>
              </div>
            </from>
            <!--! Date Picker -->
            <div class="card">
                <div class="card-header bg-gradient-primary">
                    <div class="pt-2">
                        <h3 class="card-title">Supplier Ledger</h3>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="customer-ledger" class="table table-bordered table-striped">
                    <thead class="bg-gradient-primary text-center text-small">
                    <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Invoice No.</th>
                        <th>Total Amount</th>
                        <th>Payment</th>
                        <th>Remarks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="4" class="text-danger">Opening Balance</td>
                        <td class="text-right text-danger">0.00</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>01/10/2021</td>
                        <td>12533562</td>
                        <td class="text-right">771</td>
                        <td class="text-right">500</td>
                        <td class="text-right"></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td colspan="2"></td>
                        <td class="text-right">771</td>
                        <td class="text-right">500</td>
                    </tr>
                    <tr class="bg-gradient-info">
                        <td colspan="5">Current Balance</td>
                        <td class="text-right text-danger" colspan="3">-271</td>
                    </tr>
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
<?php include_once('../components/footer.php'); ?>