<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Jadwal</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Tambah Data Jadwal</h2>

<form method="POST">
    Nama:<br>
    <input name="nama"><br>

    NPM:<br>
    <input name="npm"><br>

    Kelas:<br>
    <input name="kelas"><br>

    Hari:<br>
    <select name="hari" required>
        <option>Senin</option>
        <option>Selasa</option>
        <option>Rabu</option>
        <option>Kamis</option>
        <option>Jumat</option>
        <option>Sabtu</option>
        <option>Minggu</option>
    </select><br>

    Matkul:<br>
    <input name="matkul"><br>

    Dosen:<br>
    <input name="dosen"><br>

    Jam:<br>
    <input name="jam"><br>

    <button name="submit">Simpan</button>
</form>

<script src="js/script.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    mysqli_query($conn, "INSERT INTO jadwal_kelas VALUES(
        '',
        '$_POST[nama]',
        '$_POST[npm]',
        '$_POST[kelas]',
        '$_POST[hari]',
        '$_POST[matkul]',
        '$_POST[dosen]',
        '$_POST[jam]'
    )");
    header("Location: index.php");
}
?>
