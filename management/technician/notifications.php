<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <div class="app-wrapper">
    <?php include('../../includes/navbar.php'); ?>
    <?php include('../../includes/sidebarT.php'); ?>

    <main class="app-main" style="background-color: #f0f8ff;">
      <div class="app-content-header">
        <div class="container-fluid">
          <h3 class="mb-0">Notifications</h3>
          <p class="text-muted">Stay updated with job assignments, part alerts, and approvals.</p>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">
          <div class="list-group shadow-sm">
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
              <i class="bi bi-wrench text-primary fs-4 me-3"></i>
              <div><strong>New Job Assigned:</strong> Taxi TAXI-007 — battery replacement</div>
              <small class="ms-auto text-muted">2 mins ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
              <i class="bi bi-box-seam text-warning fs-4 me-3"></i>
              <div><strong>Low Stock:</strong> Only 2 battery modules left.</div>
              <small class="ms-auto text-muted">10 mins ago</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
              <i class="bi bi-check2-circle text-success fs-4 me-3"></i>
              <div><strong>Repair Verified:</strong> Taxi TAXI-005 has been approved.</div>
              <small class="ms-auto text-muted">30 mins ago</small>
            </a>
          </div>
        </div>
      </div>
    </main>

    <?php include('../../includes/footer.php'); ?>
  </div>
  <?php include('../../includes/js.php'); ?>
</body>
</html>
