<?php
include "inc/header.php";
include "../inc/db.php"
?>
<div class="container">
    <div class="row" style="margin-top: 100px;margin-left: 20px;">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h1>Booking Information</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-inverse table-responsive table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Serial No</th>
                                <th>Customer Name</th>
                                <th>Customer Email Address</th>
                                <th>Customer phone Number</th>
                                <th>Customer NID or pasport Number</th>
                                <th>Booking Location</th>
                                <th>Status</th>
                                <th>Booking Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach (read_all_query('bookings') as $key => $book) :
                            ?>
                                <?php
                                $id = $book['home_id'];
                                $query = "SELECT * from homes WHERE id = $id";
                                $result = mysqli_fetch_assoc(mysqli_query(db(), $query));
                                ?>
                                <?php
                                if ($result['status'] == 'book') :
                                ?>
                                    <tr>
                                        <td scope="row"><?= $key + 1 ?></td>
                                        <td><?= $book['name'] ?></td>
                                        <td><?= $book['email'] ?></td>
                                        <td><?= $book['phone'] ?></td>
                                        <td><?= $book['nidorpassport'] ?></td>

                                        <?php
                                        // booking table
                                        $id = $book['home_id'];
                                        $query = "SELECT * from homes WHERE id = $id";
                                        $homeidresult = mysqli_fetch_assoc(mysqli_query(db(), $query));

                                        // location Table
                                        $loactionid = $homeidresult['locataion_id'];
                                        $query = "SELECT * from location WHERE id = $loactionid";
                                        $locationid_result = mysqli_fetch_assoc(mysqli_query(db(), $query));
                                        ?>
                                        <td><?= $locationid_result['location_name']  ?></td>

                                        <?php
                                        $id = $book['home_id'];
                                        $query = "SELECT * from homes WHERE id = $id";
                                        $result = mysqli_fetch_assoc(mysqli_query(db(), $query));
                                        ?>
                                        <td><span class="badge bg-danger"><?= $result['status'] ?></span></td>

                                        <td><img src="../<?= $result['image']  ?>" alt="" style="width: 100px;"></td>
                                        <td><a href="unbooking.php?id=<?= $result['id'] ?>" class="btn btn-primary">Unbooking</a></td>
                                    </tr>
                                <?php endif ?>

                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "inc/footer.php";
?>