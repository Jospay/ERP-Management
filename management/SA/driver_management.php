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
                    <h3 class="mb-0"><i class="bi bi-person-badge-fill me-2 text-primary"></i>Driver Management</h3>
                    <p class="text-muted">Add new drivers, manage transfers, monitor performance, and track license status.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Action Buttons -->
                    <div class="mb-3 d-flex justify-content-between">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDriverModal">
                            <i class="bi bi-person-plus-fill"></i> Add New Driver
                        </button>
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#transferDriverModal">
                            <i class="bi bi-arrow-left-right"></i> Transfer Driver
                        </button>
                    </div>

                    <!-- Active Drivers Table -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-person-lines-fill me-2"></i>Active Drivers</h5>
                            <span class="badge bg-light text-success">15 Active</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Franchise</th>
                                        <th>License Expiration</th>
                                        <th>Monthly Income (₱)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>DRV-001</td>
                                        <td>Carlos Santos</td>
                                        <td>EcoFleet Transport</td>
                                        <td>Dec 20, 2025</td>
                                        <td>₱25,000</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i class="bi bi-pause-circle"></i> Suspend</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>DRV-002</td>
                                        <td>Mark Reyes</td>
                                        <td>CleanCity Rides</td>
                                        <td>Jan 14, 2026</td>
                                        <td>₱27,500</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"><i class="bi bi-pause-circle"></i> Suspend</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Suspended Drivers Table -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-person-x-fill me-2"></i>Suspended Drivers</h5>
                            <span class="badge bg-light text-danger">2 Suspended</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Franchise</th>
                                        <th>License Expiration</th>
                                        <th>Monthly Income (₱)</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>DRV-010</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>GreenDrive Mobility</td>
                                        <td>Sept 10, 2025</td>
                                        <td>₱0</td>
                                        <td><span class="badge bg-danger">Suspended</span></td>
                                        <td>
                                            <button class="btn btn-success btn-sm"><i class="bi bi-check-circle"></i> Reactivate</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Driver Performance Report -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="bi bi-bar-chart-line me-2"></i>Driver Income Overview</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="driverChart" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('../../includes/footer.php'); ?>
    </div>

    <?php include('../../includes/js.php'); ?>

    <!-- ADD DRIVER MODAL -->
    <div class="modal fade" id="addDriverModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="bi bi-person-plus-fill me-2"></i>Add New Driver</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter full name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Enter contact number">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Franchise</label>
                            <select class="form-select">
                                <option>EcoFleet Transport</option>
                                <option>CleanCity Rides</option>
                                <option>GreenDrive Mobility</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">License Expiration</label>
                            <input type="date" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="bi bi-save"></i> Save Driver</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- TRANSFER DRIVER MODAL -->
    <div class="modal fade" id="transferDriverModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-white">
                    <h5 class="modal-title"><i class="bi bi-arrow-left-right me-2"></i>Transfer Driver</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Select Driver</label>
                            <select class="form-select">
                                <option>Carlos Santos</option>
                                <option>Mark Reyes</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Transfer To Franchise</label>
                            <select class="form-select">
                                <option>EcoFleet Transport</option>
                                <option>CleanCity Rides</option>
                                <option>GreenDrive Mobility</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary"><i class="bi bi-send"></i> Confirm Transfer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- DRIVER INCOME CHART -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('driverChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Carlos Santos', 'Mark Reyes', 'Juan Dela Cruz'],
                datasets: [{
                    label: 'Monthly Income (₱)',
                    data: [25000, 27500, 0],
                    backgroundColor: ['#28a745', '#007bff', '#dc3545']
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
                        text: 'Driver Monthly Income Report',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 5000
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>