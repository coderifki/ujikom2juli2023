<?php
// Include database connection file
include_once("config.php");

// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id_item = $_GET['id'];

    // Fetch record from tbl_item_mohammad_rifki_ramadhan_arsjad table based on ID
    $result = mysqli_query($mysqli, "SELECT * FROM tbl_item_mohammad_rifki_ramadhan_arsjad WHERE id_item='$id_item'");

    // Check if the record exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Retrieve existing data
        $nama_item = $row['nama_item'];
        $harga_beli = $row['harga_beli'];
        $harga_jual = $row['harga_jual'];

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_item_new = $_POST['nama_item'];
            $harga_beli_new = $_POST['harga_beli'];
            $harga_jual_new = $_POST['harga_jual'];

            // Update the record in tbl_item_mohammad_rifki_ramadhan_arsjad table
            $query = "UPDATE tbl_item_mohammad_rifki_ramadhan_arsjad 
            SET nama_item='$nama_item_new', 
                harga_beli='$harga_beli_new', 
                harga_jual='$harga_jual_new'
            WHERE id_item='$id_item'";

            $updateResult = mysqli_query($mysqli, $query);
            // var_dump($updateResult);
            // die();
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Form item</title>
    <!--favicon-->
    <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />

    <!--Select Plugins-->
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <!--inputtags-->
    <link href="assets/plugins/inputtags/css/bootstrap-tagsinput.css" rel="stylesheet" />
    <!--multi select-->
    <link href="assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">
    <!--Bootstrap Datepicker-->
    <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <!--Touchspin-->
    <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" class="bg-theme bg-theme2" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="javacript:void();">
                    <img src="assets/images/lsp_unpam.png" class="logo-icon" alt="logo icon">
                    <p1 class="logo-text"> </p1>
                </a>
            </div>



            <div class="user-details">
                <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
                    <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                    <div class="media-body">
                        <h8 class="side-user-name">Mohammad Rifki Ramadhan</h8>
                        <h8 class="side-user-name">181021400277</h8>
                    </div>
                </div>
                <div id="user-dropdown" class="collapse">
                    <ul class="user-setting-menu">
                        <li><a href="javaScript:void();"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="index.php"><i class=""></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li><a href="home_sales.php"><i class=""></i> Sales</a></li>
                <li><a href="home_item.php"><i class=""></i> Item</a></li>
                <li><a href="create_transaction.php"><i class=""></i> Transcation</a></li>

            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>

                </ul>


                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumb-->
                <div class="row pt-2 pb-2">
                    <div class="col-sm-9">
                        <div class="icon-container">
                            <a href="home_item.php">
                                <span class="ti-arrow-left"></span><span class="icon-name">Back to Home</span>

                                <!-- <h4 class="page-title">Back to Home</h4> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                <!-- End Breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Form Edit item</div>
                        <hr>
                        <form action="" method="post">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name item</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $nama_item; ?>" name="nama_item" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">harga beli</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $harga_beli; ?>" name="harga_beli" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">harga jual</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $harga_jual; ?>" name="harga_jual" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <!-- <button type="submit" class="btn btn-primary px-5"> Sumbit</button> -->
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary px-5">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!--End wrapper-->
            </form>

            <!-- Include jQuery library -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


            <!-- Add this script after your update query -->
            <script>
                // Assuming $updateResult is the result of your update query
                <?php if ($updateResult) { ?>
                    // Display success alert using jQuery
                    $(document).ready(function() {
                        alert("Update successful");
                    });
                <?php } ?>
            </script>

            <!-- Bootstrap core JavaScript-->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>

            <!--Bootstrap Touchspin Js-->
            <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
            <script src="assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

            <!--Select Plugins Js-->
            <script src="assets/plugins/select2/js/select2.min.js"></script>
            <!--Inputtags Js-->
            <script src="assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

            <!--Bootstrap Datepicker Js-->
            <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


            <!-- simplebar js -->
            <script src="assets/plugins/simplebar/js/simplebar.js"></script>
            <!-- sidebar-menu js -->
            <script src="assets/js/sidebar-menu.js"></script>

            <!-- Custom scripts -->
            <script src="assets/js/app-script.js"></script>

</body>

</html>