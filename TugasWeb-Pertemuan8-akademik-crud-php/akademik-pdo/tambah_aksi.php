<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$alamat = $_POST['alamat'];

$sql = $koneksi->prepare("INSERT INTO mahasiswa (nama, nim, alamat) VALUES (:nama, :nim, :alamat)");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':nim', $nim);
$sql->bindParam(':alamat', $alamat);
$sql->execute();

header("location: index.php");
