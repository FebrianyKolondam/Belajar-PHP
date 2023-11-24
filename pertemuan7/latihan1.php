<?php
// // Variabel scope/ lingkup variabel
// $x = 10;

// function tampilX()
// {
//     global $x;
//     echo $x;
// }
// tampilX();


// // SUPERGLOBALS
// // variabel global milik PHP
// // merupakan array associative
// var_dump($_GET);


// $_GET
$mahasiswa = [
    [
        "nama" => "Febriany Kolondam",
        "nim" => "2020051074001",
        "jurusan" => "Sistem Informasi",
        "email" => "febriany21@gmail.com",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Dimas Prasetyo",
        "nim" => "2020051074002",
        "jurusan" => "Teknik Mesin",
        "email" => "dimas17@gmail.com",
        "gambar" => "cowo.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>