<?php
include 'koneksi.php';

$id     = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama   = mysqli_real_escape_string($koneksi, $_POST['nama']);
$nim    = mysqli_real_escape_string($koneksi, $_POST['nim']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);

mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', alamat='$alamat' WHERE id='$id'");

header("location: index.php");
