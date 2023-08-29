<?php
include "koneksi.php";

$nik =   $_POST['nik'];
$nama = $_POST['nama'];
$usn = $_POST['username'];
$telp = $_POST['tlp'];
$pw = $_POST['password'];




$query = $koneksi->query("insert into masyarakat values('$nik', '$nama', '$usn', '$pw', '$telp')");
 header("location:login.php")
?>
