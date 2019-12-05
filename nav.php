<?php session_start()?>

<!--== Header Area Start ==-->
<header id="header-area" class="fixed-top">  

<!--== Header Bottom Start ==-->
<div id="header-bottom">
    <div class="container">
        <div class="row">
            <!--== Logo Start ==-->
            <div class="col-lg-3">
                <a href="index.php" class="logo">
                    <img src="assets/img/logo2.png" alt="JSOFT">
                </a>
            </div>
            <!--== Logo End ==-->

            <!-- == Main Menu Start ==-->
            <div class="col-lg-9 d-none d-lg-block">
                    <nav class="mainmenu alignright">
                        <ul>
                            <li><a href="index.php">BERANDA</a></li>
                            <li><a href="package.php">HARGA</a></li>
                            <li><a href="mobil.php">MOBIL</a></li>
                            <li><a href="about.php">TENTANG KAMI</a></li>
                            <?php if (isset($_SESSION["email"])) : ?>
                            <li> <a><?php echo $_SESSION["nama"]; ?></a> 
                                <ul>
                                    <li>
                                    <a href="#">My Ticket</a>
                                    </li>
                                    <li>
                                    <a href="acset.php">Account Setting</a>
                                    </li>
                                    <li>
                                    <a href="logout.php"><strong>Log Out</strong></a>
                                    </li>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li><a href="login.php">MASUK</a></li>
                            <?php endif; ?>


                        </ul>
                    </nav>
                </div>
                <!--== Main Menu End == -->
        </div>
    </div>
</div>
<!--== Header Bottom End ==-->
</header>
<!--== Header Area End ==-->