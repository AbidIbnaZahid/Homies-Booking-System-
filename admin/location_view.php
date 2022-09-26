<?php
include "inc/header.php";
include "../inc/db.php";
?>

<div class="container">
    <div class="row">
        <div class="col" style=" width: 50%; margin: auto; margin-top: 140px;">
            <div class=" card">
                <div class="card-header">
                    <h1>All Location List</h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse bg-primary">
                            <tr>
                                <th>Serial No</th>
                                <th>Location Name</th>
                                <th>Location Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach (read_all_query('location') as $key => $locations) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $locations['location_name'] ?></td>
                                    <td><img src="../<?= $locations['location_photo'] ?>" alt="Not Found" style="width: 40%;"></td>
                                    <td>
                                        <a class="btn btn-info" href="location_edit.php?id=<?= $locations['id'] ?>">Edit</a>
                                        <a class="btn btn-danger" href="location_delete.php?id=<?= $locations['id'] ?>">Delete</a>
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
unset($_SESSION['location_name']);
unset($_SESSION['location_photo']);
?>