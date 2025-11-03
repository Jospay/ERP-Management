<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand" style="background-color: #004A70;">
        <!--begin::Brand Link-->
        <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <!-- <img
                src="../../dist/assets/img/AdminLTELogo.png"
                alt="ERP"
                class="brand-image opacity-75 shadow" /> -->
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Finance ERP</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
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
                <li class="nav-item">
                    <a href="./index.php" class="nav-link ">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>
                            Dashboard     
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./boundary-contracts.php" class="nav-link">
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>Boundary Contracts</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./revenue-management.php" class="nav-link">
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>Revenue Management</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./expense-management.php" class="nav-link">
                        <i class="nav-icon bi bi-wallet2"></i>
                        <p>Expense Management</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./reports-analytics.php" class="nav-link">
                        <i class="nav-icon bi bi-bar-chart-line"></i>
                        <p>Reports & Analytics</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./support-center.php" class="nav-link">
                        <i class="nav-icon bi bi-headset"></i>
                        <p>Support Center</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./notifications.php" class="nav-link">
                        <i class="nav-icon bi bi-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </nav>

        <!--end::Sidebar Wrapper-->
</aside>

<!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Widgets
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./widgets/small-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Small Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/info-box.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>info Box</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./widgets/cards.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Cards</p>
                            </a>
                        </li>
                    </ul>
                </li> -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const currentPath = window.location.pathname; 
    const links = document.querySelectorAll("#navigation .nav-link");

    links.forEach(link => {
        const href = link.getAttribute("href");
        if (href && currentPath.endsWith(href.split("/").pop())) {
            link.classList.add("active");
        }
    });
});
</script>
