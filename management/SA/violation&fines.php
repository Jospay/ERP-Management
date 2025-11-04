<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <!-- Header -->
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0">
                        <i class="bi bi-exclamation-triangle-fill text-danger me-2"></i>Violations & Fines
                    </h3>
                    <p class="text-muted">View all driver violations and manage fine payments or appeals.</p>
                </div>
            </div>

            <!-- Content -->
            <div class="app-content">
                <div class="container-fluid">

                    <!-- Summary Cards -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-3">
                            <div class="card border-danger shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Total Violations</h6>
                                    <h3 class="fw-bold text-danger">134</h3>
                                    <small><i class="bi bi-arrow-up text-danger"></i> +12% this month</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-warning shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Pending Fines</h6>
                                    <h3 class="fw-bold text-warning">48</h3>
                                    <small><i class="bi bi-clock text-warning"></i> Awaiting payment</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-success shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Paid Fines</h6>
                                    <h3 class="fw-bold text-success">86</h3>
                                    <small><i class="bi bi-check-circle text-success"></i> Cleared payments</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card border-info shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Appeals</h6>
                                    <h3 class="fw-bold text-info">5</h3>
                                    <small><i class="bi bi-chat-left-text text-info"></i> Under review</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Violations Table -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">
                                <i class="bi bi-journal-text me-2 text-danger"></i>Violation Records
                            </h5>
                            <div class="input-group input-group-sm" style="width: 280px;">
                                <input type="text" class="form-control" placeholder="Search by Driver or Plate No.">
                                <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                            </div>
                        </div>

                        <div class="card-body p-0 table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Violation ID</th>
                                        <th>Driver</th>
                                        <th>Vehicle</th>
                                        <th>Violation Type</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Fine</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#V-1025</td>
                                        <td>John Dela Cruz</td>
                                        <td>TAXI-201</td>
                                        <td>Speeding</td>
                                        <td>EDSA - Makati</td>
                                        <td>Nov 2, 2025</td>
                                        <td>₱1,000</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#approveModal">
                                                <i class="bi bi-check-circle"></i> Approve Payment
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#V-1026</td>
                                        <td>Maria Santos</td>
                                        <td>TAXI-310</td>
                                        <td>No Parking Zone</td>
                                        <td>BGC, Taguig</td>
                                        <td>Nov 1, 2025</td>
                                        <td>₱500</td>
                                        <td><span class="badge bg-success">Paid</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-secondary" disabled>
                                                <i class="bi bi-check2-circle"></i> Cleared
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#V-1027</td>
                                        <td>Alex Ramos</td>
                                        <td>TAXI-145</td>
                                        <td>Reckless Driving</td>
                                        <td>Ortigas Ave</td>
                                        <td>Oct 31, 2025</td>
                                        <td>₱1,500</td>
                                        <td><span class="badge bg-info text-dark">Appeal</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#appealModal">
                                                <i class="bi bi-eye"></i> Review Appeal
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

        <!-- Approve Fine Modal -->
        <div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="modal-header bg-success text-white">
                            <h5 class="modal-title" id="approveModalLabel"><i class="bi bi-cash-coin me-2"></i>Approve Fine Payment</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to approve this fine payment?</p>
                            <ul class="list-group mb-3">
                                <li class="list-group-item"><strong>Violation ID:</strong> #V-1025</li>
                                <li class="list-group-item"><strong>Driver:</strong> John Dela Cruz</li>
                                <li class="list-group-item"><strong>Amount:</strong> ₱1,000</li>
                            </ul>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="confirmApprove" required>
                                <label class="form-check-label" for="confirmApprove">
                                    I confirm that payment has been verified.
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2-circle"></i> Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Appeal Modal -->
        <div class="modal fade" id="appealModal" tabindex="-1" aria-labelledby="appealModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <form>
                        <div class="modal-header bg-info text-white">
                            <h5 class="modal-title" id="appealModalLabel"><i class="bi bi-chat-left-text me-2"></i>Review Appeal</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Driver Appeal Message:</h6>
                            <p class="border rounded p-2 bg-light">“I was wrongly tagged for speeding. The vehicle was parked while the system detected movement.”</p>

                            <div class="mb-3">
                                <label class="form-label">Admin Decision</label>
                                <select class="form-select" required>
                                    <option value="">-- Select Action --</option>
                                    <option value="approve">Approve Appeal (Cancel Fine)</option>
                                    <option value="reject">Reject Appeal (Maintain Fine)</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Remarks</label>
                                <textarea class="form-control" rows="3" placeholder="Enter your remarks..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"><i class="bi bi-send-check"></i> Submit Decision</button>
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