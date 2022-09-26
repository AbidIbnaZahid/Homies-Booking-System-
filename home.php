<?php
include "inc/header.php";
include "inc/db.php"
?>
<!--Banner section start-->
<section class="banner" id="home">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col">
        <div class="header rellax parallax-slider">
          <h1><span>Love to Travel?</span> Join Us</h1>
          <p>Now,travel with much more ease and safety.Book unique place to stay and explore many unknown place.</p>
          <a href="signup.php" class="btn btn-custom">sign-up</a>
          <a href="login.php" class="btn btn-custom-reverse">log in</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Banner section End-->

<!--Sevices section Start-->
<section class="service-section" id="services">
  <div class="container ">
    <header>Our services</header>
    <?php
    $query = "SELECT * FROM location";
    $result = mysqli_query(db(), $query);
    ?>
    <div class="row justify-content-center align-items-center ">

      <?php
      foreach ($result as $key => $locations) { ?>

        <div class="col-xl col-xl col-md-5 col-sm-6 col-7 mb-4">
          <div class="service-image wow fadeInDown">
            <img src="<?= $locations['location_photo'] ?>" class="img-fluid" style="width: 200px;">
          </div>

          <a href="home_detals.php?id=<?= $locations['id'] ?>"><?= $locations['location_name'] ?></a>
        </div>
      <?php
      }
      ?>
    </div>
</section>
<!--Sevices section End-->

<!--Contact Section Start-->
<section class="contact-section" id="contact">
  <div class="container ">
    <header>get in touch</header>
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <form>
          <div class="row wow fadeInLeft">
            <div class="col-xl form-group">
              <input type="text" placeholder="Name" class="form-control">
            </div>
            <div class="col-xl form-group">
              <input type="email" placeholder="Email" class="form-control">
            </div>
            <div class="col-xl-12 form-group">
              <input type="text" placeholder="Subject" class="form-control">
            </div>
            <div class="col-xl-12 form-group">
              <textarea class="form-control" placeholder="Your Massage" rows="7"></textarea>
            </div>
            <div class="col-xl-4 form-group ">
              <input type="submit" value="Send Massage" class="btn form-btn-custom">
            </div>
          </div>
        </form>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.098170400453!2d90.42334931445707!3d23.815107892219363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1568223528930!5m2!1sen!2sbd"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Contact Section End-->
<?php
include "inc/footer.php";
?>