<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container">
      <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="kelola.php"><img src="logo2.png" alt="" style="margin-right:50px"></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kelola.php">Penumpang <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="kelolaHarga.php">Harga</a>
      </li>
        <?php if (isset($_SESSION["adminEmail"])) : ?>
        <li style="margin-left:500px;" class="nav-item active">
        <a class="nav-link" href="">HALO ADMIN</a>
      </li>
        <li class="nav-item active" >
            <a class="btn btn-danger" href="action/logout.php">Log Out</a>        
        </li>
                            <?php else: ?>
                            <?php endif; ?>
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
  </div>
  </div>
</nav>