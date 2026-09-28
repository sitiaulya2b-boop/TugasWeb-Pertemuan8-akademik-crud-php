<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = $koneksi->prepare("DELETE FROM mahasiswa WHERE id = :id");
$sql->bindParam(':id', $id);
$sql->execute();

header("location: index.php");
