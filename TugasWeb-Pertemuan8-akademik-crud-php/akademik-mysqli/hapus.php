<?php
include 'koneksi.php';

$id = mysqli_real_escape_string($koneksi, $_GET['id']);

mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

header("location: index.php");
