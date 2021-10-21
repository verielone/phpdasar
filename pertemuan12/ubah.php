<?php
require "functions.php";

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa
$mhs =  query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])){
    
    // cek data berhasil disubmit or not
    if( ubah($_POST) > 0) {
        echo "
                <script>    
                    alert('Data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
        ";
    }else{
        echo "
                <script>    
                    alert('Data gagal diubah');
                    document.location.href = 'index.php';
                </script>
        ";
    }
};
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
    <h1>Ubah data mahasiswa <?= $mhs["nama"] ?></h1>

    <form action="" method="post">
        <input type="hidden" name="id" id="id"  value="<?= $mhs["id"] ?>" required>
        <ul>
            <li>
                <label for="nim">NIM :
                    <input type="text" name="nim" id="nim"  value="<?= $mhs["nim"] ?>" required>
                </label>
            </li>
            <li>
                <label for="nama">Nama :
                    <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>" required>
                </label>
            </li>
            <li>
                <label for="email">Email :
                    <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>" required>
                </label>
            </li>
            <li>
                <label for="jurusan">Jurusan :
                    <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>" required>
                </label>
            </li>
            <li>
                <label for="gambar">Gambar :
                    <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"] ?>" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>
</body>
</html>