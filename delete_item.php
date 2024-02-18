<?php
// Include database connection file
include_once("config.php");

// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id_item = $_GET['id'];

    // Delete record from tbl_item_mohammad_rifki_ramadhan_arsjad table
    $result = mysqli_query($mysqli, "DELETE FROM tbl_item_mohammad_rifki_ramadhan_arsjad WHERE id_item='$id_item'");

    // Check if the deletion was successful
    if ($result) {
        // Check if there are any remaining records in tbl_item_mohammad_rifki_ramadhan_arsjad table
        $countResult = mysqli_query($mysqli, "SELECT COUNT(*) AS count FROM tbl_item_mohammad_rifki_ramadhan_arsjad");
        $countRow = mysqli_fetch_assoc($countResult);
        $count = $countRow['count'];

        if ($count == 0) {
            // If there are no remaining records, reset the AUTO_INCREMENT value to 1
            $alterResult = mysqli_query($mysqli, "ALTER TABLE tbl_item_mohammad_rifki_ramadhan_arsjad AUTO_INCREMENT = 1");

            if ($alterResult) {
                echo "Record deleted successfully. ID reset to 1. <a href='home.php'>View Data</a>";
            } else {
                echo "Error resetting ID: " . mysqli_error($mysqli);
            }
        } else {
            echo "Record deleted successfully. <a href='home_item.php'>View Data</a>";
        }
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }
} else {
    echo "Invalid request. Please provide the ID parameter.";
}
