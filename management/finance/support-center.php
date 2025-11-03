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
              <h3 class="mb-0">Support Center</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Support Center</li>
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
  <div class="col-md-8">
    <!-- Ticket Card -->
    <div class="card mb-3">
      <div class="card-header bg-warning">
        <h5 class="card-title mb-0">Ticket #T-001 — Payment Dispute</h5>
      </div>
      <div class="card-body">
        <p><strong>Description:</strong> Incorrect boundary deposit recorded</p>
        <p><strong>Status:</strong> <span class="badge bg-warning">Open</span></p>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewTicketModal">View</button>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-header bg-success">
        <h5 class="card-title mb-0">Ticket #T-002 — Adjustment</h5>
      </div>
      <div class="card-body">
        <p><strong>Description:</strong> Expense entry needs correction</p>
        <p><strong>Status:</strong> <span class="badge bg-success">Resolved</span></p>
        <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#viewTicketModal">View</button>
      </div>
    </div>
  </div>

  <!-- Raise Ticket Button -->
  <div class="col-md-4">
    <div class="card">
      <div class="card-body text-center">
        <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#raiseTicketModal">
          <i class="fas fa-plus"></i> Raise New Ticket
        </button>
      </div>
    </div>
  </div>
</div>


        <!--end::Row-->
        </div>
        

      </div>
      <!--end::App Content-->
    </main>

    <!-- Raise Ticket Modal -->
<div class="modal fade" id="raiseTicketModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-primary text-white">
      <h5 class="modal-title">Raise New Ticket</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <label>Category</label>
      <select class="form-control mb-2">
        <option>Payment Dispute</option>
        <option>Adjustment</option>
      </select>
      <label>Description</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-primary">Submit</button>
    </div>
  </div></div>
</div>

<!-- View Ticket Modal -->
<div class="modal fade" id="viewTicketModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header bg-info text-white">
      <h5 class="modal-title">Ticket Details</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <p><strong>ID:</strong> T-001</p>
      <p><strong>Category:</strong> Payment Dispute</p>
      <p><strong>Status:</strong> Open</p>
      <p><strong>Description:</strong> Incorrect boundary deposit recorded</p>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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