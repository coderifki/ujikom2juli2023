<!DOCTYPE html>
<html>

<head>
    <title>Transaction List</title>
    <!-- Your meta tags and CSS links here -->
</head>

<body>
    <!-- Your header and sidebar content here -->

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb and other content here -->

            <div class="card">
                <div class="card-body">
                    <div class="card-title">Transaction List</div>
                    <hr>
                    <?php
                    // Include database connection file
                    include_once("config.php");

                    // Fetch transaction data from the database
                    $query = "SELECT t.id_transaction, t.id_item, t.quantity, t.price, t.ammount, i.nama_item, i.harga_jual 
                              FROM tbl_transaction_mohammad_rifki_ramadhan_arsjad t
                              JOIN tbl_item_mohammad_rifki_ramadhan_arsjad i ON t.id_item = i.id_item";
                    $result = mysqli_query($mysqli, $query);

                    // Check if there are any transactions
                    if (mysqli_num_rows($result) > 0) {
                        // Output table header
                        echo "<table border='1'>
                                <tr>
                                    <th>ID Transaction</th>
                                    <th>ID Item</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                </tr>";

                        // Loop through the result set and output data
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>" . $row['id_transaction'] . "</td>
                                    <td>" . $row['id_item'] . "</td>
                                    <td>" . $row['nama_item'] . "</td>
                                    <td>" . $row['quantity'] . "</td>
                                    <td>" . $row['price'] . "</td>
                                    <td>" . $row['ammount'] . "</td>
                                  </tr>";
                        }

                        echo "</table>";
                        echo "<br>";
                        echo "<a href='home.php'>Back to Homepage</a>";
                        echo "<br>";

                        echo "<a href='create_transaction.php'>Back to Transaction</a>";
                    } else {
                        echo "No transactions found.";
                    }

                    // Close the database connection
                    mysqli_close($mysqli);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>