<?php
// Include database connection file
include_once("config.php");

// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id_pengaduan = $_GET['id'];

    // Delete record from tbl_pengaduan table
    $result = mysqli_query($mysqli, "DELETE FROM tbl_pengaduan WHERE id_pengaduan='$id_pengaduan'");

    // Check if the deletion was successful
    if ($result) {
        // Check if there are any remaining records in tbl_pengaduan table
        $countResult = mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM tbl_pengaduan");
        $countRow = mysqli_fetch_assoc($countResult);
        $count = $countRow['count'];

        if ($count == 0) {
            // If there are no remaining records, reset the AUTO_INCREMENT value to 1
            $alterResult = mysqli_query($mysqli, "ALTER TABLE tbl_pengaduan AUTO_INCREMENT = 1");

            if ($alterResult) {
                echo "Record deleted successfully. ID reset to 1. <a href='home.php'>View Data</a>";
            } else {
                echo "Error resetting ID: " . mysqli_error($mysqli);
            }
        } else {
            echo "Record deleted successfully. <a href='home.php'>View Data</a>";
        }
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }
} else {
    echo "Invalid request. Please provide the ID parameter.";
}
