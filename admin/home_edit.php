<?php
include "inc/header.php";
include "../inc/db.php"
?>
<div class="container">
    <div class="row" style="margin-top: 100px;margin-left: 400px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Room Information</h1>
                </div>
                <div class="card-body">
                    <form action="home_edit_post.php" method="POST">
                        <input type="hidden" name="id" value="<?= single_query('homes', $_GET['id'])['id']; ?>">
                        <div class="form-group">
                            <label for="">Room type</label>
                            <input type="text" class="form-control" name="home_type" value="<?= single_query('homes', $_GET['id'])['home_type'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Number of Room</label>
                            <input type="text" class="form-control" name="number_of_rooms" value="<?= single_query('homes', $_GET['id'])['number_of_rooms'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Number of belcuni</label>
                            <input type="text" class="form-control" name="number_of_belcuni" value="<?= single_query('homes', $_GET['id'])['number_of_belcuni'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Number of Bathrom</label>
                            <input type="text" class="form-control" name="number_of_bathroom" value="<?= single_query('homes', $_GET['id'])['number_of_bathroom'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Total price per day</label>
                            <input type="text" class="form-control" name="room_price" value="<?= single_query('homes', $_GET['id'])['room_price'] ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "inc/footer.php";
?>