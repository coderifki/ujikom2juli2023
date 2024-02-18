<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form Transaction</title>
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
        <form action="create_transaction.php" method="post">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumb-->
                    <div class="row pt-2 pb-2">
                        <div class="col-sm-9">
                            <div class="icon-container">
                                <a href="create_transaction.php">
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
                            <div class="card-title">Form Transaction</div>
                            <hr>
                            <form>

                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Id Item</label>
                                    <div class="col-sm-10 ">

                                        <select class="form-control single-select" id="id_item" name="id_item">
                                            <?php
                                            // Include database connection file
                                            include_once("config.php");

                                            // Fetch categories from tbl_item table
                                            $query = "SELECT * FROM tbl_item_mohammad_rifki_ramadhan_arsjad";
                                            $item_result = mysqli_query($mysqli, $query);

                                            // Loop through the result set
                                            while ($row = mysqli_fetch_assoc($item_result)) {
                                                echo "<option value='" . $row['id_item'] . "'>" . $row['id_item'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Nama Item</label>
                                    <div class="col-sm-10 ">

                                        <select class="form-control single-select" id="id_item" name="id_item">
                                            <?php
                                            // Include database connection file
                                            include_once("config.php");

                                            // Fetch categories from tbl_item table
                                            $query = "SELECT * FROM tbl_item_mohammad_rifki_ramadhan_arsjad";
                                            $item_result = mysqli_query($mysqli, $query);

                                            // Loop through the result set
                                            while ($row = mysqli_fetch_assoc($item_result)) {
                                                echo "<option value='" . $row['id_item'] . "'>" . $row['nama_item'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="ammount" value="<?php echo $isi['ammount']; ?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-2 form-control" type="text" id="price" name="price">
                                        <?php
                                        // Include database connection file
                                        include_once("config.php");

                                        // Fetch categories from tbl_item table
                                        $query = "SELECT * FROM tbl_item_mohammad_rifki_ramadhan_arsjad";
                                        $item_result = mysqli_query($mysqli, $query);

                                        // Loop through the result set
                                        while ($row = mysqli_fetch_assoc($item_result)) {
                                            echo "<option value='" . $row['id_item'] . "'>" . $row['harga_jual'] . "</option>";
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="total" value="<?php echo $ammount; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <!-- <button type="submit" class="btn btn-primary px-5"> Sumbit</button> -->
                                        <input type="submit" name="Submit" value="Submit" class="btn btn-primary px-5">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div><!--End wrapper-->
        </form>

        <?php
        // Check if form submitted
        if (isset($_POST['Submit'])) {

            $nama_customer = $_POST['nama_customer'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            $fax = $_POST['fax'];
            $email = $_POST['email'];

            // Include database connection file
            include_once("config.php");

            // Insert data into tbl_customer_mohammad_rifki_ramadhan_arsjad table
            $query = "INSERT INTO tbl_customer_mohammad_rifki_ramadhan_arsjad (nama_customer, alamat, telp, fax, email) 
              VALUES ('$nama_customer', '$alamat', '$telp', '$fax', '$email')";
            $result = mysqli_query($mysqli, $query);

            // Show message when data added
            if ($result == true) {
                echo "Data added successfully. <a href='create_transaction.php'>View Data</a>";
            } else {
                echo "Data can't be added successfully. Error: " . mysqli_error($mysqli);
            }
        }
        ?>


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
        <script>
            $('#default-datepicker').datepicker({
                todayHighlight: true
            });
            $('#autoclose-datepicker').datepicker({
                autoclose: true,
                todayHighlight: true
            });

            $('#inline-datepicker').datepicker({
                todayHighlight: true
            });

            $('#dateragne-picker .input-daterange').datepicker({});
        </script>

        <!-- simplebar js -->
        <script src="assets/plugins/simplebar/js/simplebar.js"></script>
        <!-- sidebar-menu js -->
        <script src="assets/js/sidebar-menu.js"></script>

        <!-- Custom scripts -->
        <script src="assets/js/app-script.js"></script>

</body>

</html>