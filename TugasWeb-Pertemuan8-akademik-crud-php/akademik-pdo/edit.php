<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP - Intermediet (CRUD PDO)</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/><br/>
    <h3>EDIT DATA MAHASISWA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = $koneksi->prepare("SELECT * FROM mahasiswa WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $data = $sql->fetch();
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" value="<?php echo $data['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
