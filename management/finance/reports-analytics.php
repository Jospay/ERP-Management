<!doctype html>
<html lang="en">
<!--begin::Head-->

<?php include('../../includes/header.php'); ?>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <?php include('../../includes/navbar.php'); ?>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <?php include('../../includes/sidebarFi.php'); ?>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Report Analytics</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Report Analytics</li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
        <div class="row">
      

        <div class="row">
       
        <div class="col-12">
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Generated Financial Reports</h3>
                <div>
                <button class="btn btn-primary btn-sm">Generate Daily</button>
                <button class="btn btn-info btn-sm">Generate Weekly</button>
                <button class="btn btn-success btn-sm">Generate Monthly</button>
                </div>
            </div>
            <div class="card-body">
                <table id="reportsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Report ID</th>
                    <th>Type</th>
                    <th>Date Range</th>
                    <th>Total Revenue</th>
                    <th>Total Expenses</th>
                    <th>Net</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>FR-001</td>
                    <td>Daily</td>
                    <td>2025-11-01</td>
                    <td>$5,200</td>
                    <td>$3,100</td>
                    <td><span class="badge bg-success">+$2,100</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exportModal">Export PDF</button>
                    </td>
                    </tr>
                    <tr>
                    <td>FR-002</td>
                    <td>Weekly</td>
                    <td>2025-10-25 → 2025-10-31</td>
                    <td>$32,000</td>
                    <td>$21,500</td>
                    <td><span class="badge bg-success">+$10,500</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exportModal">Export PDF</button>
                    </td>
                    </tr>
                    <tr>
                    <td>FR-003</td>
                    <td>Monthly</td>
                    <td>October 2025</td>
                    <td>$120,000</td>
                    <td>$98,000</td>
                    <td><span class="badge bg-warning">+$22,000</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exportModal">Export PDF</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>

        </div>

        <div class="row mt-3">
          
            <!-- Revenue vs Expenses -->
            <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h3 class="card-title">Revenue vs Expenses</h3></div>
                <div class="card-body"><div id="revExpBar"></div></div>
                </div>
            </div>

            <!-- Net Profit Trend -->
            <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h3 class="card-title">Net Profit Trend</h3></div>
                <div class="card-body"><div id="netLine"></div></div>
                </div>
            </div>
          
        <!--end::Row-->
        </div>
        


      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->

    <?php include('../../includes/footer.php'); ?>
    <!--end::Footer-->
  </div>

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-primary text-white"><h5 class="modal-title">Report Details</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">
      <p><strong>Report ID:</strong> FR-001</p>
      <p><strong>Type:</strong> Daily</p>
      <p><strong>Date Range:</strong> 2025-11-01</p>
      <p><strong>Total Revenue:</strong> $5,200</p>
      <p><strong>Total Expenses:</strong> $3,100</p>
      <p><strong>Net:</strong> +$2,100</p>
    </div>
    <div class="modal-footer"><button class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div>
  </div></div>
</div>

<!-- Export Modal -->
<div class="modal fade" id="exportModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-danger text-white"><h5 class="modal-title">Export Report</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
    <div class="modal-body">This will generate a PDF report. (Demo only)</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-danger">Export</button>
    </div>
  </div></div>
</div>




  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <?php include('../../includes/js.php'); ?>
  <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->

   <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <script>
 $(function () {
  // DataTable
  $('#reportsTable').DataTable({
    responsive: true,
    autoWidth: false,
    order: [[2, 'desc']]
  });

  // Bar Chart: Revenue vs Expenses
  new ApexCharts(document.querySelector("#revExpBar"), {
    chart: { type: 'bar', height: 300 },
    series: [
      { name: 'Revenue', data: [5200, 32000, 120000] },
      { name: 'Expenses', data: [3100, 21500, 98000] }
    ],
    xaxis: { categories: ['Daily', 'Weekly', 'Monthly'] },
    colors: ['#28a745', '#dc3545']
  }).render();

  // Line Chart: Net Profit Trend
  new ApexCharts(document.querySelector("#netLine"), {
    chart: { type: 'line', height: 300 },
    series: [{
      name: 'Net Profit',
      data: [2100, 10500, 22000]
    }],
    xaxis: { categories: ['Daily', 'Weekly', 'Monthly'] },
    stroke: { curve: 'smooth' },
    colors: ['#007bff']
  }).render();
});



  </script>

  <!--end::Script-->
</body>
<!--end::Body-->

</html>