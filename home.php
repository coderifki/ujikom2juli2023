<?php
// Include database connection file
include_once("config.php");

// Fetch all records from tbl_pengaduan table with jenis_pengaduan from tbl_kategori
$query = "SELECT p.id_pengaduan, k.jenis_pengaduan, p.tgl_pengaduan, p.nm_pengadu, p.jenis_kelamin, p.no_ktp, p.alamat_pengadu, p.pengaduan FROM tbl_pengaduan p
          JOIN tbl_kategori k ON p.id_kategori = k.id_kategori";
$result = mysqli_query($mysqli, $query);
?>

<html>

<head>
    <title>Home</title>
</head>

<body>
    <h2>Home</h2>
    <a href="create.php">Add Data</a>
    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Jenis Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>Nama Pengadu</th>
            <th>Jenis Kelamin</th>
            <th>No. KTP</th>
            <th>Alamat Pengadu</th>
            <th>Pengaduan</th>
            <th>Update</th>
        </tr>
        <?php
        // Loop through the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_pengaduan'] . "</td>";
            echo "<td>" . $row['jenis_pengaduan'] . "</td>";
            echo "<td>" . date('m-d-Y', strtotime($row['tgl_pengaduan'])) . "</td>";
            echo "<td>" . $row['nm_pengadu'] . "</td>";
            echo "<td>" . $row['jenis_kelamin'] . "</td>";
            echo "<td>" . $row['no_ktp'] . "</td>";
            echo "<td>" . $row['alamat_pengadu'] . "</td>";
            echo "<td>" . $row['pengaduan'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id_pengaduan'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id_pengaduan'] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br /><br />
    <a href="index.php">Logout</a>
    <br /><br />
</body>

</html>