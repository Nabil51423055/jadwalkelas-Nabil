<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM jadwal_kelas WHERE id='$id'");

if(!$result){
    die("Query gagal: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Edit Data Jadwal</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>"><br><br>
    NPM: <input type="text" name="npm" value="<?= $row['npm'] ?>"><br><br>
    Kelas: <input type="text" name="kelas" value="<?= $row['kelas'] ?>"><br><br>

    Hari:<br>
    <select name="hari" required>
    <option value="Senin" <?= ($row['hari']=="Senin") ? "selected" : "" ?>>Senin</option>
    <option value="Selasa" <?= ($row['hari']=="Selasa") ? "selected" : "" ?>>Selasa</option>
    <option value="Rabu" <?= ($row['hari']=="Rabu") ? "selected" : "" ?>>Rabu</option>
    <option value="Kamis" <?= ($row['hari']=="Kamis") ? "selected" : "" ?>>Kamis</option>
    <option value="Jumat" <?= ($row['hari']=="Jumat") ? "selected" : "" ?>>Jumat</option>
    <option value="Sabtu" <?= ($row['hari']=="Sabtu") ? "selected" : "" ?>>Sabtu</option>
    <option value="Minggu" <?= ($row['hari']=="Minggu") ? "selected" : "" ?>>Minggu</option>
</select>

    <br><br>

    Matkul: <input type="text" name="matkul" value="<?= $row['matkul'] ?>"><br><br>
    Dosen: <input type="text" name="dosen" value="<?= $row['dosen'] ?>"><br><br>
    Jam: <input type="text" name="jam" value="<?= $row['jam'] ?>"><br><br>

    <button type="submit">Update</button>
</form>

<script src="js/script.js"></script>
</body>
</html>
