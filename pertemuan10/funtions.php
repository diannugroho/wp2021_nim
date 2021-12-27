<?php
//koneksi dengan database
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'wpsmt5');
}

function query($query)
{
  $conn =  koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $agama = htmlspecialchars($data['agama']);
  $sekolah_asal = htmlspecialchars($data['sekolah_asal']);
  $foto_maba = htmlspecialchars($data['foto_maba']);

  $query = "INSERT INTO 
  calon_mhs
  VALUES 
  (null, '$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');
  ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
