<?php
include "inc/header.php";
include "inc/db.php";
?>
<div class="container">
    <div class="row">
        <div class="col" style="margin-top: 120px;">
            <?php
            if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php
            }
            ?>
            <div class="card text-white bg-primary">
                <div class="card-header">
                    <h1>Booking</h1>
                    <h6>Please FillUp All information</h6>
                </div>
                <div class="card-body">
                    <form action="booking_post.php" method="POST">
                        <input type="hidden" name="id" value="<?= single_query('homes', $_GET['id'])['id']; ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php
                            if (isset($_SESSION['missing_name'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_name'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php
                            if (isset($_SESSION['missing_email'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_email'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php
                            if (isset($_SESSION['missing_phone'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_phone'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">NID or Pasport Number</label>
                            <input type="text" class="form-control" name="nidorpassport" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <?php
                            if (isset($_SESSION['missing_nidorpassport'])) { ?>
                                <small class="text-danger"><?= $_SESSION['missing_nidorpassport'] ?></small>
                            <?php
                            }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-info">Booked</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "inc/footer.php";
?>
<?php
unset($_SESSION['success']);
unset($_SESSION['missing_name']);
unset($_SESSION['missing_email']);
unset($_SESSION['missing_phone']);
unset($_SESSION['missing_nidorpassport']);
?>