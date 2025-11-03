<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
<div class="app-wrapper">
  <?php include('../../includes/navbar.php'); ?>
  <?php include('../../includes/sidebarT.php'); ?>

  <main class="app-main" style="background-color: #f0f8ff;">
    <div class="app-content-header">
      <div class="container-fluid d-flex justify-content-between align-items-center">
        <h3 class="mb-0">Maintenance Reports</h3>
        <button class="btn btn-primary"><i class="bi bi-download"></i> Export PDF</button>
      </div>
    </div>

    <div class="app-content">
      <div class="container-fluid">
        <div class="row g-3">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-info text-white">
                <h3 class="card-title mb-0">Weekly Job Summary</h3>
              </div>
              <div class="card-body">
                <div id="weeklyChart" style="height:300px;"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-success text-white">
                <h3 class="card-title mb-0">Completed Repairs per Franchise</h3>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead><tr><th>Franchise</th><th>Completed Jobs</th></tr></thead>
                  <tbody>
                    <tr><td>Franchise A</td><td>5</td></tr>
                    <tr><td>Franchise B</td><td>3</td></tr>
                    <tr><td>Franchise C</td><td>6</td></tr>
                  </tbody>
                </table>
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
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
new ApexCharts(document.querySelector("#weeklyChart"),{
  chart:{type:"bar",height:300},
  series:[{name:"Completed Jobs",data:[5,3,6,4,7,5,2]}],
  xaxis:{categories:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"]},
  colors:["#0d6efd"]
}).render();
</script>
</body>
</html>
