<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Form Booking</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
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


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <!-- <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div> -->
    <!--== Preloader Area End ==-->

    <?php include "nav.php";?>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="stitle section-title text-center">
                        <h2>Data Pemesan</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Silahkan di cek</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <?php

        include 'action/koneksi.php';

        $query1 = $conn->query("SELECT * FROM boking JOIN kursi JOIN mobil JOIN hargahiace WHERE boking.nik = kursi.nik and kursi.mobil_id = mobil.mobil_id and boking.tujuan = hargahiace.tujuan");
        //SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate FROM Orders INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;
        //$query1 = mysqli_query($conn,"SELECT 'nama_depan.boking','nama_belakang.boking','no_hub.boking','dari.boking','tujuan.boking','tanggal.boking','waktu_jemput.boking','mobil_id.boking','mobil.kursi','no_kursi.kursi','mobil_id.kursi','mobil_id.mobil','nama_supir.mobil','jenis_mobil.mobil','nopol.mobil','kondisi.mobil', FROM boking INNER JOIN kursi INNER JOIN mobil ON 'nik.boking'='nik.kursi' AND 'mobil_id.kursi'='mobil_id.mobil'");

    ?>
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                	<div class="col-12 col-lg-12" style="background-color: white;">
                		<?php if(mysqli_num_rows($query1)>0){ ?>
			        		<?php
			            		while($data = $query1->fetch_assoc()){
                                    $target = $data['harga'];
                                    echo $target;
		        			?>
                        <div>
                            <label>Nama Depan       : <?php echo $data['nama_depan']; ?> </label><br>
                            <label>Nama Belakang    : <?php echo $data['nama_belakang']; ?> </label><br>
                            <label>Nik              : <?php echo $data['nik']; ?> </label><br>
                            <label>No. Hp           : <?php echo $data['no_hub']; ?> </label><br>
                            <label>Dari             : <?php echo $data['dari']; ?> </label><br>
                            <label>Tujuan           : <?php echo $data['tujuan']; ?> </label><br>
                            <label>Tanggal          : <?php echo $data['tanggal']; ?> </label><br>
                            <label>Waktu Jemput     : <?php echo $data['waktu_jemput']; ?> </label><br>
                            <label>Nomor Kursi      : <?php echo $data['no_kursi']; ?> </label><br>
                            <label>Mobil            : <?php echo $data['jenis_mobil']; ?> </label><br>
                            <label>Nomor Polisi     : <?php echo $data['nopol']; ?> </label><br>
                            <label>Nama Supir       : <?php echo $data['nama_supir']; ?> </label><br>
                            <label>Kondisi          : <?php echo $data['kondisi']; ?> </label><br>
                            <label>Harga            : <?php echo $data['harga']; ?> </label><br><br><br>
                        </div>
                				<?php  } ?>
		        				<?php } ?>
                	</div>

        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

    <?php include "footer.php" ?>

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

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>