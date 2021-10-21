<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

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
    <style>
        .loader{
            width: 100px;
            position: absolute;
            top: 85px;
            left: 280px;
            z-index: -1;
            display: none;
        }
    </style>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="masukkan keyword percarian" autocomplete="off" id="keyword" autofocus>
        <button type="submit" name="cari" id="cari">Cari</button>
        <img src="img/loader.gif" alt="loading" class="loader">
    </form>
    <div id="container">
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
    </div>
</body>
</html>