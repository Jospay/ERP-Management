<!doctype html>
<html lang="en">
<?php include('../../includes/header.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">

    <div class="app-wrapper">
        <?php include('../../includes/navbar.php'); ?>
        <?php include('../../includes/sidebar.php'); ?>


        <main class="app-main" style="background-color: #f0f8ff;">
            <div class="app-content-header">
                <div class="container-fluid">
                    <h3 class="mb-0"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>GPS Tracking</h3>
                    <p class="text-muted">Live vehicle tracking with filter by branch/franchise, speed, and route history.</p>
                </div>
            </div>

            <div class="app-content">
                <div class="container-fluid">

                    <!-- Filters -->
                    <div class="card shadow-sm mb-4 border-info">
                        <div class="card-header bg-info text-white">
                            <i class="bi bi-funnel me-2"></i><strong>Filters</strong>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Branch / Franchise</label>
                                    <select class="form-select">
                                        <option selected>All Branches</option>
                                        <option>Main Branch - Makati</option>
                                        <option>North Branch - Quezon City</option>
                                        <option>South Branch - Alabang</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold">Vehicle Status</label>
                                    <select class="form-select">
                                        <option selected>All</option>
                                        <option>Active</option>
                                        <option>Idle</option>
                                        <option>Offline</option>
                                    </select>
                                </div>
                                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                                    <button class="btn btn-outline-primary"><i class="bi bi-search"></i> Apply Filter</button>
                                    <button class="btn btn-outline-secondary"><i class="bi bi-arrow-repeat"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Live Map -->
                    <div class="card shadow-sm mb-4 border-primary">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-map-fill me-2"></i><strong>Live Vehicle Map</strong></span>
                            <span class="badge bg-light text-primary">Real-Time Tracking</span>
                        </div>
                        <div class="card-body p-0">
                            <div id="map" style="height: 400px; width: 100%; background-color: #e9ecef; display: flex; align-items: center; justify-content: center;">
                                <span class="text-muted"><i class="bi bi-map"></i> Map Preview (Integrate with Google Maps or Leaflet.js)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Vehicle Status Table -->
                    <div class="card shadow-sm mb-4 border-success">
                        <div class="card-header bg-success text-white">
                            <i class="bi bi-car-front me-2"></i><strong>Live Vehicle Status</strong>
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Vehicle ID</th>
                                        <th>Driver</th>
                                        <th>Location</th>
                                        <th>Speed</th>
                                        <th>Status</th>
                                        <th>Last Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ECAR-101</td>
                                        <td>John Dela Cruz</td>
                                        <td>Makati Ave., Makati City</td>
                                        <td>45 km/h</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>2 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-215</td>
                                        <td>Maria Santos</td>
                                        <td>EDSA, Mandaluyong City</td>
                                        <td>0 km/h</td>
                                        <td><span class="badge bg-warning text-dark">Idle</span></td>
                                        <td>5 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-330</td>
                                        <td>Leo Ramos</td>
                                        <td>Ayala Alabang, Muntinlupa</td>
                                        <td>60 km/h</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>Just now</td>
                                    </tr>
                                    <tr>
                                        <td>ECAR-450</td>
                                        <td>—</td>
                                        <td>—</td>
                                        <td>—</td>
                                        <td><span class="badge bg-secondary">Offline</span></td>
                                        <td>1 hour ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Route History -->
                    <div class="card shadow-sm border-secondary">
                        <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-clock-history me-2"></i><strong>Route History</strong></span>
                            <span class="badge bg-light text-secondary">Recent Trips</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0 align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Vehicle</th>
                                        <th>Start Location</th>
                                        <th>Destination</th>
                                        <th>Distance</th>
                                        <th>Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nov 3, 2025</td>
                                        <td>ECAR-101</td>
                                        <td>SM North EDSA</td>
                                        <td>NAIA Terminal 3</td>
                                        <td>18 km</td>
                                        <td>35 mins</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 2, 2025</td>
                                        <td>ECAR-330</td>
                                        <td>Ortigas Center</td>
                                        <td>BGC, Taguig</td>
                                        <td>12 km</td>
                                        <td>25 mins</td>
                                    </tr>
                                    <tr>
                                        <td>Nov 1, 2025</td>
                                        <td>ECAR-215</td>
                                        <td>Trinoma</td>
                                        <td>MOA, Pasay</td>
                                        <td>22 km</td>
                                        <td>45 mins</td>
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

    <script>
        // Initialize the map
        const map = L.map('map').setView([14.5547, 121.0244], 12); // Default: Makati

        // Add base layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Sample vehicle data
        const vehicles = [{
                id: 'ECAR-101',
                lat: 14.5547,
                lng: 121.0244,
                driver: 'John Dela Cruz',
                speed: '45 km/h',
                status: 'Active'
            },
            {
                id: 'ECAR-215',
                lat: 14.5833,
                lng: 121.0428,
                driver: 'Maria Santos',
                speed: '0 km/h',
                status: 'Idle'
            },
            {
                id: 'ECAR-330',
                lat: 14.4445,
                lng: 121.0329,
                driver: 'Leo Ramos',
                speed: '60 km/h',
                status: 'Active'
            }
        ];

        // Add markers to map
        vehicles.forEach(vehicle => {
            const marker = L.marker([vehicle.lat, vehicle.lng]).addTo(map);
            marker.bindPopup(`
    <strong>${vehicle.id}</strong><br>
    Driver: ${vehicle.driver}<br>
    Speed: ${vehicle.speed}<br>
    Status: ${vehicle.status}
  `);
        });

        // Optional: Simulate movement
        setInterval(() => {
            vehicles.forEach((vehicle, i) => {
                // Randomly move active vehicles
                if (vehicle.status === 'Active') {
                    vehicle.lat += (Math.random() - 0.5) * 0.002;
                    vehicle.lng += (Math.random() - 0.5) * 0.002;
                }
            });
            map.eachLayer(layer => {
                if (layer instanceof L.Marker) map.removeLayer(layer);
            });
            vehicles.forEach(vehicle => {
                const marker = L.marker([vehicle.lat, vehicle.lng]).addTo(map);
                marker.bindPopup(`
      <strong>${vehicle.id}</strong><br>
      Driver: ${vehicle.driver}<br>
      Speed: ${vehicle.speed}<br>
      Status: ${vehicle.status}
    `);
            });
        }, 5000);
    </script>

</body>

</html>