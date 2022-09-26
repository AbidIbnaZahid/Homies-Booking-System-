<?php
include "../inc/db.php";
include "inc/header.php";
?>

<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Location</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Homies</a>
                        </li>
                        <li>
                            <a href="#">Location</a>
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container -->

</div> <!-- content -->

<div class="container">
    <div class="row">
        <div class="col" style="width: 33%; margin: auto;">
            <?php
            if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php
            }
            ?>

            <?php
            if (isset($_SESSION['Delete_location'])) { ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['Delete_location'] ?>
                </div>
            <?php
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h1>Add Location </h1>
                </div>
                <div class="card-body">
                    <form action="location_post.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Location Name</label>
                            <input type="text" class="form-control" name="location_name" placeholder="Enter Location name">
                            <?php
                            if (isset($_SESSION['location_error'])) { ?>
                                <span class="text-danger"> <?= $_SESSION['location_error'] ?></span>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Location Photo</label>
                            <input type="file" class="form-control" name="location_img">
                            <?php
                            if (isset($_SESSION['missing_location_photo'])) { ?>
                                <span class="text-danger"> <?= $_SESSION['missing_location_photo'] ?></span>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add Location</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

unset($_SESSION['success']);
unset($_SESSION['location_error']);
unset($_SESSION['missing_location_photo']);

?>
<?php
include "inc/footer.php"
?>