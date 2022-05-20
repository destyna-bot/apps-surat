<?php
$conn_str = "host=john.db.elephantsql.com " .
    "port=5432 " .
    "user=xkrbifgi " .
    "dbname=xkrbifgi " .
    "password=61aeE9Ml6URKMlWBhJQon78pEWIoRfh9";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>