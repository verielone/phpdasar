<?php
require "functions.php";

// cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])){
    
    // cek data berhasil disubmit or not
    if( tambah($_POST) > 0) {
        echo "
                <script>    
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
        ";
    }else{
        echo "
                <script>    
                    alert('Data gagal ditambahkan');
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
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM :
                    <input type="text" name="nim" id="nim" required>
                </label>
            </li>
            <li>
                <label for="nama">Nama :
                    <input type="text" name="nama" id="nama" required>
                </label>
            </li>
            <li>
                <label for="email">Email :
                    <input type="text" name="email" id="email" required>
                </label>
            </li>
            <li>
                <label for="jurusan">Jurusan :
                    <input type="text" name="jurusan" id="jurusan" required>
                </label>
            </li>
            <li>
                <label for="gambar">Gambar :
                    <input type="text" name="gambar" id="gambar" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
</body>
</html>