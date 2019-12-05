<?php
  require_once "../action/koneksi.php";

  $kode = $_GET['kode'];
  $query = $conn->query("SELECT * FROM hargal300 where kode = '$kode'");
  $mhs = $query->fetch_assoc();
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

        <title>Ubah Tarif L300</title>
    </head>
    <body>
        <?php include_once "nav.php" ?>
        <div class="container">
            <form action="action/act_ubah_travello.php" method="POST">
            <h4>Ubah Tarif L300</h4>
                <div class="form-group">
                    <label >dari</label>
                    <input type="text" class="form-control" placeholder="Enter dari" autofocus required value="<?php echo $mhs['dari'] ?>">
                    <input type="text" class="form-control" name="dari" hidden value="<?php echo $mhs['dari'] ?>">
                </div>
                <div class="form-group">
                    <label >tujuan</label>
                    <input type="text" class="form-control" placeholder="Enter Tujuan" name="tujuan" required value="<?php echo $mhs['tujuan'] ?>">
                </div>
                <div class="form-group">
                    <label >harga</label>
                    <input type="number" class="form-control" placeholder="Enter harga" name="harga" required value="<?php echo $mhs['harga'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>

        

        
    <!--=== Jquery Min Js ===-->
			<script src="../../assets/js/jquery-3.2.1.min.js"></script>
			<!--=== Jquery Migrate Min Js ===-->
			<script src="../../assets/js/jquery-migrate.min.js"></script>
			<!--=== Popper Min Js ===-->
			<script src="../../assets/js/popper.min.js"></script>
			<!--=== Bootstrap Min Js ===-->
			<script src="../../assets/js/bootstrap.min.js"></script>
			<!--=== Gijgo Min Js ===-->
			<script src="../../assets/js/plugins/gijgo.js"></script>
			<!--=== Vegas Min Js ===-->
			<script src="../../assets/js/plugins/vegas.min.js"></script>
			<!--=== Isotope Min Js ===-->
			<script src="../../assets/js/plugins/isotope.min.js"></script>
			<!--=== Owl Caousel Min Js ===-->
			<script src="../../assets/js/plugins/owl.carousel.min.js"></script>
			<!--=== Waypoint Min Js ===-->
			<script src="../../assets/js/plugins/waypoints.min.js"></script>
			<!--=== CounTotop Min Js ===-->
			<script src="../../assets/js/plugins/counterup.min.js"></script>
			<!--=== YtPlayer Min Js ===-->
			<script src="../../assets/js/plugins/mb.YTPlayer.js"></script>
			<!--=== Magnific Popup Min Js ===-->
			<script src="../../assets/js/plugins/magnific-popup.min.js"></script>
			<!--=== Slicknav Min Js ===-->
			<script src="../../assets/js/plugins/slicknav.min.js"></script>

			<!--=== Mian Js ===-->
			<script src="../../assets/js/main.js"></script>
    </body>
</html>