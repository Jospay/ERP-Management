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
              <h3 class="mb-0">Notifications</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Notifications</li>
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
  <div class="row">
  <div class="col-md-6">
    <!-- Unpaid Boundary Alert -->
    <div class="callout callout-danger">
      <h5><i class="fas fa-exclamation-circle"></i> Unpaid Boundary Alert</h5>
      <p>Boundary contract <strong>BC-004</strong> is overdue since <strong>2025-11-02</strong>.</p>
      <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewNotifModal">View Contract</button>
    </div>

    <!-- Another Alert -->
    <div class="callout callout-warning">
      <h5><i class="fas fa-bell"></i> Expense Approval Reminder</h5>
      <p>Expense <strong>E-005</strong> requires approval.</p>
      <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#approveNotifModal">Approve</button>
      <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rejectNotifModal">Reject</button>
    </div>
  </div>

  <div class="col-md-6">
    <!-- Notification List -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Recent Notifications</h3>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <i class="fas fa-exclamation text-danger"></i> Boundary BC-006 is unpaid
          <span class="badge bg-danger float-end">Unresolved</span>
        </li>
        <li class="list-group-item">
          <i class="fas fa-file-invoice text-warning"></i> Expense E-007 pending approval
          <span class="badge bg-warning float-end">Pending</span>
        </li>
        <li class="list-group-item">
          <i class="fas fa-check text-success"></i> Expense E-003 approved
          <span class="badge bg-success float-end">Done</span>
        </li>
      </ul>
    </div>
  </div>
</div>

</div>


        <!--end::Row-->
        </div>
        
      </div>
      <!--end::App Content-->
    </main>

    <!-- View Notification Modal -->
<div class="modal fade" id="viewNotifModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-primary text-white">
      <h5 class="modal-title">Notification Details</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <p><strong>ID:</strong> N-001</p>
      <p><strong>Type:</strong> Unpaid Boundary</p>
      <p><strong>Message:</strong> Boundary contract BC-004 is overdue</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div></div>
</div>

<!-- Approve Notification Modal -->
<div class="modal fade" id="approveNotifModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-success text-white">
      <h5 class="modal-title">Approve Expense</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">Confirm approval of this expense reminder?</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-success">Approve</button>
    </div>
  </div></div>
</div>

<!-- Reject Notification Modal -->
<div class="modal fade" id="rejectNotifModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
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
  </div></div>
</div>

    <!--end::App Main-->
    <!--begin::Footer-->

    <?php include('../../includes/footer.php'); ?>
    <!--end::Footer-->
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



  <!--end::Script-->
</body>
<!--end::Body-->

</html>