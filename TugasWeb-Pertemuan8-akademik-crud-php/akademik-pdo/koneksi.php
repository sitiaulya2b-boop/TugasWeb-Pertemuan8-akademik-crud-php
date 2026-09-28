<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "akademik";

try {
    $koneksi = new PDO("mysql:host={$host};dbname={$database}", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    die("Koneksi database gagal : " . $exception->getMessage());
}
