<?php
$conn_str = "host=tiny.db.elephantsql.com " .
    "port=5432 " .
    "user=hsyrjtyx " .
    "dbname=hsyrjtyx " .
    "password=JN7vWOW_qiffseqZaBTmTE1b8Lw2pZJj";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>