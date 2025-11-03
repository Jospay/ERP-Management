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
        <h3 class="mb-0">Support Center</h3>
        <p class="text-muted">Request parts or report issues to admin.</p>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <div class="row g-4">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-primary text-white">Request Parts</div>
              <div class="card-body">
                <form class="row g-3">
                  <div class="col-12">
                    <label class="form-label">Part Name</label>
                    <input type="text" class="form-control" placeholder="Enter part name">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Quantity</label>
                    <input type="number" class="form-control" value="1">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Urgency</label>
                    <select class="form-select">
                      <option>Normal</option><option>High</option><option>Critical</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100">Submit Request</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-danger text-white">Report Issue</div>
              <div class="card-body">
                <form>
                  <label class="form-label">Issue Details</label>
                  <textarea class="form-control" rows="5" placeholder="Describe the issue..."></textarea>
                  <button class="btn btn-danger mt-3 w-100">Send Report</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('../../includes/footer.php'); ?>
</div>
<?php include('../../includes/js.php'); ?>
</body>
</html>
