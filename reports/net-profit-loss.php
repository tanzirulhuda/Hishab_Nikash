<?php
 include_once('../components/header.php');
 $mainPage = 'reports';
 $subPage = 'net-profit-loss';
?>
<!-- Semantic UI Style -->
<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Net Profit&Loss</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Net Profit&Loss</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <!-- Main content -->
    <div class="content card">
      <div class="container-fluid">
        <div class="text-center mb-4 mt-3">
            <form>
                <button class="btn btn-flat bg-gradient-info">Yesterday</button>
                <button class="btn btn-flat bg-gradient-info">Last 3 days</button>
                <button class="btn btn-flat bg-gradient-info">Last 7 days</button>
                <button class="btn btn-flat bg-gradient-info">Last Month</button>
                <div class="ui calendar d-inline btn btn-flat" id="datePicker">
                    <div style="border-radius: 0;border-width: 1px;box-shadow: none;background: #17a2b8 linear-gradient(180deg, #3ab0c3, #17a2b8) repeat-x !important;color: #fff;padding: 0.7rem 0.7em;margin-left: -11px;" class="ui button">Select date</div>
                </div>
                <input id="date_container" type="hidden" value="3">
            </form>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-gradient-primary">
                <div class="pt-2">
                    <h3 class="card-title">Income</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead style="font-size: 12px;" class="bg-gradient-primary text-center">
                  <tr>
                    <th>SL</th>
                    <th>Sales Date</th>
                    <th>Total Sales Amount</th>
                    <th>Total Cost Amount</th>
                    <th>Total Profit</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>31/10/2021</td>
                    <td>1200</td>
                    <td>1040</td>
                    <td class="text-right">160</td>
                  </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="2">Total</td>
                          <td>1200</td>
                          <td>1040</td>
                          <td class="text-right">160</td>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-gradient-primary">
                <div class="pt-2">
                    <h3 class="card-title">Expense</h3>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead class="bg-gradient-primary text-center text-small">
                  <tr>
                    <th>SL</th>
                    <th>Expense Head</th>
                    <th>Amount</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Admin</td>
                    <td class="text-right">100</td>
                  </tr>
                  </tbody>
                  <tfoot>
                      <tr>
                          <td colspan="2">Total</td>
                          <td class="text-right">100</td>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-bordered table-striped">
                  <thead class="bg-gradient-info text-center text-small">
                  <tr>
                    <th>Total Income</th>
                    <th>Total Expense</th>
                    <th>Net Profit</th>
                  </tr>
                  </thead>
                  <tbody class="text-center">
                  <tr>
                    <td>160</td>
                    <td>100</td>
                    <td>60</td>
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

  <!-- Main Footer -->
<?php include_once('../components/footer.php'); ?>