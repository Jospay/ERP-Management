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
    <?php include('../../includes/sidebarP.php'); ?>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
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
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <!--begin::Col-->
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-primary">
                  <div class="inner">
                    <h3>150</h3>
                    <p>Active Fleet</p>
                  </div>
                  <i class="bi bi-truck small-box-icon"></i>
                  <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-success">
                  <div class="inner">
                    <h3>53<sup class="fs-5">%</sup></h3>
                    <p>Active Drivers</p>
                  </div>
                  <i class="bi bi-person-badge small-box-icon"></i>
                  <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-warning">
                  <div class="inner">
                    <h3>44</h3>
                    <p>Active Franchisees</p>
                  </div>
                  <i class="bi bi-building small-box-icon text-dark"></i>
                  <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>₱65k</h3>
                    <p>Total Revenue Today</p>
                  </div>
                  <i class="bi bi-cash-stack small-box-icon"></i>
                  <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <div class="small-box text-bg-danger">
                  <div class="inner">
                    <h3>12</h3>
                    <p>Pending Boundary Payments</p>
                  </div>
                  <i class="bi bi-clock-history small-box-icon"></i>
                  <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                    More info <i class="bi bi-link-45deg"></i>
                  </a>
                </div>
              </div>
            </div>

            <!--end::Col-->
          </div>
          <!--end::Row-->

          <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
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





  <!--end::Script-->
</body>
<!--end::Body-->

</html>