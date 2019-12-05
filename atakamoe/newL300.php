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

        <title>Input Tarif Travello</title>
    </head>
    <body>
    <?php include "nav.php" ?>
        <div class="container">
            <form action="action/act_input_l300.php" method="POST">
            <h4>INPUT TARIF L300</h4>
                <div class="form-group">
                    <label >Dari</label>
                    <input type="text" class="form-control" placeholder="Enter Dari" name="dari" autofocus required>
                </div>
                <div class="form-group">
                    <label >Tujuan</label>
                    <input type="text" class="form-control" placeholder="Enter Tujuan" name="tujuan" required>
                </div>
                <div class="form-group">
                    <label >Harga</label>
                    <input type="number" class="form-control" placeholder="Enter harga" name="harga" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

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