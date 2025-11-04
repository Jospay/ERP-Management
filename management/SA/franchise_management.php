<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0"><i class="bi bi-diagram-3-fill me-2 text-primary"></i>Franchise Management</h3>
                    <p class="text-muted">Approve franchise applications, assign territories, and monitor performance.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Pending Franchise Applications -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-person-check-fill me-2"></i>Pending Franchise Applications</h5>
                            <span class="badge bg-light text-primary">3 Pending</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Application ID</th>
                                        <th>Franchise Name</th>
                                        <th>Owner</th>
                                        <th>Contact</th>
                                        <th>Date Applied</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>APP-1001</td>
                                        <td>EcoFleet Transport</td>
                                        <td>Maria Lopez</td>
                                        <td>09171234567</td>
                                        <td>Nov 1, 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#approveModal" data-id="APP-1001" data-name="EcoFleet Transport"><i class="bi bi-check-circle"></i> Approve</button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="APP-1001" data-name="EcoFleet Transport"><i class="bi bi-x-circle"></i> Reject</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>APP-1002</td>
                                        <td>GreenDrive Mobility</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>09181234567</td>
                                        <td>Nov 2, 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#approveModal" data-id="APP-1002" data-name="GreenDrive Mobility"><i class="bi bi-check-circle"></i> Approve</button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="APP-1002" data-name="GreenDrive Mobility"><i class="bi bi-x-circle"></i> Reject</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>APP-1003</td>
                                        <td>CleanCity Rides</td>
                                        <td>Angela Reyes</td>
                                        <td>09281234567</td>
                                        <td>Nov 3, 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#approveModal" data-id="APP-1003" data-name="CleanCity Rides"><i class="bi bi-check-circle"></i> Approve</button>
                                            <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="APP-1003" data-name="CleanCity Rides"><i class="bi bi-x-circle"></i> Reject</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Territory Assignment -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-geo-alt-fill me-2"></i><strong>Assign Territory / Zones</strong>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Select Franchise</label>
                                    <select class="form-select">
                                        <option>EcoFleet Transport</option>
                                        <option>GreenDrive Mobility</option>
                                        <option>CleanCity Rides</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Assign Zone</label>
                                    <select class="form-select">
                                        <option>North Metro Manila</option>
                                        <option>South Metro Manila</option>
                                        <option>East Metro Manila</option>
                                        <option>West Metro Manila</option>
                                    </select>
                                </div>
                                <div class="col-md-4 d-flex align-items-end">
                                    <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#assignModal"><i class="bi bi-map-fill"></i> Assign Territory</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Franchise Performance Reports -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-bar-chart-line-fill me-2"></i>Franchise Performance Reports</h5>
                            <button class="btn btn-light btn-sm"><i class="bi bi-file-earmark-bar-graph"></i> Export Report</button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Franchise</th>
                                        <th>Assigned Zone</th>
                                        <th>Active Vehicles</th>
                                        <th>Monthly Revenue (₱)</th>
                                        <th>Customer Rating</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EcoFleet Transport</td>
                                        <td>North Metro Manila</td>
                                        <td>24</td>
                                        <td>₱180,500</td>
                                        <td>4.7 ⭐</td>
                                        <td><span class="badge bg-success">Performing</span></td>
                                    </tr>
                                    <tr>
                                        <td>GreenDrive Mobility</td>
                                        <td>East Metro Manila</td>
                                        <td>18</td>
                                        <td>₱130,000</td>
                                        <td>4.4 ⭐</td>
                                        <td><span class="badge bg-warning">Average</span></td>
                                    </tr>
                                    <tr>
                                        <td>CleanCity Rides</td>
                                        <td>South Metro Manila</td>
                                        <td>30</td>
                                        <td>₱210,800</td>
                                        <td>4.9 ⭐</td>
                                        <td><span class="badge bg-success">Excellent</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Performance Chart -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="bi bi-graph-up-arrow me-2"></i>Franchise Revenue Overview</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="franchiseChart" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- APPROVE MODAL -->
        <div class="modal fade" id="approveModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title"><i class="bi bi-check-circle me-2"></i>Approve Franchise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p id="approveText">Are you sure you want to approve this franchise?</p>
                        <textarea class="form-control" placeholder="Remarks (optional)..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-success">Approve</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- REJECT MODAL -->
        <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title"><i class="bi bi-x-circle me-2"></i>Reject Franchise</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p id="rejectText">Are you sure you want to reject this franchise?</p>
                        <textarea class="form-control" placeholder="Reason for rejection..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger">Reject</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ASSIGN MODAL -->
        <div class="modal fade" id="assignModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title"><i class="bi bi-geo-alt me-2"></i>Assign Territory</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Select Zone</label>
                                <select class="form-select">
                                    <option>North Zone</option>
                                    <option>South Zone</option>
                                    <option>East Zone</option>
                                    <option>West Zone</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Assign Officer</label>
                                <input type="text" class="form-control" placeholder="Officer name or ID">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-info text-white">Assign</button>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../../includes/footer.php'); ?>
    </div>

    <?php include('../../includes/js.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('franchiseChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['EcoFleet Transport', 'GreenDrive Mobility', 'CleanCity Rides'],
                datasets: [{
                    label: 'Monthly Revenue (₱)',
                    data: [180500, 130000, 210800],
                    backgroundColor: ['#28a745', '#ffc107', '#007bff'],
                    borderWidth: 1,
                    borderColor: '#ccc'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Monthly Revenue by Franchise (₱)',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 50000
                        }
                    }
                }
            }
        });

        // Get modal data
        const approveModal = document.getElementById('approveModal');
        approveModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const name = button.getAttribute('data-name');
            document.getElementById('approveText').textContent = `Approve application for ${name}?`;
        });

        const rejectModal = document.getElementById('rejectModal');
        rejectModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const name = button.getAttribute('data-name');
            document.getElementById('rejectText').textContent = `Reject application for ${name}?`;
        });
    </script>
</body>

</html>