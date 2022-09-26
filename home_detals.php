<?php
include "inc/header.php";
include "inc/db.php";
?>
<?php
if (!isset($_SESSION['verification'])) {
    header('location: login.php');
    $_SESSION['login_first_error'] = "Your are not registered user. Please log in first";
}
?>
<?php
$id = $_GET['id'];

$count_total_query = "SELECT COUNT(*) AS home FROM homes WHERE locataion_id=$id";
$count_result = mysqli_query(db(), $count_total_query);
$taoal_home = mysqli_fetch_assoc($count_result);
?>



<div class="container">
    <div class="row">
        <div class="col" style="margin-top: 120px;">
            <h1>Welcome To Our Service</h1>
            <div class="card">
                <div class="card-header bg-primary">
                    <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM location WHERE id = $id";
                    $result = mysqli_query(db(), $query);
                    $location = mysqli_fetch_assoc($result);
                    ?>
                    <h1 class="text-center"><?= $location['location_name'] ?></h1>
                </div>

                <?php
                if ($taoal_home['home'] == 0) :
                ?>
                    <h1 class="text-danger text-center">No Room Available</h1>
                <?php endif ?>

                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM homes WHERE locataion_id=$id";
                $result = mysqli_query(db(), $query);
                foreach ($result as $home) :
                ?>

                    <p class="d-flex justify-content-between align-items-center mt-2">
                        <span class="badge bg-warning text-dark rounded-pill"><?= $location['location_name'] ?> -> <?= $home['sublocation'] ?></span>
                    </p>
                    <p class="bg-info"></p>
                    <div class="text" style="padding-left: 20px;">
                        <?php
                        if ($home['status'] == 'book') :
                        ?>
                            <span class="badge bg-danger">Booked</span>
                        <?php
                        endif;
                        ?>
                        <div class="card-body">
                            <img src="<?= $home['image'] ?>" style="width: 400px;" alt="Not found">
                        </div>

                        <ul class="list-group" style="width: 50%; margin-bottom:10px">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Room Type:
                                <h4 class="badge bg-success" style="color: #333"><?= $home['home_type'] ?></h4>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Number of Room:
                                <span class="badge bg-primary "> <?= $home['number_of_rooms'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Number of Belconi:
                                <span class="badge bg-primary "><?= $home['number_of_belcuni'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Number of Bathroom:
                                <span class="badge bg-primary ">
                                    <?= $home['number_of_bathroom'] ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Room Price/per Night:
                                <h1 class="badge bg-danger "><?= $home['room_price'] ?></h1>
                            </li>
                        </ul>
                        <?php
                        if ($home['status'] == 'unbooked') :
                        ?>
                            <div>
                                <a href="booking.php?id=<?= $home['id'] ?>" class="btn btn-success">Book</a>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                    <hr>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php
include "inc/footer.php";
?>