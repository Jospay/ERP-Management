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
                    <h3 class="mb-0"><i class="bi bi-truck-front-fill me-2 text-primary"></i>Fleet Management</h3>
                    <p class="text-muted">View and manage all vehicles, monitor their health, and assign them to drivers or franchises.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Actions -->
                    <div class="mb-3 d-flex justify-content-between">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicleModal">
                            <i class="bi bi-plus-circle-fill"></i> Add Vehicle
                        </button>
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#assignVehicleModal">
                            <i class="bi bi-person-gear"></i> Assign Vehicle
                        </button>
                    </div>

                    <!-- Vehicle Table -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0"><i class="bi bi-car-front-fill me-2"></i>Fleet Overview</h5>
                            <span class="badge bg-light text-primary">Total: 12 Vehicles</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Vehicle ID</th>
                                        <th>Plate No.</th>
                                        <th>Franchise</th>
                                        <th>VIN</th>
                                        <th>Battery (%)</th>
                                        <th>Maintenance</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VH-001</td>
                                        <td>ABC-1234</td>
                                        <td>EcoFleet Transport</td>
                                        <td>1HGCM82633A004352</td>
                                        <td><span class="badge bg-success">95%</span></td>
                                        <td><span class="badge bg-info">Due in 20 days</span></td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editVehicleModal"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VH-002</td>
                                        <td>XYZ-5678</td>
                                        <td>CleanCity Rides</td>
                                        <td>2HGFB2F50FH123456</td>
                                        <td><span class="badge bg-warning">60%</span></td>
                                        <td><span class="badge bg-warning">Due in 5 days</span></td>
                                        <td><span class="badge bg-warning text-dark">Needs Check</span></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editVehicleModal"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VH-003</td>
                                        <td>MNO-2468</td>
                                        <td>GreenDrive Mobility</td>
                                        <td>3N1AB7AP3HY275849</td>
                                        <td><span class="badge bg-danger">25%</span></td>
                                        <td><span class="badge bg-danger">Overdue</span></td>
                                        <td><span class="badge bg-danger">Inactive</span></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editVehicleModal"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Fleet Health Chart -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="mb-0"><i class="bi bi-bar-chart-line me-2"></i>Fleet Battery Health Overview</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="fleetChart" height="100"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <?php include('../../includes/footer.php'); ?>
    </div>

    <?php include('../../includes/js.php'); ?>

    <!-- ADD VEHICLE MODAL -->
    <div class="modal fade" id="addVehicleModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="bi bi-plus-circle-fill me-2"></i>Add Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">Plate Number</label>
                            <input type="text" class="form-control" placeholder="Enter plate number">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">VIN</label>
                            <input type="text" class="form-control" placeholder="Vehicle Identification Number">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Franchise</label>
                            <select class="form-select">
                                <option>EcoFleet Transport</option>
                                <option>CleanCity Rides</option>
                                <option>GreenDrive Mobility</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Battery (%)</label>
                            <input type="number" class="form-control" min="0" max="100" placeholder="e.g., 85">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Maintenance Status</label>
                            <select class="form-select">
                                <option>Good</option>
                                <option>Due Soon</option>
                                <option>Overdue</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary"><i class="bi bi-save"></i> Save Vehicle</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT VEHICLE MODAL -->
    <div class="modal fade" id="editVehicleModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Vehicle Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label">Plate Number</label>
                            <input type="text" class="form-control" value="ABC-1234">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">VIN</label>
                            <input type="text" class="form-control" value="1HGCM82633A004352">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Franchise</label>
                            <select class="form-select">
                                <option>EcoFleet Transport</option>
                                <option>CleanCity Rides</option>
                                <option>GreenDrive Mobility</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Battery (%)</label>
                            <input type="number" class="form-control" value="95">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option>Active</option>
                                <option>Inactive</option>
                                <option>Needs Maintenance</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning"><i class="bi bi-save"></i> Update Vehicle</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ASSIGN VEHICLE MODAL -->
    <div class="modal fade" id="assignVehicleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="bi bi-person-gear me-2"></i>Assign Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Select Vehicle</label>
                            <select class="form-select">
                                <option>ABC-1234</option>
                                <option>XYZ-5678</option>
                                <option>MNO-2468</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Assign To</label>
                            <select class="form-select">
                                <option>Franchisee - EcoFleet</option>
                                <option>Franchisee - GreenDrive</option>
                                <option>Driver - Carlos Santos</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success"><i class="bi bi-check-circle"></i> Assign</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CHART -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('fleetChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['EcoFleet Transport', 'CleanCity Rides', 'GreenDrive Mobility'],
                datasets: [{
                    label: 'Average Battery Level (%)',
                    data: [95, 60, 25],
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545']
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
                        text: 'Fleet Battery Status by Franchise',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    </script>
</body>

</html>