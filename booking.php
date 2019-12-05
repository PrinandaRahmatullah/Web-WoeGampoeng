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
                        <h2>Form Booking Tiket</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Isi Data Sesuai Fakta</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <?php

        include 'action/koneksi.php';
        
            if(isset($_POST["submit"])) {
                $nama_depan = $_POST["nama_depan"];
                $nama_belakang = $_POST["nama_belakang"];
                $nik = $_POST["nik"];
                $no_hub = $_POST["no_hub"];
                $dari = $_POST["dari"];
                $tujuan = $_POST["tujuan"];
                $tanggal = $_POST["tanggal"];
                $waktu_jemput = $_POST["waktu_jemput"];
                $mobil = $_POST["mobil"];
                $no_kursi = $_POST["no_kursi"];

                $mobil1 = "SELECT mobil_id FROM mobil where status = 'ada' AND jenis_mobil = '$mobil'";
                $mobil_id = mysqli_query($conn, $mobil1);
                if(mysqli_num_rows($mobil_id)>0){
                    while($id = mysqli_fetch_assoc($mobil_id)){                        
                            $m_id=$id['mobil_id'];
                            $carikursi = mysqli_query($conn, "SELECT * FROM kursi WHERE no_kursi='$no_kursi' and mobil_id='$m_id'");
                        if(!mysqli_num_rows($carikursi)>0){
                            $query = "INSERT INTO boking (nama_depan, nama_belakang, nik, no_hub, dari, tujuan, tanggal, waktu_jemput, mobil_id) VALUES ('$nama_depan', '$nama_belakang', '$nik', '$no_hub', '$dari', '$tujuan', '$tanggal', '$waktu_jemput', '$m_id')";
                            $query1 = "INSERT INTO kursi (mobil, no_kursi, nik,mobil_id) VALUES ('$mobil', '$no_kursi', '$nik','$m_id')";
                            $hasil = mysqli_query($conn, $query);
                            $hasil1 = mysqli_query($conn, $query1);
                            //$hasil2 = mysqli_query($conn,"UPDATE SET column1 = value1, column2 = value2, ... WHERE condition;");

                            if ($hasil && $hasil1) {
                                echo "<script>
                                        location.replace('data.php');
                                    </script>";
                                break;
                            }
                            else {
                                echo "failure";
                                break;
                            }
                        }
                    }
                    
                }else{
                    echo "Tidak tersedia";
                }
            }
    ?>
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                	<div class="login-page-content" id="formbooking">
                		<div  class="login-form">
                			<h3>Booking</h3>
							<form action="booking.php" method="post">
								<div class="name">
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" autofocus>
										</div>
										<div class="col-md-6">
											<input type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang">
										</div>
									</div>
								</div>
								<div class="username">
									<input type="text" name="nik" id="nik" placeholder="NIK">
								</div>
								<div class="username">
									<input type="text" name="no_hub" id="nik" placeholder="No HP">
								</div>
                                    <div class="row">
                                        <div class="col-md-6 pick-location bookinput-item">
                                            <select class="custom-select" name="dari" id="dari">
                                                <option selected>Dari</option>
                                                    <option value="BandaAceh">Banda Aceh</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 pick-location bookinput-item">
                                            <select class="custom-select" name="tujuan" id="tujuan">
                                                <option selected>Tujuan</option>
                                                    <option value="Bireun">Bireun</option>
                                                    <option value="Blang Kejeren">Blang Kejeren</option>
                                                    <option value="Blang Pidie">Blang Pidie</option>
                                                    <option value="Calang">Calang</option>
                                                    <option value="Idi Rayeuk">Idi Rayeuk</option>
                                                    <option value="Jantho">Jantho</option>
                                                    <option value="Karang Baru">Karang Baru</option>
                                                    <option value="Kutacane">Kutacane</option>
                                                    <option value="Langsa">Langsa</option>
                                                    <option value="Lhokseumawe">Lhokseumawe</option>
                                                    <option value="Lhoksukon">Lhoksukon</option>
                                                    <option value="Meureudu">Meureudu</option>
                                                    <option value="Sabang">Sabang</option>
                                                    <option value="Sigli">Sigli</option>
                                                    <option value="Simpang Tiga Redelong">Simpang Tiga Redelong</option>
                                                    <option value="Sinabang">Sinabang</option>
                                                    <option value="Singkil">Singkil</option>
                                                    <option value="Subulussalam">Subulussalam</option>
                                                    <option value="Suka Makmue">Suka Makmue</option>
                                                    <option value="Tapaktuan">Tapaktuan</option>
                                                    <option value="Peureulak">Peureulak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 bookinput-item">
                                            <input type="date" name="tanggal">
                                        </div>
                                        <div class="col-md-6 car-choose bookinput-item">
                                            <select class="custom-select" name="waktu_jemput" id="waktu_jemput">
                                            <option selected>Waktu Jemput</option>
                                            <option value="Pagi">Pagi</option>
                                            <option value="Siang">Siang</option>
                                            <option value="Malam">Malam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 car-choose bookinput-item">
                                            <select class="custom-select" name="mobil" id="mobil">
                                            <option selected>Mobil</option>
                                            <option value="L300">Mitsubishi L300</option>
                                            <option value="Travello">Kia Travello</option>
                                            <option value="Hiace">Toyota Hiace</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 car-choose bookinput-item">
                                            <select class="custom-select" name="no_kursi" id="no_kursi">
                                                <option selected>Nomor Kursi</option>
                                                
                                                <?php
                                                $cari = "SELECT * FROM kursi";
                                                $hasilCari = mysqli_query($conn, $cari);
                                                    for ($i=1; $i <16 ; $i++) { 
                                                    
                                                ?>
                                                <option value="<?php echo $i?>"><?php echo $i ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
								<div class="log-btn">
                                        <button id="bt" name="submit" id="submit" type="submit">Booking</button>                           
								</div>
							</form>
                		</div>
                	</div>
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