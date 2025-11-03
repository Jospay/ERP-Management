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
                    <h3 class="mb-0">Passenger Support Center</h3>
                    <p class="text-muted">Report ride issues, submit feedback, or contact support for assistance.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="row g-4">

                        <!-- Report Ride Issue -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-danger text-white">Report Ride Issue</div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Trip ID (optional)</label>
                                            <input type="text" class="form-control" placeholder="Enter your trip ID or leave blank">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Issue Type</label>
                                            <select class="form-select">
                                                <option>Driver Behavior</option>
                                                <option>Vehicle Condition</option>
                                                <option>Fare/Payment Issue</option>
                                                <option>Lost Item</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Describe the Issue</label>
                                            <textarea class="form-control" rows="5" placeholder="Provide details about what happened..."></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-danger w-100">Submit Report</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Send Feedback -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header bg-primary text-white">Send Feedback</div>
                                <div class="card-body">
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label class="form-label">Feedback Category</label>
                                            <select class="form-select">
                                                <option>App Experience</option>
                                                <option>Booking Process</option>
                                                <option>Customer Support</option>
                                                <option>Driver Feedback</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Your Feedback</label>
                                            <textarea class="form-control" rows="5" placeholder="Share your thoughts or suggestions..."></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100">Send Feedback</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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