<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Homepage Item</title>
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
                        <h4 class="page-title">Homepage Item</h4>


                    </div>
                    <div class="col-sm-3">

                    </div>
                </div>
                <!-- End Breadcrumb-->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Table</h5>
                            <a href="create_item.php">
                                <button type="button" class="btn btn-outline-primary waves-effect waves-light m-2">Insert Data</button>
                            </a>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nama Item</th>
                                            <th scope="col">harga beli</th>
                                            <th scope="col">harga jual</th>
                                            <th scope="col">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Include database connection file
                                        include_once("config.php");

                                        // Fetch all records from tbl_item table with jenis_item from tbl_kategori
                                        $query = "SELECT id_item, nama_item, harga_beli, harga_jual FROM tbl_item_mohammad_rifki_ramadhan_arsjad";
                                        $result = mysqli_query($mysqli, $query);
                                        ?>
                                        <?php
                                        // Loop through the result set
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id_item'] . "</td>";
                                            echo "<td>" . $row['nama_item'] . "</td>";
                                            echo "<td>" . $row['harga_beli'] . "</td>";
                                            echo "<td>" . $row['harga_jual'] . "</td>";
                                            echo "<td><a href='edit_item.php?id=" . $row['id_item'] . "'>Edit</a> | <a href='delete_item.php?id=" . $row['id_item'] . "'>Hapus</a></td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
            <!-- End container-fluid-->

        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->

        <!--Start footer-->
        <!-- <footer class="footer" sype>
            <div class="container">
                <div class="text-center">
                    Copyright © 2018 Admin Netorasi
                </div>
            </div>
        </footer> -->
        <!--End footer-->


    </div><!--End wrapper-->


    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

</body>

</html>