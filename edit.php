<?php
// Include database connection file
include_once("config.php");

// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id_pengaduan = $_GET['id'];

    // Fetch record from tbl_pengaduan table based on ID
    $result = mysqli_query($mysqli, "SELECT * FROM tbl_pengaduan WHERE id_pengaduan='$id_pengaduan'");

    // Check if the record exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Retrieve existing data
        // $jenis_pengaduan = $row['jenis_pengaduan'];
        $tgl_pengaduan = $row['tgl_pengaduan'];
        $nm_pengadu = $row['nm_pengadu'];
        $jenis_kelamin = $row['jenis_kelamin'];
        $no_ktp = $row['no_ktp'];
        $alamat_pengadu = $row['alamat_pengadu'];
        $pengaduan = $row['pengaduan'];

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_kategori_new = $_POST['id_kategori'];
            $tgl_pengaduan_new = $_POST['tgl_pengaduan'];
            $nm_pengadu_new = $_POST['nm_pengadu'];
            $jenis_kelamin_new = $_POST['jenis_kelamin'];
            $no_ktp_new = $_POST['no_ktp'];
            $alamat_pengadu_new = $_POST['alamat_pengadu'];
            $pengaduan_new = $_POST['pengaduan'];

            // Update the record in tbl_pengaduan table
            $updateResult = mysqli_query($mysqli, "UPDATE tbl_pengaduan SET id_kategori='$id_kategori_new', tgl_pengaduan='$tgl_pengaduan_new', nm_pengadu='$nm_pengadu_new', jenis_kelamin='$jenis_kelamin_new', no_ktp='$no_ktp_new', alamat_pengadu='$alamat_pengadu_new', pengaduan='$pengaduan_new' WHERE id_pengaduan='$id_pengaduan'");

            if ($updateResult) {
                echo "Record updated successfully. <a href='home.php'>View Data</a>";
            } else {
                echo "Error updating record: " . mysqli_error($mysqli);
            }
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request. Please provide the ID parameter.";
}
?>

<html>

<head>
    <title>Edit Record</title>
</head>


<body>
    <h2>Edit Record</h2>
    <form action="" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Jenis Pengaduan</td>
                <td>
                    <select style="width: 100%;" name="id_kategori">
                        <?php
                        // Fetch categories from tbl_kategori table
                        $query = "SELECT * FROM tbl_kategori";
                        $kategori_result = mysqli_query($mysqli, $query);

                        // Loop through the result set
                        while ($row = mysqli_fetch_assoc($kategori_result)) {
                            $selected = ($row['jenis_pengaduan'] == $jenis_pengaduan) ? 'selected' : '';
                            echo "<option value='" . $row['id_kategori'] . "' $selected>" . $row['jenis_pengaduan'] . "</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pengaduan</td>
                <td><input type="date" name="tgl_pengaduan" value="<?php echo $tgl_pengaduan; ?>"></td>
            </tr>
            <tr>
                <td>Nama Pengadu</td>
                <td><input type="text" name="nm_pengadu" value="<?php echo $nm_pengadu; ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"></td>
            </tr>
            <tr>
                <td>No. KTP</td>
                <td><input type="text" name="no_ktp" value="<?php echo $no_ktp; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Pengadu</td>
                <td><input type="text" name="alamat_pengadu" value="<?php echo $alamat_pengadu; ?>"></td>
            </tr>
            <tr>
                <td>Pengaduan</td>
                <td><input type="text" name="pengaduan" value="<?php echo $pengaduan; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </table>
    </form>
    <a href="home.php">Back to Home</a>
    <br><br>
</body>

</html>