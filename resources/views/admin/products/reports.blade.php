<!-- resources/views/admin/reports.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Reports</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
  margin: 0;
  padding: 0;
  width: 217px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    
    .navbar {
      background-color: #B6FFA1;
      color: #54473F;
    }
    .navbar-brand,
    .navbar-nav .nav-link {
      color: #54473F !important;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h4 class="text-center">Admin Dashboard</h4>
    <a href="/admin/dashboard" class="nav-link">Home</a>
    <a href="/admin/user" class="nav-link" >Users</a>
    <a href="/admin/produk" class="nav-link" >Products</a>
    <a href="/admin/order" class="nav-link">Orderan</a>
    <a href="/admin/reports">Reports</a>
    <a href="/admin/settings">Settings</a>
  </div>

  <!-- Page Content -->
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#notifications">Notifications</a>
          </li>
          <li class="nav-item">
          <a href="/profile" class="nav-link">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#logout">Logout</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Laporan</h1>

        <!-- Tabel Laporan -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tabel Laporan</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis Laporan</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reports as $report)
                            <tr>
                                <td>{{ $report['date'] }}</td>
                                <td>{{ $report['type'] }}</td>
                                <td>${{ $report['total'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Grafik Laporan -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Grafik Laporan</h5>
            </div>
            <div class="card-body">
                <div class="chart-container mt-4" style="position: relative; height:40vh; width:80vw">
                    <canvas id="reportChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Data untuk grafik
        const ctx = document.getElementById('reportChart').getContext('2d');
        const reportChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Data produk', 'Pesanan', 'Pelanggan'],
                datasets: [{
                    label: 'Total',
                    data: [150, 75, 200],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
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
