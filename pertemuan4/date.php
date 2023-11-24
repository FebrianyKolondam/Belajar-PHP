<?php
// Date
// untuk menampilkan gambar dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// echo date("l, d M Y", time() + 60 * 60 * 24 * 2);


// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 2, 21, 2002));

// strtotime
echo date("l", strtotime("21 feb 2002"));
