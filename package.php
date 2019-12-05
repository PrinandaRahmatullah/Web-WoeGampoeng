<?php
  require_once "action/koneksi.php";

  $data_hargal300 = $conn->query("select * from hargal300");
  $data_hargatravello = $conn->query("select * from hargatravello");
  $data_hargahiace = $conn->query("select * from hargahiace");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Harga Ticket</title>

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
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <?php include "nav.php"; ?>

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="stitle section-title  text-center">
                        <h2>List Harga</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Temukan Kota Tujuanmu dengan Harga Terbaik</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    

    <!--== Pricing Area Start ==-->
    <section id="pricing-page-area" class="section-padding">
        <div class="container con">
            <div class="row">
                <!-- Pricing Content Start -->
				<div class="col-lg-12">
					<div class="pricing-details-content">
						<div class="row ">
							<!-- Single Pricing Table -->
							<div class="col-lg-4 col-md-4 text-center">
                                <a href="mobil.php">
                                    <div class="single-pricing-table">
                                        <h2>L300</h2>                                    
                                        <table class="table table-stripped">
                                            <tbody>
                                                <?php
                                                    while($l300 = $data_hargal300->fetch_assoc()){
                                                    echo "<tr>
                                                        <td>".$l300['dari']."</td>
                                                        <td>".$l300['tujuan']."</td>
                                                        <td>".$l300['harga']."</td>
                                                    </tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
							</div>
							<!-- Single Pricing Table -->

							<!-- Single Pricing Table -->
							<div class="col-lg-4 col-md-4 text-center">
                                <a href="mobil.php">
                                    <div class="single-pricing-table">
                                        <h2>Travello</h2>
                                        <table class="table table-stripped">
                                            <tbody>
                                                <?php
                                                    while($travello = $data_hargatravello->fetch_assoc()){
                                                    echo "<tr>
                                                        <td>".$travello['dari']."</td>
                                                        <td>".$travello['tujuan']."</td>
                                                        <td>".$travello['harga']."</td>
                                                    </tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    </a>
							</div>
							<!-- Single Pricing Table -->

							<!-- Single Pricing Table -->
							<div class="col-lg-4 col-md-4 text-center hiace">
                                <a href="mobil.php">
                                    <div class="single-pricing-table">
                                        <h2>Hiace</h2>
                                        <table class="table table-stripped">
                                            <tbody>
                                                <?php
                                                    while($hiace = $data_hargahiace->fetch_assoc()){
                                                    echo "<tr>
                                                        <td>".$hiace['dari']."</td>
                                                        <td>".$hiace['tujuan']."</td>
                                                        <td>".$hiace['harga']."</td>
                                                    </tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
							</div>
							<!-- Single Pricing Table -->

						</div>
					</div>
				</div>
                <!-- Pricing Content End -->

               
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    <!--== FAQ Area End ==-->

    <?php include "footer.php";?>

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