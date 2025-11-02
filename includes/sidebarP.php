<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand" style="background-color: #004A70;">
        <a href="index.php" class="brand-link">
            <!-- <img src="../../dist/assets/img/AdminLTELogo.png" alt="ERP" class="brand-image opacity-75 shadow" /> -->
            <span class="brand-text fw-light">Passenger ERP</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper" style="background-color: #004A70;">
        <nav class="mt-2">
            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Main navigation"
                data-accordion="false"
                id="navigation">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard Overview</p>
                    </a>
                </li>

                <!-- Active Trip -->
                <li class="nav-item">
                    <a href="active.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'active.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-truck-front-fill"></i>
                        <p>Active Trip</p>
                    </a>
                </li>

                <!-- My Rides -->
                <li class="nav-item">
                    <a href="rides.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'rides.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-car-front-fill"></i>
                        <p>My Rides</p>
                    </a>
                </li>

                <!-- Payments -->
                <li class="nav-item">
                    <a href="payments.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'payments.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-credit-card-2-front-fill"></i>
                        <p>Payments</p>
                    </a>
                </li>

                <!-- Promotions -->
                <li class="nav-item">
                    <a href="promotions.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'promotions.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-gift-fill"></i>
                        <p>Promotions</p>
                    </a>
                </li>

                <!-- Support -->
                <li class="nav-item">
                    <a href="support.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'support.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-headset"></i>
                        <p>Support</p>
                    </a>
                </li>

                <!-- Notifications -->
                <li class="nav-item">
                    <a href="notifications.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'notifications.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-bell-fill"></i>
                        <p>Notifications</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>