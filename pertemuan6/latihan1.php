<?php
//  $mahasiswa = [
//      ["Savenda", "418165", "savenda@gmail.com", "Teknik Informatika"],
//      ["Azriel", "168186", "azriel@gmail.com", "Teknik Elektro"]
//  ];
// echo $mahasiswa["nim"];

// array associative
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

// echo $mahasiswa[1]["tugas"][2];

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
    <?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"] ?>" alt="" style="width: 200px"></li>
        <li><?= $mhs["nama"] ?></li>
        <li><?= $mhs["nim"] ?></li>
        <li><?= $mhs["email"] ?></li>
        <li><?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>