<?php
// $mahasiswa = [
//     ["Febriany Kolondam", "2020051074001", "Sistem Informasi", "febriany21@gmail.com"],
//     ["Dimas prasetyo", "2020051074002", "Teknik Mesin", "dimas17@gmail.com"],
//     ["Galih", "2021051074001", "Manajemen", "galih@gmail.com"],
// ];

// array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Febriany Kolondam",
        "nim" => "2020051074001",
        "jurusan" => "Sistem Informasi",
        "email" => "febriany21@gmail.com",
        "gambar" => "cewe.jpg"
    ],
    [
        "nama" => "Dimas prasetyo",
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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"] ?>" width="100px">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>