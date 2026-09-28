<?php
include 'koneksi.php';

$nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim    = mysqli_real_escape_string($koneksi, $_POST['nim']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES (NULL, '$nama', '$nim', '$alamat')");

header("location: index.php");
