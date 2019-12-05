<?php
  require_once "../action/koneksi.php";

  $hiace = $conn->query("select * from hargahiace order by kode asc");
  $travello = $conn->query("select * from hargatravello order by kode asc");
  $l300 = $conn->query("select * from hargal300 order by kode asc");
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
			<?php include_once "nav.php" ?>
        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<br><h3>Hiace</h3>

			          <a href="newHiace.php" class="float-right" >
			            <button class="btn btn-primary">Tambah</button>
			          </a>

			          <br><br>
			          <table class="a table table-bordered table-striped table-hover">
			            <thead>
										<th>Kode</th>
			              <th>Dari</th>
			              <th>Tujuan</th>
			              <th>Harga</th>
			              <th>Aksi</th>
			            </thead>
			            
			            <tbody>
			              <?php
			                while($data = $hiace->fetch_assoc()){
			                  echo "
												<tr>
													<td>".$data['kode']."</td>
			                    <td>".$data['dari']."</td>
			                    <td>".$data['tujuan']."</td>
			                    <td>".$data['harga']."</td>
			                    <td><a href='ubahhiace.php?kode=".$data['kode']."'>Ubah</a> | <a href='action/act_hapus_hiace.php?kode=".$data['kode']."'>Hapus</a></td>
			                  </tr>";
			                }
			              ?>
			            </tbody>
			            
			          </table>
        		</div>
        		<div class="col-md-6">
        			<br><h3>Travello</h3>

			          <a href="newTravello.php" class="float-right" >
			            <button class="btn btn-primary">Tambah</button>
			          </a>

			          <br><br>
			          <table class="a table table-bordered table-striped table-hover">
			            <thead>
										<th>Kode</th>
			              <th>Dari</th>
			              <th>Tujuan</th>
			              <th>Harga</th>
			              <th>Aksi</th>
			            </thead>
			            
			            <tbody>
			              <?php
			                while($data1 = $travello->fetch_assoc()){
			                  echo "
												<tr>
													<td>".$data1['kode']."</td>												
			                    <td>".$data1['dari']."</td>
			                    <td>".$data1['tujuan']."</td>
			                    <td>".$data1['harga']."</td>
			                    <td><a href='ubahtravello.php?kode=".$data1['kode']."'>Ubah</a> | <a href='action/act_hapus_travello.php?kode=".$data1['kode']."'>Hapus</a></td>
			                  </tr>";
			                }
			              ?>
			            </tbody>
			            
			          </table>
        		</div>
        		<div class="col-md-6">
        			<br><h3>L300</h3>

			          <a href="newL300.php" class="float-right" >
			            <button class="btn btn-primary">Tambah</button>
			          </a>

			          <br><br>
			          <table class="a table table-bordered table-striped table-hover">
			            <thead>
										<th>Kode</th>
			              <th>Dari</th>
			              <th>Tujuan</th>
			              <th>Harga</th>
			              <th>Aksi</th>
			            </thead>
			            
			            <tbody>
			              <?php
			                while($data2 = $l300->fetch_assoc()){
			                  echo "
												<tr>
													<td>".$data2['kode']."</td>
			                    <td>".$data2['dari']."</td>
			                    <td>".$data2['tujuan']."</td>
			                    <td>".$data2['harga']."</td>
			                    <td><a href='ubahl300.php?kode=".$data2['kode']."'>Ubah</a> | <a href='action/act_hapus_l300.php?kode=".$data2['kode']."'>Hapus</a></td>
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