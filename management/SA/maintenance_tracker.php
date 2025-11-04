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
                    <h3 class="mb-0"><i class="bi bi-tools me-2 text-primary"></i>Maintenance Tracker</h3>
                    <p class="text-muted">View open service requests, assign technicians, and approve completed repairs.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Open Service Requests -->
                    <div class="card shadow-sm mb-4 border-primary">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-wrench-adjustable-circle me-2"></i><strong>Open Service Requests</strong></span>
                            <span class="badge bg-light text-primary">5 Active</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Issue Reported</th>
                                        <th>Reported By</th>
                                        <th>Date Reported</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ECAR-102</td>
                                        <td>Battery performance issue</td>
                                        <td>Driver: Mark Santos</td>
                                        <td>Nov 3, 2025</td>
                                        <td><span class="badge bg-warning text-dark">Pending Assignment</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-person-check"></i> Assign Technician</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-205</td>
                                        <td>Brake system inspection</td>
                                        <td>Driver: Leo Cruz</td>
                                        <td>Nov 2, 2025</td>
                                        <td><span class="badge bg-info text-dark">In Progress</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-check-circle"></i> Mark as Completed</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-310</td>
                                        <td>Air conditioning malfunction</td>
                                        <td>Driver: Sarah Reyes</td>
                                        <td>Nov 1, 2025</td>
                                        <td><span class="badge bg-warning text-dark">Pending Assignment</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-person-check"></i> Assign Technician</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Completed Repairs -->
                    <div class="card shadow-sm border-success">
                        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-check2-circle me-2"></i><strong>Completed Repairs</strong></span>
                            <span class="badge bg-light text-success">Awaiting Approval</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Vehicle</th>
                                        <th>Repair Type</th>
                                        <th>Technician</th>
                                        <th>Date Completed</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ECAR-150</td>
                                        <td>Motor calibration</td>
                                        <td>Technician: Arman Dela Cruz</td>
                                        <td>Nov 1, 2025</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-hand-thumbs-up"></i> Approve</button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-arrow-repeat"></i> Return</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-230</td>
                                        <td>Tire replacement</td>
                                        <td>Technician: Jun Mendoza</td>
                                        <td>Oct 30, 2025</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-hand-thumbs-up"></i> Approve</button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-arrow-repeat"></i> Return</button>
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

</body>

</html>