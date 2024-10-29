<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
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

    <div class="container mt-4">
  <h2 class="mb-3">Daftar Orderan</h2>
  
  <!-- Tabel Produk -->
   <div class="table-responsive">
  <table class="table table-striped table-hover">
    <thead>
      <tr>
                
                <th>name</th>
                <th>email</th>
                <th>hp</th>
                <th>quantity</th>
                <th>profile</th>
                <th>Status</th>
      </tr>
    </thead>
    <tbody>
    @foreach($order as $order)
            <tr>
                <td>{{ $order['user'] ['name']  }}</td>
                <td>{{ $order['user'] ['email'] }}</td>
                <td> {{ $order['user'] ['hp'] }}</td>
                <td>{{ $order['quantity'] }}</td>
                <td><img src="{{ $order['user'] ['profilePhoto']['url'] }}" width="50"></td>
                <td>{{ $order['status']}}</td>
                
            </tr>   
        
            @endforeach

    </tbody>
  </table>
  </div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>


