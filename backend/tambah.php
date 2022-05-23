<?php
require_once '../koneksi.php';

$raw = file_get_contents('php://input');
$data = json_decode($raw);

// echo $data->nim;

$sql = "insert into surat(nomor, tanggal, judul) values('" .
    $data->nomor . "','" . $data->tanggal . "','" . $data->judul . "')";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$obj = new stdClass();
if($row > 0) {
    $obj->result = "success";
} else {
    $obj->result = "failed";
}
echo json_encode($obj);
?>