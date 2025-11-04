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
                    <h3 class="mb-0"><i class="bi bi-shield-lock-fill me-2 text-primary"></i>Audit Logs</h3>
                    <p class="text-muted">Monitor system activities and actions from drivers, passengers, and administrators.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Summary Cards -->
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <div class="card shadow-sm border-primary">
                                <div class="card-body text-center">
                                    <i class="bi bi-person-check display-5 text-primary mb-2"></i>
                                    <h6 class="text-muted mb-0">Total Driver Actions</h6>
                                    <h4 class="fw-bold text-primary mb-0">124</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm border-success">
                                <div class="card-body text-center">
                                    <i class="bi bi-people-fill display-5 text-success mb-2"></i>
                                    <h6 class="text-muted mb-0">Passenger Actions</h6>
                                    <h4 class="fw-bold text-success mb-0">98</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow-sm border-warning">
                                <div class="card-body text-center">
                                    <i class="bi bi-person-gear display-5 text-warning mb-2"></i>
                                    <h6 class="text-muted mb-0">Admin Updates</h6>
                                    <h4 class="fw-bold text-warning mb-0">45</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Audit Log Table -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-journal-text me-2"></i><strong>Activity Logs</strong></span>
                            <button class="btn btn-light btn-sm"><i class="bi bi-funnel"></i> Filter Logs</button>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>User</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                        <th>Details</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 4, 2025 - 07:45 AM</td>
                                        <td>Juan Dela Cruz</td>
                                        <td><span class="badge bg-success">Driver</span></td>
                                        <td>Started Trip</td>
                                        <td>Trip #TAXI-102 from Makati to Pasay</td>
                                        <td><span class="badge bg-primary">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 4, 2025 - 07:50 AM</td>
                                        <td>Maria Santos</td>
                                        <td><span class="badge bg-info">Passenger</span></td>
                                        <td>Booked Ride</td>
                                        <td>Pickup: BGC | Destination: NAIA T3</td>
                                        <td><span class="badge bg-primary">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 4, 2025 - 08:05 AM</td>
                                        <td>System</td>
                                        <td><span class="badge bg-secondary">System</span></td>
                                        <td>Auto Update</td>
                                        <td>Ride #102 marked as “Ongoing”</td>
                                        <td><span class="badge bg-success">Processed</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 3, 2025 - 05:30 PM</td>
                                        <td>Admin</td>
                                        <td><span class="badge bg-warning text-dark">Admin</span></td>
                                        <td>Updated Fare Policy</td>
                                        <td>Base fare adjusted from ₱45 → ₱50</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 3, 2025 - 03:12 PM</td>
                                        <td>Pedro Cruz</td>
                                        <td><span class="badge bg-success">Driver</span></td>
                                        <td>Canceled Ride</td>
                                        <td>Trip #TAXI-88 canceled due to traffic delay</td>
                                        <td><span class="badge bg-danger">Canceled</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2025 - 01:45 PM</td>
                                        <td>Maria Santos</td>
                                        <td><span class="badge bg-info">Passenger</span></td>
                                        <td>Rated Driver</td>
                                        <td>Trip #TAXI-75 rated 5⭐</td>
                                        <td><span class="badge bg-success">Recorded</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2025 - 11:30 AM</td>
                                        <td>System</td>
                                        <td><span class="badge bg-secondary">System</span></td>
                                        <td>Battery Warning</td>
                                        <td>Vehicle TAXI-101 battery at 18%</td>
                                        <td><span class="badge bg-warning text-dark">Alert</span></td>
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

</body>

</html>