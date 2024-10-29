<!-- resources/views/admin/settings.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Settings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        <h1 class="mb-4 text-center">Pengaturan</h1>

        <!-- Pengaturan Umum -->
        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Pengaturan Umum</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="siteName">Nama Situs</label>
                        <input type="text" class="form-control" id="siteName" placeholder="Masukkan nama situs">
                    </div>
                    <div class="form-group">
                        <label for="siteEmail">Email Admin</label>
                        <input type="email" class="form-control" id="siteEmail" placeholder="Masukkan email admin">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Pengaturan Notifikasi -->
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0">Pengaturan Notifikasi</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="emailNotifications">Notifikasi Email</label>
                        <select class="form-control" id="emailNotifications">
                            <option value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="smsNotifications">Notifikasi SMS</label>
                        <select class="form-control" id="smsNotifications">
                            <option value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>

        <!-- Pengaturan Lainnya -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Pengaturan Lainnya</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="maintenanceMode">Mode Pemeliharaan</label>
                        <select class="form-control" id="maintenanceMode">
                            <option value="1">Aktif</option>
                            <option value="0">Non-Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="language">Bahasa</label>
                        <select class="form-control" id="language">
                            <option value="en">Inggris</option>
                            <option value="id">Indonesia</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
