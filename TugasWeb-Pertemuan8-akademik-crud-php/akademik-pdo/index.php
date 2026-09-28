<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP - Intermediet (CRUD PDO)</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br/>
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br/><br/>
    <table border="1" cellpadding="8">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = $koneksi->prepare("SELECT * FROM mahasiswa");
        $data->execute();
        $hasil = $data->fetchAll();
        foreach ($hasil as $value) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['nim']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $value['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Yakin hapus data ini?');">HAPUS</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
