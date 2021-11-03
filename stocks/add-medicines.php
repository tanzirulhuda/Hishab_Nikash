<?php
 include_once('../components/header.php');
 $mainPage = 'stock';
 $subPage = 'add-medicine';
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
            <h1 class="m-0">Add Medicine</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item">Add Medicine</li>
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
                    <h3 class="card-title">Add Medicine</h3>
                </div>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                      <div class="form-group col-3">
                          <label for="name">Supplier name</label>
                          <input type="text" class="form-control" id="name" placeholder="Supplier name">
                      </div>
                      <div class="form-group col-3">
                          <label for="previous_dues">Previous dues</label>
                          <input type="number" class="form-control" id="previous_dues-number" placeholder="0.00" readonly>
                      </div>
                      <div class="form-group col-3">
                          <label for="invoice_number">Invoice number</label>
                          <input type="text" class="form-control" id="invoice_number" placeholder="Invoice number">
                      </div>
                      <div class="form-group col-3">
                          <label for="date">Date</label>
                          <input type="date" class="form-control" id="date">
                      </div>
                      <div class="form-group col-3">
                          <label for="total_amount">Total amount</label>
                          <input type="text" class="form-control" id="total_amount" placeholder="0.00" readonly>
                      </div>
                      <div class="form-group col-3">
                          <label for="discount">Discount</label>
                          <input type="number" class="form-control" id="discount" placeholder="0.00">
                      </div>
                      <div class="form-group col-3">
                          <label for="shipping_charge">Shipping charge</label>
                          <input type="text" class="form-control" id="shipping_charge" placeholder="0.00">
                      </div>
                      <div class="form-group col-3">
                        <label for="payment_method">Payment method</label>
                        <select class="form-control">
                          <option>Cash in Hand</option>
                          <option>Bkash</option>
                          <option>Rocket</option>
                        </select>
                      </div>
                      <div class="form-group col-3">
                          <label for="payment">Payment</label>
                          <input type="number" class="form-control" id="payment" placeholder="0.00">
                      </div>
                      <div class="form-group col-3">
                          <label for="dues">Dues</label>
                          <input type="number" class="form-control" id="dues" placeholder="0.00" readonly>
                      </div>
                      <div class="form-group col-12">
                          <label for="product_name">Product name</label>
                          <input type="text" class="form-control" id="product_name" placeholder="Enter product name" autocomplete="off">
                      </div>
                      <table class="table table-hover mt-4">
                        <thead class="bg-gradient-primary text-center">
                          <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Cost Price</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Expire Date</th>
                            <th scope="col">Rack no</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>
                              Napa <br>
                              Syrup <br>
                              60 ml <br>
                              Paracetamol
                            </td>
                            <td class="text-center" style="width: 80px;"><input type="text" name="quantity" class="form-control" id="quantity" value="2"></td>
                            <td class="text-center" style="width: 100px;"><input type="text" name="cost_price" class="form-control" id="cost_price" value="18.00" ></td>
                            <td class="text-center" style="width: 100px;"><input type="text" name="sale_price" class="form-control" id="sale_price" value="20.00"></td>
                            <td class="text-center" style="width: 80px;"><input type="date" name="expire_date" class="form-control" id="expire_date"></td>
                            <td class="text-center" style="width: 120px;">
                              <select class="form-control">
                                <option>Ract 1</option>
                                <option>Ract 2</option>
                                <option>Ract 3</option>
                                <option>Ract 4</option>
                                <option>Ract 5</option>
                                <option>Ract 6</option>
                                <option>Ract 7</option>
                                <option>Ract 8</option>
                                <option>Ract 9</option>
                                <option>Ract 10</option>
                                <option>Ract 11</option>
                                <option>Ract 12</option>
                                <option>Ract 13</option>
                              </select>
                            </td>
                            <td class="text-center" style="width: 80px;"><input type="text" name="sub_total" class="form-control" id="sub_total" value="36.00" readonly></td>
                            <td class="text-center" style="width: 80px;"><input type="text" name="stock" class="form-control" id="stock" value="2" readonly></td>
                            <td><button class="btn btn-small btn-danger btn-flat"><i class="fas fa-times"></i></button></td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="7">Total</td>
                            <td style="width: 100px;"><input type="number" name="total" class="form-control" id="total" value="36.00" readonly></td>
                          </tr>
                        </tfoot>
                      </table>
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