<?php

require 'funtions.php';
// $camaba = query("SELECT * FROM calon_mhs");

// tombol tambah sudah di tekan atau belum
if (isset($_POST['tambah'])) {;
  if (tambah($_POST) > 0) {
    echo " <script>
    alert ('data berhasil di tambah');
    document.location.href = 'praktik1.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  };
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="text-white">
          <?php echo date('l, d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- sidebar -->

  <div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
      <!-- menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="praktik1.php"><i class="fas fa-users"></i> calon Mahasiswa</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input camaba</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> jadwal Kuliah</a>
          <hr>
        </li>

      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-users"></i> Tambah Calon Mahasiswa baru</h3>
      <hr>

      <form action="" method="POST">
        <div class="form-group">
          <label for="nama">nama</label>
          <input type="text" class="form-control" id="nama" placeholder="Enter nama lengkap" name="nama" autofocus required>
        </div>
        <div class="form-group">
          <label for="alamat">alamat</label>
          <input type="text" class="form-control" id="alamat" placeholder="Enter alamat lengkap" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group">
          <label for="agama">agama</label>
          <select class="form-control" id="agama" name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Protestan">Protestan</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
          </select>
        </div>
        <div class="form-group">
          <label for="sekolah_asal">Sekolah Asal</label>
          <input type="text" class="form-control" id="sekolah_asal" placeholder="sekolah asal" name="sekolah_asal" required>
        </div>
        <div class="form-group">
          <label for="foto_maba"> file input</label>
          <input type="file" class="form-control-file" id="foto_maba">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
      </form>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>