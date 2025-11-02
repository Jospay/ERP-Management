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
                    <h3 class="mb-0">Payments</h3>
                    <p class="text-muted">View your transactions, wallet balance, and payment methods.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Wallet Summary -->
                    <div class="card shadow-sm border-primary mb-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-1"><i class="bi bi-wallet2 me-2"></i> Wallet Balance</h5>
                                <h3 class="fw-bold text-primary mb-0">₱1,250.00</h3>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary me-2"><i class="bi bi-plus-circle"></i> Add Funds</button>
                                <button class="btn btn-outline-secondary"><i class="bi bi-clock-history"></i> Transaction History</button>
                            </div>
                        </div>
                    </div>

                    <!-- Saved Payment Methods -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-credit-card-2-front me-2"></i> Saved Payment Methods</span>
                            <button class="btn btn-light btn-sm"><i class="bi bi-plus-lg"></i> Add Method</button>
                        </div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="card border-light shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1"><i class="bi bi-credit-card text-primary"></i> Visa •••• 1245</h6>
                                                <small class="text-muted">Expires 09/27</small>
                                            </div>
                                            <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-light shadow-sm">
                                        <div class="card-body d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="mb-1"><i class="bi bi-wallet-fill text-success"></i> GCash</h6>
                                                <small class="text-muted">Linked: +63 912 345 6789</small>
                                            </div>
                                            <button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Transactions -->
                    <div class="card shadow-sm">
                        <div class="card-header bg-secondary text-white">
                            <i class="bi bi-cash-stack me-2"></i> Recent Transactions
                        </div>
                        <div class="card-body p-0">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Method</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 3, 2025</td>
                                        <td>Ride Payment - NAIA to Makati</td>
                                        <td><i class="bi bi-credit-card text-primary"></i> Visa</td>
                                        <td class="text-danger">-₱320.00</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2025</td>
                                        <td>Wallet Top-Up</td>
                                        <td><i class="bi bi-wallet2 text-success"></i> GCash</td>
                                        <td class="text-success">+₱500.00</td>
                                        <td><span class="badge bg-success">Success</span></td>
                                    </tr>
                                    <tr>
                                        <td>Oct 31, 2025</td>
                                        <td>Ride Refund - Canceled Trip</td>
                                        <td><i class="bi bi-credit-card-2-front text-primary"></i> Visa</td>
                                        <td class="text-success">+₱180.00</td>
                                        <td><span class="badge bg-info">Refunded</span></td>
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