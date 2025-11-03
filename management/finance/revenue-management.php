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
              <h3 class="mb-0">Revenue Management</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Revenue Management</li>
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
        
        <div class="col-12">
            <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Revenue Records</h3>
                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exportModal">
                <i class="fas fa-file-pdf"></i> Export PDF
                </button>
            </div>
            <div class="card-body">
                <table id="revenueTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Source</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>R-001</td>
                    <td>Trip</td>
                    <td>$1,200</td>
                    <td>2025-11-01</td>
                    <td><span class="badge bg-success">Received</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">View</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#flagModal">Flag</button>
                    </td>
                    </tr>
                    <tr>
                    <td>R-002</td>
                    <td>Ads</td>
                    <td>$3,500</td>
                    <td>2025-11-02</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">View</button>
                    </td>
                    </tr>
                    <tr>
                    <td>R-003</td>
                    <td>Logistics</td>
                    <td>$2,800</td>
                    <td>2025-11-03</td>
                    <td><span class="badge bg-success">Received</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">View</button>
                    </td>
                    </tr>
                    <tr>
                    <td>R-004</td>
                    <td>Trip</td>
                    <td>$1,500</td>
                    <td>2025-11-04</td>
                    <td><span class="badge bg-danger">Flagged</span></td>
                    <td>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#flagModal">Review</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>

        <!--end::Row-->
        </div>
        <!--end::Container-->
        <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Revenue Breakdown</h3>
            </div>
            <div class="card-body">
                <div id="revenuePie"></div>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">Revenue Trend</h3>
            </div>
            <div class="card-body">
                <div id="revenueLine"></div>
            </div>
            </div>
        </div>
        </div>

      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->

    <?php include('../../includes/footer.php'); ?>
    <!--end::Footer-->
  </div>

    <!-- Export Modal -->
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

    <!-- Details Modal -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-primary text-white">
            <h5 class="modal-title">Revenue Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <p><strong>ID:</strong> R-001</p>
            <p><strong>Source:</strong> Trip</p>
            <p><strong>Amount:</strong> $1,200</p>
            <p><strong>Status:</strong> Received</p>
            <p><strong>Date:</strong> 2025-11-01</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Flag Modal -->
    <div class="modal fade" id="flagModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title">Flag Revenue Record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            Provide a reason for flagging this revenue record:
            <textarea class="form-control mt-2" rows="3"></textarea>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button class="btn btn-danger">Submit</button>
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
        $('#revenueTable').DataTable({
            responsive: true,
            autoWidth: false,
            order: [[3, 'desc']]
        });

        // ApexCharts Pie (Breakdown)
        var optionsPie = {
            chart: { type: 'pie' },
            labels: ['Trip', 'Ads', 'Logistics'],
            series: [4200, 3500, 2800], // dummy totals
            colors: ['#007bff', '#28a745', '#ffc107']
        };
        new ApexCharts(document.querySelector("#revenuePie"), optionsPie).render();

        // ApexCharts Line (Trend)
        var optionsLine = {
            chart: { type: 'line', height: 300 },
            series: [{
            name: 'Revenue',
            data: [1200, 3500, 2800, 1500, 4000] // dummy daily values
            }],
            xaxis: {
            categories: ['Nov 1', 'Nov 2', 'Nov 3', 'Nov 4', 'Nov 5']
            }
        };
        new ApexCharts(document.querySelector("#revenueLine"), optionsLine).render();
        });

  </script>

  <!--end::Script-->
</body>
<!--end::Body-->

</html>