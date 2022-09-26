<?php
include "inc/header.php";
include "inc/db.php"
?>
<div class="container">
    <div class="row" style="margin-top: 100px;">
        <!-- <div class="col">
            <?php
            $id = $_GET['id'];
            $count_total_query = "SELECT COUNT(*) AS home FROM homes WHERE 	locataion_id=$id";
            $count_result = mysqli_query(db(), $count_total_query);
            $taoal_home = mysqli_fetch_assoc($count_result);
            ?>
            <table class="table table-striped table-inverse ">
                <thead class="thead-inverse">
                    <tr class="text-center bg-info">
                        <?php
                        $id = $_GET['id'];
                        $query = "SELECT * FROM location WHERE id = $id";
                        $result = mysqli_query(db(), $query);
                        $location = mysqli_fetch_assoc($result);
                        ?>
                        <th><?= $location['location_name'] ?></th>
                    </tr>
                    <tr>
                        <th>Serial No</th>
                        <th>Total Home Available</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        <td><?= $taoal_home['home'] ?></td>
                        <td>
                            <a href="home_detals.php?id=<?= $taoal_home['id'] ?>" class="btn btn-info">Home Delats</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> -->

    </div>
</div>
<!-- <?php
        include "inc/footer.php";
        ?> -->