<?php
// Variable scope
// $a = 10;

// function nilai(){
//     global $a;
//     echo $a;
// }

// echo nilai();

// SUPERGLOBALS
// Variable global mili PHP
// Merupakan Array Associative
// var_dump($_SERVER);

// $_GET
// var_dump($_GET);

$mahasiswa = [
    [
        "nama" => "Savenda",
        "nim" => "418165",
        "email" => "savenda@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "4.jpg"
    ],
    [
        "nama" => "Azriel",
        "nim" => "594649",
        "email" => "azriel@gmail.com",
        "jurusan" => "Broadcast",
        "gambar" => "5.jpg"
        // "tugas" => [10,20,30]
    ]
];
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
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>">
                <?= $mhs["nama"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>