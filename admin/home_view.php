<?php
include "inc/header.php";
include "../inc/db.php";
session_start();
?>

<div class="container">
    <div class="row">
        <div class="col" style=" width: 80%; margin: auto; margin-top: 140px;">
            <?php
            if (isset($_SESSION['Delete_service'])) :
            ?>
                <div class="alert alert-danger">
                    <?= $_SESSION['Delete_service'] ?>
                </div>
            <?php endif ?>
            <div class=" card">
                <div class="card-header">
                    <h1>Home List</h1>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse bg-primary">
                            <tr>
                                <th>Serial No</th>
                                <th>Locataion Name</th>
                                <th>Sub-Locataion Name</th>
                                <th>Home Type</th>
                                <th>Num of Room</th>
                                <th>Num of Belcuni</th>
                                <th>Num of Bathroom</th>
                                <th>Room Photo</th>
                                <th>price</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (read_all_query('homes') as $key => $room) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <?php
                                    $locataion_id = $room['locataion_id'];
                                    $query = "SELECT * FROM location where id = $locataion_id";
                                    $result = mysqli_fetch_assoc(mysqli_query(db(), $query))
                                    ?>
                                    <td><?= $result['location_name'] ?></td>
                                    <td><?= $room['sublocation'] ?></td>
                                    <td><?= $room['home_type'] ?>
                                    </td>
                                    <td><?= $room['number_of_rooms'] ?>
                                    </td>
                                    <td><?= $room['number_of_belcuni'] ?>
                                    </td>
                                    <td><?= $room['number_of_bathroom'] ?>
                                    </td>
                                    <td class="w-25"><img src="../<?= $room['image'] ?>" alt="" style="width: 100%;">
                                    </td>
                                    <td><?= $room['room_price'] ?>
                                    </td>
                                    <td> <a class="btn btn-info" href="home_edit.php?id=<?= $room['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="home_delete.php?id=<?= $room['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>




<?php
include "inc/footer.php"
?>
<?php
unset($_SESSION['Delete_service']);
unset($_SESSION['locataion_id']);
unset($_SESSION['location_name']);
unset($_SESSION['sublocation']);
unset($_SESSION['home_type']);
unset($_SESSION['number_of_rooms']);
unset($_SESSION['number_of_belcuni']);
unset($_SESSION['number_of_bathroom']);
?>