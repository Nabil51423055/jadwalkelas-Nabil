<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Kelas</title>
    <link rel="stylesheet" href="css/style.css?v=1">
</head>
<body>

<h2>Data Jadwal Kelas</h2>

<a href="create.php" class="btn">Tambah Data</a>
<br><br>

<form method="GET">
    <input type="text" name="cari" placeholder="Cari nama / NPM / matkul / dosen..." 
    value="<?= isset($_GET['cari']) ? $_GET['cari'] : '' ?>">

    <select name="hari">
        <option value="">Semua Hari</option>
        <?php
            $hariList = ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
            foreach($hariList as $h){
                $selected = (isset($_GET['hari']) && $_GET['hari'] == $h) ? "selected" : "";
                echo "<option $selected>$h</option>";
            }
        ?>
    </select>

    <button type="submit" class="btn">Filter</button>
    <a href="index.php" class="btn">Reset</a>
</form>
<br>

<table>
    <tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Matkul</th>
        <th>Dosen</th>
        <th>Jam</th>
        <th>Aksi</th>
    </tr>

<?php
$query = "SELECT * FROM jadwal_kelas WHERE 1";

if(isset($_GET['cari']) && $_GET['cari'] != ""){
    $cari = $_GET['cari'];
    $query .= "
        AND (
            nama LIKE '%$cari%' OR
            npm LIKE '%$cari%' OR
            matkul LIKE '%$cari%' OR
            dosen LIKE '%$cari%'
        )
    ";
}

if(isset($_GET['hari']) && $_GET['hari'] != ""){
    $hari = $_GET['hari'];
    $query .= " AND hari = '$hari' ";
}

$query .= "
    ORDER BY 
        FIELD(hari,'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'),
        jam ASC
";

$result = mysqli_query($conn, $query);

if(!$result){
    die("Query gagal: " . mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?= htmlspecialchars($row['nama']) ?></td>
        <td><?= htmlspecialchars($row['npm']) ?></td>
        <td><?= htmlspecialchars($row['kelas']) ?></td>
        <td><?= htmlspecialchars($row['hari']) ?></td>
        <td><?= htmlspecialchars($row['matkul']) ?></td>
        <td><?= htmlspecialchars($row['dosen']) ?></td>
        <td><?= htmlspecialchars($row['jam']) ?></td>
        <td>
            <button type="button" class="btn-edit" data-id="<?= $row['id'] ?>">Edit</button>
            <a href="delete.php?id=<?= $row['id'] ?>" class="btn-delete" data-nama="<?= htmlspecialchars($row['nama']) ?>">Hapus</a>
        </td>
    </tr>
<?php } ?>

</table>

<script src="js/script.js"></script>
</body>
</html>
