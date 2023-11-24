<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/cewe.jpg" alt="" width="100px"></td>
            <td>2020051074001</td>
            <td>Febriany Kolondam</td>
            <td>Sistem Informasi</td>
            <td>febriany21@gmail.com</td>
        </tr>
    </table>
</body>

</html>