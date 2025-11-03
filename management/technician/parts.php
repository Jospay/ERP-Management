<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
<div class="app-wrapper">
  <?php include('../../includes/navbar.php'); ?>
  <?php include('../../includes/sidebarT.php'); ?>

  <main class="app-main" style="background-color: #f0f8ff;">
    <div class="app-content-header">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Parts Used & Inventory</h3>
        <button class="btn btn-primary" onclick="openLogPartModal()">
          <i class="bi bi-plus-circle"></i> Log Part Used
        </button>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <div class="row g-3">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">Recently Used Parts</h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped mb-0">
                  <thead>
                    <th>Part Name</th>
                    <th>Used For</th>
                    <th>Quantity Left</th>
                    <th>Unit Cost</th>
                    <th>Status</th>
                  </thead>
                  <tbody>
                    <tr>
                        <td>Battery Module</td>
                        <td>TAXI-001</td>
                        <td>4</td>
                        <td>₱8,000</td>
                        <td><span class="badge bg-warning">Low</span></td>
                    </tr>
                     <tr>
                        <td>Cooling Fan</td>
                        <td>TAXI-002</td>
                        <td>12</td>
                        <td>₱1,200</td>
                        <td><span class="badge bg-success">OK</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card">
              <div class="card-header bg-success text-white">
                <h3 class="card-title mb-0">Inventory Summary</h3>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Compressors <span class="badge bg-primary">12 pcs</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Filters <span class="badge bg-warning">8 pcs</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Belts <span class="badge bg-danger">Low Stock</span>
                  </li>
                </ul>
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

<div class="modal fade" id="logPartModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Log Part Usage</h5>
      <button class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <form class="row g-3">
        <div class="col-6"><label class="form-label">Part</label>
          <input type="text" class="form-control" placeholder="Enter part name"></div>
        <div class="col-3"><label class="form-label">Qty</label>
          <input type="number" class="form-control" value="1"></div>
        <div class="col-3"><label class="form-label">Cost</label>
          <input type="text" class="form-control" placeholder="₱"></div>
        <div class="col-12"><label class="form-label">Related Job ID</label>
          <input type="text" class="form-control" placeholder="Enter job ID"></div>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-primary">Save</button>
    </div>
  </div></div>
</div>

<script>function openLogPartModal(){ new bootstrap.Modal('#logPartModal').show(); }</script>
</body>
</html>
