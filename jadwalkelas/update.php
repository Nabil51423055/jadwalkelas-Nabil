<?php
include "db.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$npm    = $_POST['npm'];
$kelas  = $_POST['kelas'];
$hari   = $_POST['hari'];
$matkul = $_POST['matkul'];
$dosen  = $_POST['dosen'];
$jam    = $_POST['jam'];

$query = mysqli_query($conn, "UPDATE jadwal_kelas SET
    nama='$nama',
    npm='$npm',
    kelas='$kelas',
    hari='$hari',
    matkul='$matkul',
    dosen='$dosen',
    jam='$jam'
    WHERE id='$id'
");

if($query){
    header("Location: index.php");
    exit;
} else {
    echo "Gagal update: " . mysqli_error($conn);
}
?>
