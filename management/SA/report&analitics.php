<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <!-- Header -->
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0">
                        <i class="bi bi-graph-up-arrow text-primary me-2"></i>Report Analytics
                    </h3>
                    <p class="text-muted">Generate and view global performance, finance, and trip reports.</p>
                </div>
            </div>

            <!-- Content -->
            <div class="app-content">
                <div class="container-fluid">

                    <!-- Summary Cards -->
                    <div class="row g-3 mb-4">
                        <div class="col-md-3">
                            <div class="card shadow-sm border-primary">
                                <div class="card-body">
                                    <h6 class="text-muted">Total Trips</h6>
                                    <h3 class="fw-bold text-primary">12,458</h3>
                                    <small><i class="bi bi-arrow-up text-success"></i> +8% from last month</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card shadow-sm border-success">
                                <div class="card-body">
                                    <h6 class="text-muted">Total Revenue</h6>
                                    <h3 class="fw-bold text-success">₱1,245,300</h3>
                                    <small><i class="bi bi-arrow-up text-success"></i> +5% from last week</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card shadow-sm border-warning">
                                <div class="card-body">
                                    <h6 class="text-muted">Active Vehicles</h6>
                                    <h3 class="fw-bold text-warning">320</h3>
                                    <small><i class="bi bi-car-front text-warning"></i> 10 under maintenance</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card shadow-sm border-danger">
                                <div class="card-body">
                                    <h6 class="text-muted">Reported Issues</h6>
                                    <h3 class="fw-bold text-danger">42</h3>
                                    <small><i class="bi bi-wrench-adjustable-circle text-danger"></i> 5 critical</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Report Filters -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">
                                <i class="bi bi-funnel me-1 text-primary"></i>Generate Report
                            </h5>
                        </div>
                        <div class="card-body">
                            <form class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label">Report Type</label>
                                    <select class="form-select">
                                        <option value="performance">Performance Report</option>
                                        <option value="finance">Finance Report</option>
                                        <option value="trips">Trip Report</option>
                                    </select>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Date Range</label>
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">To</label>
                                    <input type="date" class="form-control">
                                </div>

                                <div class="col-md-3 d-flex align-items-end">
                                    <button class="btn btn-primary w-100">
                                        <i class="bi bi-file-earmark-bar-graph"></i> Generate
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Charts / Analytics -->
                    <div class="row g-4">
                        <!-- Performance Chart -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <i class="bi bi-speedometer2 me-2"></i>Performance Overview
                                </div>
                                <div class="card-body">
                                    <canvas id="performanceChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>

                        <!-- Finance Chart -->
                        <div class="col-lg-6">
                            <div class="card shadow-sm">
                                <div class="card-header bg-success text-white">
                                    <i class="bi bi-cash-coin me-2"></i>Revenue Trend
                                </div>
                                <div class="card-body">
                                    <canvas id="financeChart" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trip Table -->
                    <div class="card shadow-sm mt-4">
                        <div class="card-header bg-info text-white">
                            <i class="bi bi-geo-alt me-2"></i>Recent Trips Summary
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Vehicle</th>
                                        <th>Driver</th>
                                        <th>Route</th>
                                        <th>Fare</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 3, 2025</td>
                                        <td>TAXI-102</td>
                                        <td>John Dela Cruz</td>
                                        <td>Makati → Pasay</td>
                                        <td>₱320</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 3, 2025</td>
                                        <td>TAXI-109</td>
                                        <td>Maria Santos</td>
                                        <td>Taguig → Ortigas</td>
                                        <td>₱280</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2025</td>
                                        <td>TAXI-201</td>
                                        <td>Alex Ramos</td>
                                        <td>QC → Makati</td>
                                        <td>₱350</td>
                                        <td><span class="badge bg-danger">Canceled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- Chart.js -->




        <?php include('../../includes/footer.php'); ?>

    </div>

    <?php include('../../includes/js.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const performanceCtx = document.getElementById('performanceChart').getContext('2d');
        new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Trips Completed',
                    data: [1200, 1450, 1300, 1500, 1600, 1800, 1700],
                    borderColor: '#0d6efd',
                    fill: false,
                    tension: 0.3
                }]
            }
        });

        const financeCtx = document.getElementById('financeChart').getContext('2d');
        new Chart(financeCtx, {
            type: 'bar',
            data: {
                labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                datasets: [{
                    label: 'Revenue (₱)',
                    data: [280000, 310000, 290000, 365000],
                    backgroundColor: '#198754'
                }]
            }
        });
    </script>
</body>

</html>