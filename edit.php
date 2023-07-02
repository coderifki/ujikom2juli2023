<!-- <html>

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

</html> -->
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
    <title>Edit Form</title>
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
                    <h5 class="logo-text">Latihan Crud </h5>
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
                        <li><a href="index.php"><i class="icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
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
                            <a href="home.php">
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
                        <div class="card-title">Edit Form</div>
                        <hr>
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Jenis Pengaduan</label>
                                <div class="col-sm-10 ">

                                    <select class="form-control single-select" name="id_kategori">
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
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                                <div class="col-sm-10">
                                    <input type="date" id="autoclose-datepicker" value="<?php echo $tgl_pengaduan; ?>" name="tgl_pengaduan" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Name Pengadu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $nm_pengadu; ?>" name="nm_pengadu" placeholder="Enter Your Name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" value="<?php echo $jenis_kelamin; ?>">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="radio" name="jenis_kelamin" value="Male" checked />
                                    <label>Male</label>
                                    <input type="radio" name="jenis_kelamin" value="Female" style="margin-left: 10px;" />
                                    <label>Female</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No. KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $no_ktp; ?>" name="no_ktp" placeholder="Enter Your Mobile Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Pengadu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-24" value="<?php echo $alamat_pengadu; ?>" name="alamat_pengadu" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pengaduan</label>
                                <div class="col-sm-10">
                                    <!-- <input type="text" class="form-control" id="input-25" placeholder="Confirm Password"> -->
                                    <textarea rows="4" class="form-control" value="<?php echo $pengaduan; ?>" name="pengaduan" placeholder="Enter Your Complaint"></textarea>

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