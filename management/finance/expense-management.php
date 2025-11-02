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
    <main class="app-main" style="background-color: #f0f8ff;">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Expense Management</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Expense Management</li>
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
                <h3 class="card-title">Expense Records</h3>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exportModal">
                <i class="fas fa-file-pdf"></i> Export PDF
                </button>
            </div>
            <div class="card-body">
                <table id="expenseTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>E-001</td>
                    <td>Maintenance</td>
                    <td>$500</td>
                    <td>2025-11-01</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Receipt</button>
                    </td>
                    </tr>
                    <tr>
                    <td>E-002</td>
                    <td>Salaries</td>
                    <td>$3,200</td>
                    <td>2025-11-02</td>
                    <td><span class="badge bg-success">Approved</span></td>
                    <td>
                        <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">View</button>
                    </td>
                    </tr>
                    <tr>
                    <td>E-003</td>
                    <td>Utilities</td>
                    <td>$1,100</td>
                    <td>2025-11-03</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#uploadModal">Upload Receipt</button>
                    </td>
                    </tr>
                    <tr>
                    <td>E-004</td>
                    <td>Maintenance</td>
                    <td>$750</td>
                    <td>2025-11-04</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#approveModal">Approve</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
        <div class="row mt-3">
            <!-- Expense Breakdown -->
            <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h3 class="card-title">Expense Breakdown</h3></div>
                <div class="card-body"><div id="expensePie"></div></div>
                </div>
            </div>

            <!-- Monthly Expense Trend -->
            <div class="col-md-6">
                <div class="card">
                <div class="card-header"><h3 class="card-title">Monthly Expense Trend</h3></div>
                <div class="card-body"><div id="expenseBar"></div></div>
                </div>
            </div>
        </div>


        <!--end::Row-->
        </div>
        

      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->

    <?php include('../../includes/footer.php'); ?>
    <!--end::Footer-->
  </div>

  <div class="modal fade" id="exportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title">Export PDF Report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            This will generate a PDF report of all revenue records. (Demo only)
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-danger">Export</button>
        </div>
        </div>
    </div>
    </div>

   <!-- Approve Modal -->
<div class="modal fade" id="approveModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Approve Expense</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">Confirm approval of this expense entry?</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-success">Approve</button>
      </div>
    </div>
  </div>
</div>

<!-- Reject Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Reject Expense</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Provide reason for rejection:
        <textarea class="form-control mt-2"></textarea>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-danger">Reject</button>
      </div>
    </div>
  </div>
</div>

<!-- Upload Receipt Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title">Upload Receipt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="file" class="form-control">
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-info">Upload</button>
      </div>
    </div>
  </div>
</div>

<!-- Details Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Expense Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>ID:</strong> E-002</p>
        <p><strong>Category:</strong> Salaries</p>
        <p><strong>Amount:</strong> $3,200</p>
        <p><strong>Status:</strong> Approved</p>
        <p><strong>Date:</strong> 2025-11-02</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
  $('#expenseTable').DataTable({
    responsive: true,
    autoWidth: false,
    order: [[3, 'desc']]
  });

  // ApexCharts Pie (Breakdown)
  var pieOptions = {
    chart: { type: 'donut' },
    labels: ['Maintenance', 'Salaries', 'Utilities'],
    series: [1250, 3200, 1100],
    colors: ['#17a2b8', '#28a745', '#ffc107']
  };
  new ApexCharts(document.querySelector("#expensePie"), pieOptions).render();

  // ApexCharts Bar (Monthly Trend)
  var barOptions = {
    chart: { type: 'bar', height: 300 },
    series: [{
      name: 'Expenses',
      data: [2000, 3500, 1800, 4000, 2500] // dummy monthly values
    }],
    xaxis: {
      categories: ['July', 'Aug', 'Sept', 'Oct', 'Nov']
    }
  };
  new ApexCharts(document.querySelector("#expenseBar"), barOptions).render();
});

  </script>

  <!--end::Script-->
</body>
<!--end::Body-->

</html>