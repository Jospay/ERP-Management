<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>

        <main class="app-main" style="background-color: #f0f8ff;">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0"><i class="bi bi-cash-stack me-2 text-success"></i>Finance / Revenue</h3>
                    <p class="text-muted">View total revenue, manage expenses, and export financial reports.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Filters -->
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-3">
                                    <label for="filterPeriod" class="form-label">Filter by Period</label>
                                    <select class="form-select" id="filterPeriod">
                                        <option>Daily</option>
                                        <option>Weekly</option>
                                        <option>Monthly</option>
                                        <option>Yearly</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="filterBranch" class="form-label">Branch / Franchise</label>
                                    <select class="form-select" id="filterBranch">
                                        <option>All Branches</option>
                                        <option>Main Branch</option>
                                        <option>Franchise 1</option>
                                        <option>Franchise 2</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary w-100"><i class="bi bi-funnel"></i> Apply Filter</button>
                                </div>
                                <div class="col-md-3 text-end">
                                    <button class="btn btn-success w-100"><i class="bi bi-file-earmark-excel"></i> Export Report</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Summary Cards -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Total Revenue</h6>
                                    <h3 class="text-success fw-bold">₱ 254,300</h3>
                                    <p class="text-secondary mb-0">This Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Total Expenses</h6>
                                    <h3 class="text-danger fw-bold">₱ 73,200</h3>
                                    <p class="text-secondary mb-0">This Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <h6 class="text-muted">Net Income</h6>
                                    <h3 class="text-primary fw-bold">₱ 181,100</h3>
                                    <p class="text-secondary mb-0">This Month</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Section -->
                    <div class="card mt-4 shadow-sm">
                        <div class="card-header bg-light d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0"><i class="bi bi-graph-up-arrow me-2"></i>Revenue vs Expenses Chart</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="financeChart" height="100"></canvas>
                        </div>
                    </div>

                    <!-- Revenue Table -->
                    <div class="card mt-4 shadow-sm">
                        <div class="card-header bg-light">
                            <h5 class="card-title mb-0"><i class="bi bi-table me-2"></i>Revenue & Expense Summary</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Branch</th>
                                        <th>Amount (₱)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2025-11-04</td>
                                        <td><span class="badge bg-success">Revenue</span></td>
                                        <td>Trip Earnings</td>
                                        <td>Main Branch</td>
                                        <td>₱ 8,500</td>
                                    </tr>
                                    <tr>
                                        <td>2025-11-03</td>
                                        <td><span class="badge bg-danger">Expense</span></td>
                                        <td>Vehicle Maintenance</td>
                                        <td>Franchise 1</td>
                                        <td>₱ 3,000</td>
                                    </tr>
                                    <tr>
                                        <td>2025-11-02</td>
                                        <td><span class="badge bg-success">Revenue</span></td>
                                        <td>Boundary Dues</td>
                                        <td>Franchise 2</td>
                                        <td>₱ 5,200</td>
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
    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('financeChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Nov 1', 'Nov 2', 'Nov 3', 'Nov 4', 'Nov 5', 'Nov 6', 'Nov 7'],
                datasets: [{
                        label: 'Revenue (₱)',
                        data: [8000, 10500, 9200, 8700, 12000, 9400, 11500],
                        borderColor: '#28a745',
                        backgroundColor: 'rgba(40,167,69,0.2)',
                        tension: 0.3,
                        fill: true
                    },
                    {
                        label: 'Expenses (₱)',
                        data: [2500, 3200, 2800, 3500, 4000, 3700, 3900],
                        borderColor: '#dc3545',
                        backgroundColor: 'rgba(220,53,69,0.2)',
                        tension: 0.3,
                        fill: true
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: 'Revenue vs Expenses (₱)',
                        font: {
                            size: 16
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>