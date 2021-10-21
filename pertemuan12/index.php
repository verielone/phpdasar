<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
// tombol cari ditekan
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" placehorder="masukkan keyword percarian" autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <table border="1" cellpadding="10" cellspasing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin');">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row["gambar"] ?>" alt="" width="50">
            </td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>