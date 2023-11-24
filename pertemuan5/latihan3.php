<?php
$mahasiswa = [
    ["Febriany Kolondam", "2020051074001", "Sistem Informasi", "febriany21@gmail.com"],
    ["Dimas prasetyo", "2020051074002", "Teknik Mesin", "dimas17@gmail.com"],
    ["Galih", "2021051074001", "Manajemen", "galih@gmail.com"],
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
            <li>Nama : <?= $mhs[0];  ?></li>
            <li>NIM : <?= $mhs[1];  ?></li>
            <li>Jurusan : <?= $mhs[2];  ?></li>
            <li>Email : <?= $mhs[3];  ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>