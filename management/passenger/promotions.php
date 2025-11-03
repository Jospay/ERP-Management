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
                    <h3 class="mb-0">Promotions</h3>
                    <p class="text-muted">View and apply promo codes for discounted rides.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Active Promo Section -->
                    <div class="card shadow-sm border-success mb-4">
                        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-gift me-2"></i> Active Promotions</span>
                            <button class="btn btn-light btn-sm"><i class="bi bi-plus-circle"></i> Apply Code</button>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card border-light shadow-sm h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-success"><i class="bi bi-ticket-perforated"></i> RIDE50</h5>
                                            <p class="mb-1">Get ₱50 off your next trip!</p>
                                            <small class="text-muted">Valid until: Nov 15, 2025</small>
                                            <div class="mt-3">
                                                <button class="btn btn-outline-success btn-sm w-100"><i class="bi bi-check-circle"></i> Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-light shadow-sm h-100">
                                        <div class="card-body">
                                            <h5 class="card-title text-success"><i class="bi bi-ticket-perforated"></i> NEWPASS20</h5>
                                            <p class="mb-1">20% off for new passengers (max ₱100).</p>
                                            <small class="text-muted">Valid until: Dec 1, 2025</small>
                                            <div class="mt-3">
                                                <button class="btn btn-outline-success btn-sm w-100"><i class="bi bi-check-circle"></i> Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Input for Manual Promo Code -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white">
                            <i class="bi bi-plus-lg me-2"></i> Enter Promo Code
                        </div>
                        <div class="card-body">
                            <form class="row g-3 align-items-center">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Enter promo code here">
                                </div>
                                <div class="col-md-3 d-grid">
                                    <button class="btn btn-primary"><i class="bi bi-arrow-right-circle"></i> Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Used / Expired Promos -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <i class="bi bi-clock-history me-2"></i> Used & Expired Promotions
                        </div>
                        <div class="card-body p-0">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Promo Code</th>
                                        <th>Description</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Used On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>RIDE100</strong></td>
                                        <td>₱100 off any ride</td>
                                        <td>₱100</td>
                                        <td><span class="badge bg-success">Used</span></td>
                                        <td>Oct 30, 2025</td>
                                    </tr>
                                    <tr>
                                        <td><strong>WEEKEND15</strong></td>
                                        <td>15% off weekend trips</td>
                                        <td>₱75</td>
                                        <td><span class="badge bg-danger">Expired</span></td>
                                        <td>Oct 12, 2025</td>
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