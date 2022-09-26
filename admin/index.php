<?php
include "inc/header.php";
include "../inc/db.php";
?>

<div class="container">

    <div class="row" style="margin-left: 50px; margin-top: 140px;">

        <div class=" col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-currency-usd widget-two-icon"></i>

                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Home</p>
                    <?php
                    $count_total_query = "SELECT COUNT(*) AS home FROM homes";
                    $count_result = mysqli_query(db(), $count_total_query);
                    $taoal_home = mysqli_fetch_assoc($count_result);
                    ?>
                    <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?= $taoal_home['home'] ?></span></h2>

                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-account-multiple widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Location</p>
                    <?php
                    $count_total_query = "SELECT COUNT(*) AS loc FROM location";
                    $count_result = mysqli_query(db(), $count_total_query);
                    $taoal_home = mysqli_fetch_assoc($count_result);
                    ?>
                    <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?= $taoal_home['loc'] ?></span></h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-crown widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total User</p>
                    <?php
                    $count_total_query = "SELECT COUNT(*) AS user FROM users";
                    $count_result = mysqli_query(db(), $count_total_query);
                    $taoal_home = mysqli_fetch_assoc($count_result);
                    ?>
                    <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?= $taoal_home['user'] ?></span></h2>

                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box widget-box-two widget-two-custom">
                <i class="mdi mdi-auto-fix widget-two-icon"></i>
                <div class="wigdet-two-content">
                    <p class="m-0 text-uppercase font-bold font-secondary text-overflow" title="Statistics">Total Booking</p>
                    <?php
                    $count_total_query = "SELECT COUNT(*) AS bookings FROM bookings";
                    $count_result = mysqli_query(db(), $count_total_query);
                    $taoal_home = mysqli_fetch_assoc($count_result);
                    ?>
                    <h2 class=""><span><i class="mdi mdi-arrow-up"></i></span> <span data-plugin="counterup"><?= $taoal_home['bookings'] ?></span></h2>

                </div>
            </div>
        </div><!-- end col -->

    </div>
    <!-- end row -->

</div>
</div>
</div>