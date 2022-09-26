<?php
include "inc/header.php";
include './inc/db.php';
?>

<div class="container">
    <div class="row">
        <div class="col" style=" width: 50%; margin: auto; margin-top: 140px;">
            <div class=" card">
                <div class="card-header">
                    <h1>All Location List</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-inverse table-responsive borderd">
                        <thead class="thead-inverse bg-primary">
                            <tr>
                                <th>Serial No</th>
                                <th>Locataion Id</th>
                                <th>home Type</th>
                                <th>Num of Room</th>
                                <th>Num of Belcuni</th>
                                <th>Num of Bathroom</th>
                                <th>Room Photo</th>
                                <th>price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $key => $room) { ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $room['locataion_id'] ?></td>
                                    <td><?= $room['home_type'] ?>
                                    </td>
                                    <td><?= $room['number_of_rooms'] ?>
                                    </td>
                                    <td><?= $room['number_of_belcuni'] ?>
                                    </td>
                                    <td><?= $room['number_of_bathroom'] ?>
                                    </td>
                                    <td><img src="<?= $room['image'] ?>" alt="">
                                    </td>
                                    <td><?= $room['room_price'] ?>
                                    </td>
                                </tr>
                            <?php }
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