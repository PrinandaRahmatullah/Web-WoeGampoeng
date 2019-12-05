<?php
    // Menghubungkan ke database
    include "action/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Title -->
        <title>Account Setting</title>

        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.png">

        <!--=== Bootstrap CSS ===-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!--=== Vegas Min CSS ===-->
        <link href="assets/css/plugins/vegas.min.css" rel="stylesheet">
        <!--=== Slicknav CSS ===-->
        <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
        <!--=== Magnific Popup CSS ===-->
        <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
        <!--=== Owl Carousel CSS ===-->
        <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
        <!--=== Gijgo CSS ===-->
        <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
        <!--=== FontAwesome CSS ===-->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!--=== Theme Reset CSS ===-->
        <link href="assets/css/reset.css" rel="stylesheet">
        <!--=== Main Style CSS ===-->
        <link href="style.css" rel="stylesheet">
        <!--=== Responsive CSS ===-->
        <link href="assets/css/responsive.css" rel="stylesheet">
    </head>

<body>
       <!-- Preloader -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Memanggil nav.php-->
        <?php include "nav.php";
            $email = md5($_SESSION["email"]);
            // Mengambil semua data yang ada di nahkoda
            $query = $conn->query("SELECT * FROM pengguna where email = '$email'");
            $pengguna = $query->fetch_assoc();
            ?>

        <div class="wadah wadah-edit">
            <div class="container">
                <div class="row">
                    <h4>Account Setting</h4>
                </div>
                <div class="row">
                    <div class="col-kiri col-kiri-edit col-md-4 col-xs-12">
                        <div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <input class="btn btn-primary" type="file" accept="image/*" name="myimage" onchange="preview_image(event)" style="margin-bottom:5px;" required>
                                <button class="btn btn-success" type="submit" name="submit_image" style="margin-bottom:5px;">Upload</button>
                            </form>
                            <?php 
                                if (isset($_POST['submit_image'])) {
                                $nama = $_FILES['myimage']['name'];
                                $lokasi = $_FILES['myimage']['tmp_name'];
                                $email = md5($_SESSION["email"]);

                                $gambar = htmlentities(strip_tags(trim($nama)));

                                    move_uploaded_file($lokasi, "assets/img/ac-img/".$nama);
                                    $conn->query("update pengguna set gambar='$gambar' where email='$email'");

                                echo "<div class='alert alert-info'>Data ditambahkan</div>";
                                echo " <meta http-equiv='refresh' content='l;url=acset.php'>";

                                }
                            ?>
                        </div>
                        <div class="card" >
                            <img src="assets/img/ac-img/<?php echo $pengguna['gambar'] ?>" alt="profile photo" id="output_image">
                        </div>
                        <br>
                            <h6 style="text-align:center"><?php echo $pengguna["nama"] ?></h6>
                            <h6 style="text-align:center"><?php echo $_SESSION["email"] ?></h6>                       
                    </div>
                    <div class="col-kanan col-kanan-edit col-md-7 col-xs-12">
                        <h5>My Profile</h5>
                        <form id="formulir" action="action/changeprofile.php" method="post">
                            <div class="row">
                            <div class="col-md-5">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" disabled name="email" id="email" value="<?php echo $_SESSION["email"] ?>">
                                </div>
                                <div class="col-md-5">
                                    <label for="nik">NIK</label>
                                    <input class="form-control" type="text" name="nik" id="nik" value="<?php echo $pengguna["nik"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nama Lengkap</label>
                                    <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $pengguna["nama"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nomor HP</label>
                                    <input class="form-control" type="tel" name="no_hp" id="no_hp" value="<?php echo $pengguna["no_hp"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Nomor HP Darurat</label>
                                    <input class="form-control" type="tel" name="no_hp_darurat" id="no_hp_darurat" value="<?php echo $pengguna["no_hp_darurat"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat" id="tempat" value="<?php echo $pengguna["tempat_lahir"] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $pengguna["tanggal_lahir"] ?>" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="alamat">Kota Asal</label>
                                    <input type="text" class="form-control" name="kota" value="<?php echo $pengguna["kota"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $pengguna["kecamatan"] ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="alamat">Desa</label>
                                    <input type="text" class="form-control" name="desa" value="<?php echo $pengguna["desa"] ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $pengguna["alamat"] ?>">
                                </div>
                            </div>
                            <br>
                            <h5>Password</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">Current Password</label>
                                    <input class="form-control" type="password"  value="<?php echo $_SESSION["password"] ?>" disabled>
                                    <input class="form-control" type="password" name="password" id="password" hidden value="<?php echo $_SESSION["password"] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nik">New Password</label>
                                    <input class="form-control" type="password" name="password2" id="password2" >
                                </div>
                                <div class="col-md-6">
                                    <label for="nik">Confirm Password</label>
                                    <input class="form-control" type="password" name="password3" id="password3" >
                                    <span id="message"></span>
                                </div>
                            </div>
                            <div class="row">               
                                <div class="col-md-12 tombol">
                                    <a href="acset.php" class="btn btn-primary">Cancel</a>
                                    <button class=" btn btn-success" id="save">Save</button>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                    
            </div>
        </div>
        <!-- Memanggil footer.php  -->
        <?php include "footer.php"; ?>

        <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>
    <!--=== Main Js ===-->
    <script src="assets/js/main.js"></script>
    <script type='text/javascript'>
            function preview_image(event) 
            {
            var reader = new FileReader();
            reader.onload = function()
            {
            var output = document.getElementById('output_image');
            output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
            }
        </script>
</body>

</html>