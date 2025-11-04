<!doctype html>
<html lang="en">

<?php include('../../includes/header.php'); ?>
<style>
  /* Custom CSS for Dashboard Cards */

  /* 1. Ensure Card Content Alignment (Fix for h-100) */
  /* The h-100 and flex utilities ensure the cards are the same height. */
  /* This makes sure the content is correctly spread inside the card body. */
  .card {
    height: 100%;
    /* Important for the h-100 to work reliably */
  }

  .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* Ensures footer link is at the bottom */
  }

  /* 2. Style Adjustments for the Links (Readability) */
  /* Makes the "View details" and "View full report" links stand out and look cleaner. */
  .card-body a {
    padding-top: 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    /* Subtle separator */
    margin-top: 10px;
    display: block;
    /* Takes full width */
    text-align: right;
    font-size: 0.9rem;
    color: white !important;
    /* Forces link color to white for contrast */
  }

  /* 3. Small visual enhancement */
  /* Adds a little transition for a modern, subtle hover effect on the cards. */
  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-3px);
    /* Lifts the card slightly */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2) !important;
    /* Stronger shadow on hover */
  }
</style>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <div class="app-wrapper">

    <?php include('../../includes/navbar.php'); ?>
    <?php include('../../includes/sidebar.php'); ?>

    <main class="app-main" style="background-color: #f0f8ff;">
      <!-- Page Header -->
      <div class="app-content-header">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-sm-6">
              <h3 class="mb-0 fw-bold"><i class="bi bi-speedometer2"></i>Dashboard</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <!-- Page Content -->
      <div class="app-content">
        <div class="container-fluid">

          <!-- TOP METRICS -->
          <div class="row g-3">
            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-primary shadow-sm">
                <div class="inner">
                  <h3>150</h3>
                  <p>Active Fleet</p>
                </div>
                <i class="bi bi-truck small-box-icon"></i>
                <a href="fleet.php" class="small-box-footer">View all <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-success shadow-sm">
                <div class="inner">
                  <h3>53</h3>
                  <p>Active Drivers</p>
                </div>
                <i class="bi bi-person-badge small-box-icon"></i>
                <a href="drivers.php" class="small-box-footer">View all <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-warning shadow-sm">
                <div class="inner">
                  <h3>44</h3>
                  <p>Active Franchisees</p>
                </div>
                <i class="bi bi-building small-box-icon"></i>
                <a href="franchise.php" class="small-box-footer">View all <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-danger shadow-sm">
                <div class="inner">
                  <h3>₱65k</h3>
                  <p>Revenue Today</p>
                </div>
                <i class="bi bi-cash-stack small-box-icon"></i>
                <a href="finance.php" class="small-box-footer">View details <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-info shadow-sm">
                <div class="inner">
                  <h3>12</h3>
                  <p>Pending Payments</p>
                </div>
                <i class="bi bi-clock-history small-box-icon"></i>
                <a href="finance.php" class="small-box-footer">View <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-2 col-6">
              <div class="small-box text-bg-warning shadow-sm">
                <div class="inner">
                  <h3>5</h3>
                  <p>System Alerts</p>
                </div>
                <i class="bi bi-exclamation-triangle small-box-icon"></i>
                <a href="maintenance.php" class="small-box-footer">View Alerts <i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <!-- CHART + MAP -->
          <div class="row mt-4">
            <div class="col-lg-6 connectedSortable">
              <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                  <i class="bi bi-bar-chart"></i> Sales & Revenue Trends
                </div>
                <div class="card-body">
                  <div id="revenue-chart" style="height:300px;"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 connectedSortable">
              <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                  <i class="bi bi-geo-alt"></i> Vehicle Tracking Map
                </div>
                <div class="card-body p-0">
                  <div id="mainMap" style="height:300px;width:100%;border-radius:8px;"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- QUICK VIEW -->
          <div class="row mt-4 g-3">
            <!-- System Alerts -->
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow-sm h-100 text-bg-warning bg-gradient">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h5 class="card-title mb-3 d-flex align-items-center">
                      <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                      System Alerts
                    </h5>
                    <div class="small">
                      <p class="mb-2"><i class="bi bi-file-earmark-excel me-1"></i> <strong>2</strong> expiring contracts</p>
                      <p class="mb-3"><i class="bi bi-tools me-1"></i> <strong>3</strong> overdue maintenance</p>
                    </div>
                  </div>
                  <a href="maintenance.php" class="text-white fw-semibold mt-auto text-decoration-underline">
                    View details <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>

            <!-- Quick Analytics -->
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow-sm h-100 text-bg-success bg-gradient">
                <div class="card-body">
                  <h5 class="card-title mb-3 d-flex align-items-center">
                    <i class="bi bi-graph-up-arrow me-2 fs-4"></i>
                    Quick Analytics
                  </h5>
                  <div class="small">
                    <p class="mb-1">Trips Today: <strong>128</strong></p>
                    <p class="mb-1">Passengers: <strong>1,245</strong></p>
                  </div>
                  <canvas id="incomeTrend" height="90"></canvas>
                </div>
              </div>
            </div>

            <!-- EV Operations Summary -->
            <div class="col-lg-4 col-12">
              <div class="card border-0 shadow-sm h-100 text-bg-secondary bg-gradient">
                <div class="card-body d-flex flex-column justify-content-between">
                  <div>
                    <h5 class="card-title mb-3 d-flex align-items-center">
                      <i class="bi bi-battery-charging me-2 fs-4"></i>
                      EV Operations Summary
                    </h5>
                    <ul class="list-unstyled small mb-3">
                      <li><i class="bi bi-clock me-1"></i> Average Trip Duration: <strong>42 mins</strong></li>
                      <li><i class="bi bi-battery-half me-1"></i> Battery Efficiency: <strong>92%</strong></li>
                      <li><i class="bi bi-ev-front me-1"></i> Idle Vehicles: <strong>7</strong></li>
                    </ul>
                  </div>
                  <a href="operations.php" class="text-white fw-semibold mt-auto text-decoration-underline">
                    View full report <i class="bi bi-arrow-right"></i>
                  </a>
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

  <!-- ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    const sales_chart = new ApexCharts(document.querySelector('#revenue-chart'), {
      series: [{
          name: 'Total Revenue (₱)',
          data: [52000, 60000, 65000, 70000, 85000, 90000, 75000]
        },
        {
          name: 'Total Trips',
          data: [95, 110, 120, 130, 140, 150, 125]
        }
      ],
      chart: {
        height: 300,
        type: 'line',
        toolbar: {
          show: false
        }
      },
      colors: ['#198754', '#0dcaf0'],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 3
      },
      xaxis: {
        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        title: {
          text: 'Day of Week'
        }
      },
      yaxis: [{
          title: {
            text: 'Revenue (₱)'
          }
        },
        {
          opposite: true,
          title: {
            text: 'Trips Count'
          }
        }
      ],
      tooltip: {
        shared: true,
        intersect: false
      }
    });
    sales_chart.render();
  </script>


  <!-- Leaflet Map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const map = L.map('mainMap').setView([12.8797, 121.7740], 5); // Philippines
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      const vehicles = [{
          lat: 14.6760,
          lon: 121.0437,
          plate: 'ABC-123',
          city: 'Quezon City'
        },
        {
          lat: 10.3157,
          lon: 123.8854,
          plate: 'XYZ-456',
          city: 'Cebu City'
        },
        {
          lat: 7.1907,
          lon: 125.4553,
          plate: 'DEF-789',
          city: 'Davao City'
        },
        {
          lat: 13.4117,
          lon: 123.4642,
          plate: 'GHI-101',
          city: 'Naga City'
        }
      ];

      vehicles.forEach(v => {
        L.marker([v.lat, v.lon]).addTo(map)
          .bindPopup(`<b>${v.plate}</b><br>${v.city}<br>Status: Active`);
      });
    });
  </script>

  <!-- ChartJS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('incomeTrend').getContext('2d');
    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          data: [65000, 72000, 68000, 80000, 75000, 82000, 90000],
          borderColor: '#fff',
          backgroundColor: 'rgba(255,255,255,0.3)',
          tension: 0.4,
          fill: true
        }]
      },
      options: {
        plugins: {
          legend: {
            display: false
          }
        },
        scales: {
          x: {
            display: false
          },
          y: {
            display: false
          }
        }
      }
    });
  </script>



</body>

</html>