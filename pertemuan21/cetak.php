<?php
require_once __DIR__ . '/vendor/autoload.php';
require "functions.php";

$mpdf = new \Mpdf\Mpdf();

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

$html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Daftar Mahasiswa</title>
        </head>
        <body>
            <h1>Daftar Mahasiswa</h1>
            <table border="1" cellpadding="10" cellspasing="0">
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                </tr>';
        $i = 1;
        foreach($mahasiswa as $row){
            $html .= '<tr>
                            <td>'.$i++.'</td>
                            <td><img src="img/'.$row["gambar"].'" width="50"></td>
                            <td>'.$row["nama"].'</td>
                            <td>'.$row["nim"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["jurusan"].'</td>
            </tr>';
        }
$html .= '
                </table>
            </body>
            </html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mahasiswa.pdf', 'I');
?>

    
