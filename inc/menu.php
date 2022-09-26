<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#home">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">contact</a>
        </li>
        <!-- All Users Menu Start -->
        <!-- All Users Menu End -->
      </ul>
      <?php
      if (isset($_SESSION['verification'])) { ?>
        <a href="userlogout.php" class="btn btn-info btn-sm">Log Out</a>
      <?php  }
      ?>
      <?php
      if (!isset($_SESSION['verification'])) { ?>
        <a href="login.php" class="btn btn-info btn-sm">Log In</a>
      <?php  }
      ?>

    </div>
  </div>
</nav>