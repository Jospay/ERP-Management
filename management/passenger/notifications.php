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
                    <h3 class="mb-0">Passenger Notifications</h3>
                    <p class="text-muted">Stay informed about your rides, updates, and promotions.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">
                    <div class="list-group shadow-sm">

                        <!-- Ride reminder -->
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-bell text-primary fs-4 me-3"></i>
                            <div>
                                <strong>Ride Reminder:</strong> Your ride with Driver John is scheduled in 10 minutes.
                            </div>
                            <small class="ms-auto text-muted">Just now</small>
                        </a>

                        <!-- Driver arrived -->
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-car-front text-success fs-4 me-3"></i>
                            <div>
                                <strong>Driver Arrived:</strong> Your driver (TAXI-102) has arrived at the pickup point.
                            </div>
                            <small class="ms-auto text-muted">5 mins ago</small>
                        </a>

                        <!-- Promotion -->
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-gift text-warning fs-4 me-3"></i>
                            <div>
                                <strong>Promo Alert:</strong> Get 10% off your next trip with code <b>RIDE10</b>.
                            </div>
                            <small class="ms-auto text-muted">20 mins ago</small>
                        </a>

                        <!-- Payment due -->
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-wallet2 text-danger fs-4 me-3"></i>
                            <div>
                                <strong>Payment Reminder:</strong> Please settle your last trip payment.
                            </div>
                            <small class="ms-auto text-muted">1 hr ago</small>
                        </a>

                        <!-- Support reply -->
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                            <i class="bi bi-chat-dots text-info fs-4 me-3"></i>
                            <div>
                                <strong>Support Update:</strong> Your issue “Payment not reflecting” has been resolved.
                            </div>
                            <small class="ms-auto text-muted">2 hrs ago</small>
                        </a>

                    </div>
                </div>
            </div>
        </main>

        <?php include('../../includes/footer.php'); ?>

    </div>

    <?php include('../../includes/js.php'); ?>

</body>

</html>