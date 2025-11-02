<!doctype html>
<html lang="en">
<!--begin::Head-->

<?php include('../../includes/header.php'); ?>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <?php include('../../includes/navbar.php'); ?>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <?php include('../../includes/sidebarFr.php'); ?>
    <!--end::Sidebar-->
    <!--begin::App Main-->
<main class="app-main" style="background-color: #f0f8ff;">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Dashboard</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--end::App Content Header-->

  <!--begin::App Content-->
  <div class="app-content">
    <div class="container-fluid">

      <!-- Welcome Message -->
      <div class="alert alert-info mb-4" role="alert">
        <h5 class="mb-0">👋 Welcome back, <strong>MetroFleet Transport Inc.</strong>!</h5>
        <p class="mb-0">Here’s an overview of your fleet performance today.</p>
      </div>

      <!-- KPI Cards -->
      <div class="row">
        <!-- Active Vehicles -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-success">
            <div class="inner">
              <h3>53<sup class="fs-5">%</sup></h3>
              <p>My Active Vehicles</p>
            </div>
            <i class="bi bi-truck small-box-icon"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-link-45deg"></i></a>
          </div>
        </div>

        <!-- Active Drivers -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>My Active Drivers</p>
            </div>
            <i class="bi bi-person-badge small-box-icon"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-link-45deg"></i></a>
          </div>
        </div>

        <!-- Daily Earnings -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-danger">
            <div class="inner">
              <h3>₱65,000</h3>
              <p>Daily Earnings</p>
            </div>
            <i class="bi bi-cash-stack small-box-icon"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-link-45deg"></i></a>
          </div>
        </div>

        <!-- Pending Boundary Due -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-danger">
            <div class="inner">
              <h3>12</h3>
              <p>Pending Boundary Due</p>
            </div>
            <i class="bi bi-credit-card small-box-icon"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-link-45deg"></i></a>
          </div>
        </div>

        <!-- Vehicles Under Maintenance -->
        <div class="col-lg-3 col-6">
          <div class="small-box text-bg-primary">
            <div class="inner">
              <h3>150</h3>
              <p>Vehicles Under Maintenance</p>
            </div>
            <i class="bi bi-tools small-box-icon"></i>
            <a href="#" class="small-box-footer">More info <i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Summary Graphs -->
      <div class="row">
        <!-- Revenue & Expenses -->
        <div class="col-lg-6 connectedSortable">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Revenue & Expenses (Weekly)</h3>
            </div>
            <div class="card-body">
              <div id="revenue-expenses-chart"></div>
              <p class="mt-3 text-muted small">Sample Data: Revenue ₱450k | Expenses ₱320k</p>
            </div>
          </div>
        </div>

        <!-- Trips Completed -->
        <div class="col-lg-6 connectedSortable">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Trips Completed (Today vs Yesterday)</h3>
            </div>
            <div class="card-body">
              <div id="trips-completed-chart"></div>
              <p class="mt-3 text-muted small">Sample Data: Today 320 trips | Yesterday 295 trips</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Vehicle Utilization -->
      <div class="row">
        <div class="col-lg-6 connectedSortable">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Vehicle Utilization Rate</h3>
            </div>
            <div class="card-body">
              <div id="vehicle-utilization-chart"></div>
              <p class="mt-3 text-muted small">Sample Data: 53% of fleet active today</p>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!--end::App Content-->
</main>

    <!--end::App Main-->
    <!--begin::Footer-->

    <?php include('../../includes/footer.php'); ?>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <?php include('../../includes/js.php'); ?>
  <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>
  <!--end::OverlayScrollbars Configure-->
  <!-- OPTIONAL SCRIPTS -->
  <!-- sortablejs -->
  <script
    src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
    crossorigin="anonymous"></script>
  <!-- sortablejs -->
  <script>
    new Sortable(document.querySelector('.connectedSortable'), {
      group: 'shared',
      handle: '.card-header',
    });

    const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
    cardHeaders.forEach((cardHeader) => {
      cardHeader.style.cursor = 'move';
    });
  </script>
  <!-- apexcharts -->
  <script
    src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
    integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
    crossorigin="anonymous"></script>
  <!-- ChartJS -->
  <script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    const sales_chart_options = {
      series: [{
          name: 'Digital Goods',
          data: [28, 48, 40, 19, 86, 27, 90],
        },
        {
          name: 'Electronics',
          data: [65, 59, 80, 81, 56, 55, 40],
        },
      ],
      chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false,
        },
      },
      legend: {
        show: false,
      },
      colors: ['#0d6efd', '#20c997'],
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: 'smooth',
      },
      xaxis: {
        type: 'datetime',
        categories: [
          '2023-01-01',
          '2023-02-01',
          '2023-03-01',
          '2023-04-01',
          '2023-05-01',
          '2023-06-01',
          '2023-07-01',
        ],
      },
      tooltip: {
        x: {
          format: 'MMMM yyyy',
        },
      },
    };

    const sales_chart = new ApexCharts(
      document.querySelector('#revenue-chart'),
      sales_chart_options,
    );
    sales_chart.render();
  </script>
  <!-- jsvectormap -->
  <script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
    integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
    integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
    crossorigin="anonymous"></script>
  <!-- jsvectormap -->
  <script>
    // World map by jsVectorMap
    new jsVectorMap({
      selector: '#world-map',
      map: 'world',
    });

    // Sparkline charts
    const option_sparkline1 = {
      series: [{
        data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
    sparkline1.render();

    const option_sparkline2 = {
      series: [{
        data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
    sparkline2.render();

    const option_sparkline3 = {
      series: [{
        data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
      }, ],
      chart: {
        type: 'area',
        height: 50,
        sparkline: {
          enabled: true,
        },
      },
      stroke: {
        curve: 'straight',
      },
      fill: {
        opacity: 0.3,
      },
      yaxis: {
        min: 0,
      },
      colors: ['#DCE6EC'],
    };

    const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
    sparkline3.render();
  </script>


  <script>
    // Initialize the map
    var map = L.map('world-map').setView([20, 0], 2); // center of the world

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Example: Add a few sample markers (you can make these dynamic via PHP)
    const markers = [{
        name: "Manila, PH",
        coords: [14.5995, 120.9842]
      },
      {
        name: "Tokyo, JP",
        coords: [35.6762, 139.6503]
      },
      {
        name: "New York, US",
        coords: [40.7128, -74.0060]
      },
    ];

    markers.forEach(loc => {
      L.marker(loc.coords).addTo(map).bindPopup(`<b>${loc.name}</b>`);
    });
  </script>

  <!--end::Script-->
</body>
<!--end::Body-->

</html>