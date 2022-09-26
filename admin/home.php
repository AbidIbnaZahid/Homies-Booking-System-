<?php
include "../inc/db.php";
include "inc/header.php";

?>
<!-- Start content -->
<div class="content">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Home</h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Homies</a>
                        </li>
                        <li>
                            <a href="#">Home</a>
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
            if (isset($_SESSION['location_error'])) { ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['location_error'] ?>
                </div>
            <?php
            }
            ?>
            <div class="card">
                <div class="card-header">
                    <h1>Add Home With Detals </h1>
                </div>
                <div class="card-body">
                    <form action="home_post.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for=""></label>
                            <?php
                            $query = "SELECT * FROM location";
                            $result = mysqli_query(db(), $query);
                            ?>
                            <select name="locataion_id" id="" class="form-control">Home location
                                <option value="">--Select Home Location--</option>
                                <?php
                                foreach ($result as $key => $loaction) { ?>
                                    <option value="<?= $loaction['id'] ?>"><?= $loaction['location_name'] ?></option>
                                <?php
                                }

                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Home Sub Location</label>
                            <input type="text" class="form-control" name="sublocation" id="" aria-describedby="helpId" placeholder="Enter Sub location">
                            <?php
                            if (isset($_SESSION['missing_sublocation'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_sublocation'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Home Type</label>
                            <input type="text" class="form-control" name="home_type" id="" aria-describedby="helpId" placeholder="Enter Home Type">
                            <?php
                            if (isset($_SESSION['missing_homen'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_homen'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Number Of Room</label>
                            <input type="number" class="form-control" name="number_of_rooms" id="" aria-describedby="helpId" placeholder="Enter Number Of Room">
                            <?php
                            if (isset($_SESSION['missing_number_of_rooms'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_number_of_rooms'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Number Of Belconi</label>
                            <input type="number" class="form-control" name="number_of_belcuni" id="" aria-describedby="helpId" placeholder="Enter Number Of Belconi">
                            <?php
                            if (isset($_SESSION['missing_number_of_belcuni'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_number_of_belcuni'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Number Of Bathroom</label>
                            <input type="number" class="form-control" name="number_of_bathroom" id="" aria-describedby="helpId" placeholder="Enter Number Of Bathroom">
                            <?php
                            if (isset($_SESSION['missing_number_of_bathroom'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_number_of_bathroom'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Room Price/per Night</label>
                            <input type="number" class="form-control" name="room_price" id="" aria-describedby="helpId" placeholder="Enter Room Price">
                            <?php
                            if (isset($_SESSION['missing_room_price'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_room_price'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="">Roome Photo</label>
                            <input type="file" class="form-control" name="room_photo" id="" aria-describedby="helpId" placeholder="Roome Photo">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add Home</button>
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
unset($_SESSION['location_name']);
unset($_SESSION['missing_sublocation']);
unset($_SESSION['missing_homen']);
unset($_SESSION['missing_number_of_rooms']);
unset($_SESSION['missing_number_of_belcuni']);
unset($_SESSION['missing_number_of_bathroom']);
unset($_SESSION['missing_room_price']);

?>
<?php
include "inc/footer.php"
?>