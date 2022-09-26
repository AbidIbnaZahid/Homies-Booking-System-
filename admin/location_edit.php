<?php
include "inc/header.php";
include "../inc/db.php"
?>
<div class="container">
    <div class="row" style="margin-top: 100px;margin-left: 400px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h1>Edit Location</h1>
                </div>
                <div class="card-body">
                    <form action="location_edit_post.php" method="POST">
                        <input type="hidden" name="id" value="<?= single_query('location', $_GET['id'])['id']; ?>">
                        <div class="form-group">
                            <label for="">Location Name</label>
                            <input type="text" class="form-control" name="location_name" value="<?= single_query('location', $_GET['id'])['location_name'] ?>">
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