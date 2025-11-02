<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <div class="app-wrapper">
    <?php include('../../includes/navbar.php'); ?>
    <?php include('../../includes/sidebarT.php'); ?>

    <main class="app-main" style="background-color: #f0f8ff;">
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Welcome back!</h3>
              <p class="text-muted">Here are your current EV taxi service assignments.</p>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="app-content">
        <div class="container-fluid">
          
          <!--================= DASHBOARD BOXES =================-->
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-primary">
                <div class="inner">
                  <h3>12</h3>
                  <p>Active Service Tickets</p>
                </div>
                <i class="bi bi-wrench small-box-icon"></i>
                <a href="tickets.php" class="small-box-footer link-light">More info <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-warning">
                <div class="inner">
                  <h3>5</h3>
                  <p>Pending Requests</p>
                </div>
                <i class="bi bi-hourglass-split small-box-icon"></i>
                <a href="tickets.php" class="small-box-footer link-dark">More info <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-success">
                <div class="inner">
                  <h3>8</h3>
                  <p>Completed Jobs This Week</p>
                </div>
                <i class="bi bi-check2-circle small-box-icon"></i>
                <a href="reports.php" class="small-box-footer link-light">View reports <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box text-bg-info">
                <div class="inner">
                  <h3>OK</h3>
                  <p>Parts Inventory Status</p>
                </div>
                <i class="bi bi-gear-wide-connected small-box-icon"></i>
                <a href="parts.php" class="small-box-footer link-light">Check Inventory <i class="bi bi-arrow-right-circle"></i></a>
              </div>
            </div>
          </div>

          <!--================= CHARTS & MAP =================-->
          <div class="row">
            <div class="col-lg-6 connectedSortable">
              <div class="card mb-4">
                <div class="card-header">
                  <h3 class="card-title">Maintenance Activity Chart</h3>
                </div>
                <div class="card-body">
                  <div id="maintenance-chart"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 connectedSortable">
              <div class="card mb-4">
                <div class="card-header">
                  <h3 class="card-title">Service Locations</h3>
                </div>
                <div class="card-body">
                  <div id="service-map" style="height: 300px; border-radius: 8px;"></div>
                </div>
              </div>
            </div>
          </div>

          <!--================= JOBS TABLE =================-->
          <div class="card mt-4">
            <div class="card-header bg-primary text-white">
              <h3 class="card-title mb-0">Ongoing Maintenance Jobs</h3>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped mb-0">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Taxi Unit</th>
                    <th>Status</th>
                    <th>Scheduled Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>001</td>
                    <td>EV Taxi A-101</td>
                    <td><span class="badge bg-warning">In Progress</span></td>
                    <td>2025-11-06</td>
                    <td><a href="tickets.php?id=1" class="btn btn-sm btn-outline-primary">View</a></td>
                  </tr>
                  <tr>
                    <td>002</td>
                    <td>EV Taxi B-203</td>
                    <td><span class="badge bg-success">Completed</span></td>
                    <td>2025-11-02</td>
                    <td><a href="tickets.php?id=2" class="btn btn-sm btn-outline-secondary">View</a></td>
                  </tr>
                  <tr>
                    <td>003</td>
                    <td>EV Taxi C-310</td>
                    <td><span class="badge bg-danger">Pending</span></td>
                    <td>2025-11-08</td>
                    <td><a href="tickets.php?id=3" class="btn btn-sm btn-outline-danger">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!--================= CALENDAR VIEW =================-->
          <div class="card mt-4">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
              <h3 class="card-title mb-0">Scheduled Services Calendar</h3>
              <button class="btn btn-light btn-sm" onclick="openNewSchedule()">+ Add Schedule</button>
            </div>
            <div class="card-body">
              <div id="calendar" style="max-width: 100%;"></div>
            </div>
          </div>

        </div>
      </div>
    </main>

    <?php include('../../includes/footer.php'); ?>
  </div>

  <?php include('../../includes/js.php'); ?>

  <!-- ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1"></script>

  <!-- Leaflet -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <!-- FullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

  <script>
    // === MAINTENANCE ACTIVITY CHART ===
    const maintenanceData = {
      series: [{ name: 'Jobs Completed', data: [3, 6, 4, 8, 5, 7, 9] }],
      chart: { type: 'area', height: 300, toolbar: { show: false } },
      colors: ['#0d6efd'],
      stroke: { curve: 'smooth' },
      xaxis: { categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'] }
    };
    new ApexCharts(document.querySelector("#maintenance-chart"), maintenanceData).render();

    // === SERVICE MAP ===
    const map = L.map('service-map').setView([14.5995, 120.9842], 5);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    [
      { name: "Manila Depot", coords: [14.5995, 120.9842] },
      { name: "Cebu Depot", coords: [10.3157, 123.8854] },
      { name: "Davao Depot", coords: [7.1907, 125.4553] },
    ].forEach(loc => L.marker(loc.coords).addTo(map).bindPopup(`<b>${loc.name}</b>`));

    // === FULLCALENDAR ===
    document.addEventListener('DOMContentLoaded', () => {
      const calendarEl = document.getElementById('calendar');
      const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 500,
        events: [
          { title: 'Battery Check - Taxi A-101', start: '2025-11-06', color: '#ffc107' },
          { title: 'Brake Service - Taxi B-203', start: '2025-11-08', color: '#dc3545' },
          { title: 'Software Update - Taxi C-310', start: '2025-11-10', color: '#0d6efd' },
          { title: 'Charging Port Cleaning - Taxi D-415', start: '2025-11-12', color: '#198754' },
        ]
      });
      calendar.render();
    });

    // === ADD SCHEDULE BUTTON ===
    function openNewSchedule() {
      alert('New Schedule creation modal will appear here.');
    }
  </script>
</body>
</html>
