<?php
    require_once "../action/koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!--=== FontAwesome CSS ===-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <title>Admin</title>
  </head>
  <body style="background-image: url('../assets/img/funfact-bg.jpg');">
    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                	<div class="login-page-content">
                		<div class="login-form">
                			<h3>Selamat Datang!</h3>
                      <form action="action/act_login.php" method="post">
                        <div class="username">
                          <input type="text" name="email" placeholder="Enter Email" autofocus required>
                        </div>
                        <div class="password">
                          <input type="password" name="password" placeholder="Enter Password" required>
                        </div>
                        <div class="log-btn">
                          <button type="submit"><i class="fa fa-sign-in"></i> Masuk</button>
                        </div>
                      </form>
                		</div>
                	</div>
                </div>
        	</div>
        </div>
    </section>
    <!--== Login Page Content End ==-->

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