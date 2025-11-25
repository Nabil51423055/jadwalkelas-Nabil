<?php
$conn = mysqli_connect("localhost", "root", "", "jadwal_kelas_db");

if(!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
