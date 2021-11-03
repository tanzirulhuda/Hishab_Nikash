<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link">
      <img src="../dist/img/logo.png" alt="Apps Valley Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">Apps Valley</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tanzirul Huda</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item<?php if ($mainPage == 'contact') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link <?php if ($mainPage == 'contact') {echo ' active';} ?>">
            <i class="fas fa-address-book nav-icon"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../contacts/customer-list.php" class="nav-link<?php if ($subPage == 'customer-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../contacts/supplier-list.php" class="nav-link <?php if ($subPage == 'supplier-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'stock') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'stock') {echo ' active';} ?>">
            <i class="fas fa-notes-medical nav-icon"></i>
              <p>
                Stock
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../stocks/add-medicines.php" class="nav-link<?php if ($subPage == 'add-medicine') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Medicine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../stocks/medicine-list.php" class="nav-link<?php if ($subPage == 'medicine-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Medicine List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'sales') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'sales') {echo ' active';} ?>">
            <i class="fab fa-sellsy nav-icon"></i>
              <p>
                Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../sales/add-sales.php" class="nav-link<?php if ($subPage == 'add-sales') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../sales/sales-list.php" class="nav-link<?php if ($subPage == 'sales-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'collection') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'collection') {echo ' active';} ?>">
            <i class="fab fa-accusoft nav-icon"></i>
              <p>
                Collection
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../Collection/add-collection.php" class="nav-link<?php if ($subPage == 'add-collection') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Collection</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Collection/collection-list.php" class="nav-link<?php if ($subPage == 'collection-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collection List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'payment') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'payment') {echo ' active';} ?>">
            <i class="fas fa-credit-card nav-icon"></i>
              <p>
                Payment
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../payment/add-payment.php" class="nav-link<?php if ($subPage == 'add-payment') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../payment/payment-list.php" class="nav-link<?php if ($subPage == 'payment-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'hr-management') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'hr-management') {echo ' active';} ?>">
            <i class="fas fa-tasks nav-icon"></i>
              <p>
                HR Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../hr-management/designation.php" class="nav-link<?php if ($subPage == 'designation') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../hr-management/employee-list.php" class="nav-link<?php if ($subPage == 'employee-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../hr-management/monthly-salary.php" class="nav-link<?php if ($subPage == 'monthly-salary') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monthly Salary</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item<?php if ($mainPage == 'reports') {echo ' menu-open';} ?>">
            <a href="#" class="nav-link<?php if ($mainPage == 'reports') {echo ' active';} ?>">
            <i class="fas fa-file-medical nav-icon"></i>
              <p>
                Report
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../reports/expire-medicine-report.php" class="nav-link<?php if ($subPage == 'expire-medicine-list') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expire Medicine Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/stock-report.php" class="nav-link<?php if ($subPage == 'stock-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/sales-report.php" class="nav-link<?php if ($subPage == 'sales-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/purchase-report.php" class="nav-link<?php if ($subPage == 'purchase-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/sales-details.php" class="nav-link<?php if ($subPage == 'sales-details') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/customer-details.php" class="nav-link<?php if ($subPage == 'customer-details') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customers Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/supplier-details.php" class="nav-link<?php if ($subPage == 'supplier-details') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/collection-report.php" class="nav-link<?php if ($subPage == 'collection-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collection Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/payment-report.php" class="nav-link<?php if ($subPage == 'payment-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/employee-report.php" class="nav-link<?php if ($subPage == 'employee-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/employee-expense.php" class="nav-link<?php if ($subPage == 'employee-expense') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Expense</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/employee-ledger.php" class="nav-link<?php if ($subPage == 'employee-ledger') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Ledger</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../reports/employee-salary-list.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee Salary List</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../reports/customer-ledger.php" class="nav-link<?php if ($subPage == 'customer-ledger') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Ledger</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/supplier-ledger.php" class="nav-link<?php if ($subPage == 'supplier-ledger') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier Ledger</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../reports/expense-head-report.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense Head Report</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../reports/expense-details-report.php" class="nav-link<?php if ($subPage == 'expense-report') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expense Details Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../reports/net-profit-loss.php" class="nav-link<?php if ($subPage == 'net-profit-loss') {echo ' active';} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Net Profit & Loss</p>
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