<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebarP.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0">My Rides</h3>
                    <p class="text-muted">View your completed, ongoing, and upcoming rides.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Active / Upcoming Trip -->
                    <div class="card mb-4 shadow-sm border-success">
                        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-car-front-fill me-2"></i><strong>Ongoing Ride</strong></span>
                            <span class="badge bg-light text-success">En Route</span>
                        </div>
                        <div class="card-body row g-3 align-items-center">
                            <div class="col-md-8">
                                <p class="mb-1"><strong>Pickup:</strong> 123 Ayala Ave, Makati City</p>
                                <p class="mb-1"><strong>Destination:</strong> NAIA Terminal 3, Pasay City</p>
                                <p class="mb-1"><strong>Driver:</strong> John Dela Cruz (TAXI-102)</p>
                                <p class="mb-0"><strong>Fare Estimate:</strong> ₱320.00</p>
                            </div>
                            <div class="col-md-4 text-md-end text-center">
                                <button class="btn btn-outline-primary mb-2 w-100"><i class="bi bi-geo-alt"></i> Track Ride</button>
                                <button class="btn btn-outline-danger w-100"><i class="bi bi-x-circle"></i> Cancel</button>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Trip -->
                    <div class="card mb-4 shadow-sm border-warning">
                        <div class="card-header bg-warning text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-calendar-event-fill me-2"></i><strong>Scheduled Ride</strong></span>
                            <span class="badge bg-light text-warning">Tomorrow 9:00 AM</span>
                        </div>
                        <div class="card-body row g-3 align-items-center">
                            <div class="col-md-8">
                                <p class="mb-1"><strong>Pickup:</strong> Bonifacio Global City, Taguig</p>
                                <p class="mb-1"><strong>Destination:</strong> Robinsons Ermita, Manila</p>
                                <p class="mb-0"><strong>Fare Estimate:</strong> ₱250.00</p>
                            </div>
                            <div class="col-md-4 text-md-end text-center">
                                <button class="btn btn-outline-secondary w-100"><i class="bi bi-clock-history"></i> View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Past Trips -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <i class="bi bi-clock-history me-2"></i><strong>Past Rides</strong>
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Pickup</th>
                                        <th>Destination</th>
                                        <th>Fare</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 2, 2025</td>
                                        <td>SM North EDSA</td>
                                        <td>UP Diliman</td>
                                        <td>₱180</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-receipt"></i> Receipt</button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-star"></i> Rate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oct 31, 2025</td>
                                        <td>Greenbelt 5</td>
                                        <td>Trinoma</td>
                                        <td>₱240</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success"><i class="bi bi-receipt"></i> Receipt</button>
                                            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-star"></i> Rate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oct 28, 2025</td>
                                        <td>Eastwood City</td>
                                        <td>Ortigas Center</td>
                                        <td>₱200</td>
                                        <td><span class="badge bg-danger">Canceled</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-info-circle"></i> Details</button>
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