<?php 
    include "../action/koneksi.php";
    $data = $conn->query("select * from boking order by tanggal asc");

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">

        <title>Input Harga Mobil</title>
    </head>
    <body>
        <?php include_once "nav.php"?>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<br><h3>Hiace</h3>

			          <!-- <a href="action/newHiace.php" class="float-right" >
			            <button class="btn btn-primary">Tambah</button>
			          </a> -->

			          <br><br>
			          <table class="a table table-bordered table-striped table-hover">
			            <thead>
										<th>NIK</th>
										<th>Nama Depan</th>
										<th>Nama Belakang</th>
										<th>Nomor HP</th>
			              <th>Dari</th>
										<th>Tujuan</th>
										<th>Tanggal</th>
										<th>Waktu Jemput</th>
										<th>ID Mobil</th>
			              <th>Keterangan</th>
			            </thead>
			            
			            <tbody>
			              <?php
			                while($pengguna = $data->fetch_assoc()){
			                  echo "
												<tr>
													<td>".$pengguna['nik']."</td>
													<td>".$pengguna['nama_depan']."</td>
													<td>".$pengguna['nama_belakang']."</td>
													<td>".$pengguna['no_hub']."</td>
													<td>".$pengguna['dari']."</td>
													<td>".$pengguna['tujuan']."</td>
													<td>".$pengguna['tanggal']."</td>
													<td>".$pengguna['waktu_jemput']."</td>
			                    <td>".$pengguna['mobil_id']."</td>
			                    <td><button class='btn btn-danger'>Tolak</button><button class='btn btn-success'>Verifikasi</button></td>
			                  </tr>";
			                }
			              ?>
			            </tbody>
			            
			          </table>
        		</div>
        	</div>
        </div>

        <!--=======================Javascript============================-->
			<!--=== Jquery Min Js ===-->
			<script src="../assets/js/jquery-3.2.1.min.js"></script>
			<!--=== Jquery Migrate Min Js ===-->
			<script src="../assets/js/jquery-migrate.min.js"></script>
			<!--=== Popper Min Js ===-->
			<script src="../assets/js/popper.min.js"></script>
			<!--=== Bootstrap Min Js ===-->
			<script src="../assets/js/bootstrap.min.js"></script>
			<!--=== Gijgo Min Js ===-->
			<script src="../assets/js/plugins/gijgo.js"></script>
			<!--=== Vegas Min Js ===-->
			<script src="../assets/js/plugins/vegas.min.js"></script>
			<!--=== Isotope Min Js ===-->
			<script src="../assets/js/plugins/isotope.min.js"></script>
			<!--=== Owl Caousel Min Js ===-->
			<script src="../assets/js/plugins/owl.carousel.min.js"></script>
			<!--=== Waypoint Min Js ===-->
			<script src="../assets/js/plugins/waypoints.min.js"></script>
			<!--=== CounTotop Min Js ===-->
			<script src="../assets/js/plugins/counterup.min.js"></script>
			<!--=== YtPlayer Min Js ===-->
			<script src="../assets/js/plugins/mb.YTPlayer.js"></script>
			<!--=== Magnific Popup Min Js ===-->
			<script src="../assets/js/plugins/magnific-popup.min.js"></script>
			<!--=== Slicknav Min Js ===-->
			<script src="../assets/js/plugins/slicknav.min.js"></script>

			<!--=== Mian Js ===-->
			<script src="../assets/js/main.js"></script>
    </body>
</html>