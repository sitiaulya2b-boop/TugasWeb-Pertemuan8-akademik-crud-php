<?php
include 'koneksi.php';

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$nim    = $_POST['nim'];
$alamat = $_POST['alamat'];

$sql = $koneksi->prepare("UPDATE mahasiswa SET nama = :nama, nim = :nim, alamat = :alamat WHERE id = :id");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':nim', $nim);
$sql->bindParam(':alamat', $alamat);
$sql->bindParam(':id', $id);
$sql->execute();

header("location: index.php");
