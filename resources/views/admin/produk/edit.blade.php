<head>
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

    <div class="container">
        <h2>Edit Produk</h2>

        <form action="{{ route('produk.update', $produk->idproduk) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="namaproduk" class="form-control" value="{{ $produk->namaproduk }}" required>
            </div>
            <div class="form-group">
                <label>Harga Reseller</label>
                <input type="number" name="hargareseller" class="form-control" value="{{ $produk->hargareseller }}" required>
            </div>
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="hargajual" class="form-control" value="{{ $produk->hargarjual }}" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" value="{{ $produk->gambar }}" required>
            </div>
            <div class="form-group">
            <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
