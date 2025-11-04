<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>
        <main class="app-main" style="background-color: #f0f8ff;">
            <!-- Page Header -->
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0">
                        <i class="bi bi-life-preserver me-2 text-primary"></i>Support Center
                    </h3>
                    <p class="text-muted">View and manage all support tickets (Technical, Driver, Finance).</p>
                </div>
            </div>

            <!-- Page Content -->
            <div class="app-content">
                <div class="container-fluid">
                    <div class="card shadow-sm">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">
                                <i class="bi bi-ticket-detailed me-1 text-secondary"></i> All Tickets
                            </h5>
                            <div class="input-group input-group-sm" style="width: 280px;">
                                <input type="text" class="form-control" placeholder="Search Ticket ID or Subject">
                                <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                            </div>
                        </div>

                        <div class="card-body table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Category</th>
                                        <th>Subject</th>
                                        <th>Submitted By</th>
                                        <th>Status</th>
                                        <th>Priority</th>
                                        <th>Date</th>
                                        <th>Assigned To</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#T-2025-101</td>
                                        <td><span class="badge bg-primary">Technical</span></td>
                                        <td>Vehicle not syncing</td>
                                        <td>Driver A</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>Nov 3, 2025</td>
                                        <td>—</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#assignModal">
                                                <i class="bi bi-arrow-right-circle"></i> Assign
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#T-2025-102</td>
                                        <td><span class="badge bg-info">Finance</span></td>
                                        <td>Boundary payment dispute</td>
                                        <td>Franchise B</td>
                                        <td><span class="badge bg-success">Resolved</span></td>
                                        <td><span class="badge bg-secondary">Low</span></td>
                                        <td>Nov 2, 2025</td>
                                        <td>Finance Team</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-secondary disabled">
                                                <i class="bi bi-check-circle"></i> Closed
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#T-2025-103</td>
                                        <td><span class="badge bg-warning text-dark">Driver</span></td>
                                        <td>Driver login issue</td>
                                        <td>Driver C</td>
                                        <td><span class="badge bg-info text-dark">In Progress</span></td>
                                        <td><span class="badge bg-light text-dark">Medium</span></td>
                                        <td>Nov 1, 2025</td>
                                        <td>Support Team</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#assignModal">
                                                <i class="bi bi-pencil-square"></i> Reassign
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Assign Modal -->
        <div class="modal fade" id="assignModal" tabindex="-1" aria-labelledby="assignModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="modal-header bg-light">
                            <h5 class="modal-title" id="assignModalLabel"><i class="bi bi-person-gear me-1"></i> Assign Ticket</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Ticket ID</label>
                                <input type="text" class="form-control" placeholder="#T-2025-101" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Assign to Team</label>
                                <select class="form-select" required>
                                    <option value="">-- Select Team --</option>
                                    <option value="technical">Technical Support</option>
                                    <option value="driver">Driver Management</option>
                                    <option value="finance">Finance Department</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea class="form-control" rows="3" placeholder="Additional details..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <?php include('../../includes/footer.php'); ?>

    </div>

    <?php include('../../includes/js.php'); ?>

</body>

</html>