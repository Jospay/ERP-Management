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
                    <h3 class="mb-0">Active Trip</h3>
                    <p class="text-muted">Track your ongoing ride and view driver details in real-time.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Trip Info Card -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <strong>Trip Details</strong>
                        </div>
                        <div class="card-body row g-3 align-items-center">
                            <div class="col-md-6">
                                <p class="mb-1"><strong>Trip ID:</strong> TRP-2048</p>
                                <p class="mb-1"><strong>Status:</strong> <span class="badge bg-success">En Route</span></p>
                                <p class="mb-1"><strong>Pickup:</strong> 123 Ayala Ave, Makati City</p>
                                <p class="mb-1"><strong>Destination:</strong> NAIA Terminal 3, Pasay City</p>
                                <p class="mb-1"><strong>Fare Estimate:</strong> ₱320.00</p>
                            </div>
                            <div class="col-md-6 text-center">
                                <i class="bi bi-geo-alt-fill text-danger fs-1"></i>
                                <p class="mt-2 mb-0 text-muted">Estimated Arrival: <strong>12 mins</strong></p>
                            </div>
                        </div>
                    </div>

                    <!-- Driver Info Card -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-info text-white">
                            <strong>Driver & Vehicle Information</strong>
                        </div>
                        <div class="card-body d-flex align-items-center">
                            <div class="rounded-circle me-3 border border-3 border-info d-flex justify-content-center align-items-center"
                                style="height: 80px; width: 80px;">
                                <h1 class="m-0">D</h1>
                            </div>

                            <div>
                                <p class="mb-1"><strong>Driver:</strong> John Dela Cruz</p>
                                <p class="mb-1"><strong>Vehicle:</strong> Toyota Vios (TAXI-102)</p>
                                <p class="mb-1"><strong>Plate No:</strong> ABC-3456</p>
                                <p class="mb-0"><strong>Rating:</strong> ⭐ 4.8 / 5</p>
                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-telephone"></i> Call Driver</button>
                            </div>
                        </div>
                    </div>

                    <!-- GPS Tracking (Map Placeholder) -->
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header bg-success text-white">
                            <strong>Live GPS Tracking</strong>
                        </div>
                        <div class="card-body text-center p-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.986083969858!2d121.01579657488592!3d14.554729885938926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90a2b9ef57b%3A0x9a1d417e3b4b12d!2sAyala%20Avenue%2C%20Makati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1697272727272!5m2!1sen!2sph"
                                width="100%"
                                height="300"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <!-- Trip Controls -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-white">
                            <strong>Trip Controls</strong>
                        </div>
                        <div class="card-body d-flex flex-wrap justify-content-between">
                            <button class="btn btn-danger mb-2"><i class="bi bi-x-circle"></i> Cancel Trip</button>
                            <button class="btn btn-primary mb-2"><i class="bi bi-chat-dots"></i> Contact Support</button>
                            <button class="btn btn-success mb-2"><i class="bi bi-star"></i> Rate Driver</button>
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