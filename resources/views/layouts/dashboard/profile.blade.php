<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Profil</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .profile-header {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }
    .profile-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 5px solid #ffffff;
      margin-top: -75px;
    }
    .profile-info h3 {
      font-weight: bold;
      color: #333;
    }
    .profile-info p {
      color: #777;
    }
    .profile-card {
      margin-top: 100px;
    }
  </style>
</head>
<body>
<a href="/admin/dashboard" class="back-button" title="Kembali ke Halaman Utama">
    <i class="fas fa-arrow-left">😍</i>
  </a>

<div class="container profile-card">
  <!-- Header Profil -->
  <div class="profile-header">
    <h2>Profil Pengguna</h2>
  </div>

  <!-- Konten Profil -->
  <div class="card shadow mt-4">
    <div class="card-body text-center">
      <!-- Foto Profil -->
      <img src="img/p.jpg" alt="Foto Profil" class="profile-img mb-3">
      
      <!-- Informasi Profil -->
      <div class="profile-info">
        <h3>Sabrilian Alwan Arramdan</h3>
        <p>Email: sabrilianalwan@gmail.com</p>
        <p>Lokasi: Kediri, Indonesia</p>
        <p>Telepon: +62 821-4047-4082</p>
      </div>

      <!-- Tombol Aksi -->
      <div class="mt-4">
        <button class="btn btn-primary btn-lg mr-2">Edit Profil</button>
        <button class="btn btn-secondary btn-lg">Pengaturan Akun</button>
      </div>
    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
