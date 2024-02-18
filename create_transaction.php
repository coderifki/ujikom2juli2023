<?php
// Include database connection file
include_once("config.php");

$item_id = 0;
$quantity = 1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    if (isset($_POST['id_item']) && is_numeric($_POST['id_item'])) {
        $item_id = $_POST['id_item'];
    } else {
        echo "Error: Invalid item ID";
        exit;
    }

    if (isset($_POST['quantity']) && is_numeric($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    } else {
        echo "Error: Invalid quantity";
        exit;
    }

    // Fetch item details from the database based on $item_id
    $query = "SELECT harga_jual FROM tbl_item_mohammad_rifki_ramadhan_arsjad WHERE id_item = $item_id";
    $item_result = mysqli_query($mysqli, $query);

    if (!$item_result) {
        echo "Error: " . mysqli_error($mysqli);
        exit;
    }

    $item = mysqli_fetch_assoc($item_result);

    if ($item) {
        $price = $item['harga_jual'];
        $amount = $price * $quantity; // Update the amount based on the selected item and quantity
    } else {
        echo "Error: Item not found";
        exit;
    }

    // Insert the transaction details into the database
    $query = "INSERT INTO tbl_transaction_mohammad_rifki_ramadhan_arsjad (id_item, quantity, price, ammount) 
              VALUES ($item_id, $quantity, $price, $amount)";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        // Redirect to detail_transaction.php after successful submission
        if ($result == true) {
            echo "Data added successfully. <a href='detail_transaction.php'>View Data</a>";
        } else {
            echo "Data can't be added successfully. Error: " . mysqli_error($mysqli);
        }
    }
}
?>

<html>

<head>
    <!-- Your meta tags and CSS links here -->
    <script>
        function calculateAmount() {
            const quantity = parseInt(document.getElementsByName('quantity')[0].value);
            const price = parseInt(document.getElementsByName('price')[0].value);

            if (!isNaN(quantity) && !isNaN(price)) {
                const amount = quantity * price;
                document.getElementsByName('ammount')[0].value = amount;
            } else {
                document.getElementsByName('ammount')[0].value = '';
            }
        }
    </script>
</head>

<body>
    <!-- Your header and sidebar content here -->

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb and other content here -->

            <div class="card">
                <div class="card-body">
                    <div class="card-title">Form Transaction</div>
                    <hr>
                    <form method="post" action="create_transaction.php">

                        <div class="form-group row">
                            <label for="id_item" class="col-sm-2 col-form-label">Item</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="id_item" name="id_item" onchange="calculateAmount()">
                                    <?php
                                    // Include database connection file
                                    include_once("config.php");

                                    // Fetch items from the database
                                    $query = "SELECT * FROM tbl_item_mohammad_rifki_ramadhan_arsjad";
                                    $item_result = mysqli_query($mysqli, $query);

                                    // Loop through the result set
                                    while ($item = mysqli_fetch_assoc($item_result)) {
                                        echo "<option value='" . $item['id_item'] . "'>" . $item['nama_item'] . " (Rp." . number_format($item['harga_jual']) . ")</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <!-- Inside the form -->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input type="number" name="quantity" class="form-control" required onchange="calculateAmount()" value="<?php echo $quantity; ?>">
                            </div>
                        </div>

                        <!-- Add a hidden input field to store the calculated amount -->
                        <?php

                        // Fetch item details from the database based on $item_id
                        $query = "SELECT harga_jual FROM tbl_item_mohammad_rifki_ramadhan_arsjad WHERE id_item = $item_id";
                        $item_result = mysqli_query($mysqli, $query);
                        $item = mysqli_fetch_assoc($item_result);

                        if ($item) {
                            $price = $item['harga_jual'];
                            $amount = $price * $quantity;
                            echo "<input type='hidden' name='price' value='$price'>";
                            echo "<input type='text' class='form-control' name='ammount' value='$amount' readonly>";
                        } else {
                            echo "<input type='hidden' name='price' value=''>";
                            echo "<input type='text' class='form-control' name='ammount' readonly>";
                        }
                        ?>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="col-sm-12">
                                <a href="home.php" class="btn btn-primary">Back to Homepage</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>