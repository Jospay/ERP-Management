<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand" style="background-color: #005dcf;">
        <a href="index.php" class="brand-link">
            <!-- <img src="../../dist/assets/img/AdminLTELogo.png" alt="ERP" class="brand-image opacity-75 shadow" /> -->
            <span class="brand-text fw-light">Technician ERP</span>
        </a>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper" style="background-color: #005dcf;">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
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

                <!-- Tickets / Jobs -->
                <li class="nav-item">
                    <a href="tickets.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'tickets.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-wrench-adjustable"></i>
                        <p>Tickets / Jobs</p>
                    </a>
                </li>

                <!-- Parts Used -->
                <li class="nav-item">
                    <a href="parts.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'parts.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-gear-wide-connected"></i>
                        <p>Parts Used</p>
                    </a>
                </li>

                <!-- Maintenance Reports -->
                <li class="nav-item">
                    <a href="reports.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'reports.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-clipboard-data"></i>
                        <p>Maintenance Reports</p>
                    </a>
                </li>

                <!-- Support Center -->
                <li class="nav-item">
                    <a href="support.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'support.php' ? 'active' : ''; ?>">
                        <i class="nav-icon bi bi-life-preserver"></i>
                        <p>Support Center</p>
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
