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
        <h3 class="mb-0">Assigned Service Tickets</h3>
        <button class="btn btn-primary" onclick="openNewTicketModal()">
          <i class="bi bi-plus-circle"></i> New Ticket
        </button>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Your Active Tickets</h3>
          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-striped mb-0 align-middle">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Taxi ID</th>
                  <th>Issue</th>
                  <th>Status</th>
                  <th>Last Updated</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>EV-101</td>
                    <td>TAXI-001</td>
                    <td>Battery overheating</td>
                    <td><span class="badge bg-warning">In Progress</span></td>
                    <td>2 hrs ago</td>
                  <td>
                    <button class="btn btn-sm btn-success" onclick="markCompleted(this)">Mark Completed</button>
                    <button class="btn btn-sm btn-secondary" onclick="openNotesModal()">Add Notes</button>
                  </td>
                </tr>
                <tr>
                  <td>EV-102</td>
                    <td>TAXI-002</td>
                    <td>Charging port issue</td>
                    <td><span class="badge bg-danger">Pending</span></td>
                    <td>5 hrs ago</td>
                  <td>
                    <button class="btn btn-sm btn-primary" onclick="markInProgress(this)">Start Job</button>
                    <button class="btn btn-sm btn-secondary" onclick="openNotesModal()">Add Notes</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('../../includes/footer.php'); ?>
</div>
<?php include('../../includes/js.php'); ?>

<!-- Notes & New Ticket Modals -->
<div class="modal fade" id="notesModal" tabindex="-1">
  <div class="modal-dialog"><div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Add Repair Notes</h5>
      <button class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <textarea class="form-control" rows="4" placeholder="Enter notes..."></textarea>
      <label class="form-label mt-2">Upload Images</label>
      <input type="file" class="form-control" multiple>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-primary">Save Notes</button>
    </div>
  </div></div>
</div>

<div class="modal fade" id="newTicketModal" tabindex="-1">
  <div class="modal-dialog modal-lg"><div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title">Create New Service Ticket</h5>
      <button class="btn-close" data-bs-dismiss="modal"></button>
    </div>
    <div class="modal-body">
      <form class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Client</label>
          <input type="text" class="form-control" placeholder="Enter client name">
        </div>
        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>Pending</option><option>In Progress</option><option>Completed</option>
          </select>
        </div>
        <div class="col-12">
          <label class="form-label">Description</label>
          <textarea class="form-control" rows="3" placeholder="Describe the issue..."></textarea>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button class="btn btn-primary">Save Ticket</button>
    </div>
  </div></div>
</div>

<script>
function openNotesModal(){ new bootstrap.Modal('#notesModal').show(); }
function openNewTicketModal(){ new bootstrap.Modal('#newTicketModal').show(); }
function markCompleted(btn){
  const badge = btn.closest('tr').querySelector('.badge');
  badge.className='badge bg-success'; badge.textContent='Completed';
  btn.remove();
}
function markInProgress(btn){
  const badge = btn.closest('tr').querySelector('.badge');
  badge.className='badge bg-warning'; badge.textContent='In Progress';
  btn.textContent='Mark Completed'; btn.classList.replace('btn-primary','btn-success');
  btn.onclick=()=>markCompleted(btn);
}
</script>
</body>
</html>
