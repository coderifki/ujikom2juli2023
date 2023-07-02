<?php
// Check if form submitted
if (isset($_POST['Submit'])) {
    $id_kategori = $_POST['id_kategori'];
    $nm_pengadu = $_POST['nm_pengadu'];
    $tgl_pengaduan = date('Y-m-d', strtotime($_POST['tgl_pengaduan']));
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_ktp = $_POST['no_ktp'];
    $alamat_pengadu = $_POST['alamat_pengadu'];
    $pengaduan = $_POST['pengaduan'];
    // var_dump($tgl_pengaduan);

    // Include database connection file
    include_once("config.php");

    // Insert data into tbl_pengaduan table
    $result = mysqli_query($mysqli, "INSERT INTO tbl_pengaduan(id_kategori, tgl_pengaduan, nm_pengadu, jenis_kelamin, no_ktp, alamat_pengadu, pengaduan) VALUES('$id_kategori', '$tgl_pengaduan', '$nm_pengadu', '$jenis_kelamin', '$no_ktp', '$alamat_pengadu', '$pengaduan')");

    // Show message when data added
    if ($result == true) {

        echo "Data added successfully. <a href='home.php'>View Data</a>";
    } else {
        echo "Data can't be added successfully. Error: " . mysqli_error($mysqli);
    }
}
?>
<html>

<head>
    <title>Form Pengaduan</title>
</head>

<h2>Form Pengaduan</h2>

<body>
    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Jenis Pengaduan</td>
                <td>
                    <select style="width: 100%;" name="id_kategori">
                        <?php
                        // Include database connection file
                        include_once("config.php");

                        // Fetch categories from tbl_kategori table
                        $query = "SELECT * FROM tbl_kategori";
                        $kategori_result = mysqli_query($mysqli, $query);

                        // Loop through the result set
                        while ($row = mysqli_fetch_assoc($kategori_result)) {
                            echo "<option value='" . $row['id_kategori'] . "'>" . $row['jenis_pengaduan'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nama Pengadu</td>
                <td><input type="text" name="nm_pengadu"></td>
            </tr>
            <tr>
                <td for="tgl_pengaduan"> Tanggal Pengaduan</td>
                <label></label>
                <td><input type="date" id="tgl_pengaduan" name="tgl_pengaduan"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>No. KTP</td>
                <td><input type="text" name="no_ktp"></td>
            </tr>
            <tr>
                <td>Alamat Pengadu</td>
                <td><input type="text" name="alamat_pengadu"></td>
            </tr>
            <tr>
                <td>Pengaduan</td>
                <td><input type="text" name="pengaduan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <a href="home.php">Back to Home</a>
    <br><br>
</body>


</html>