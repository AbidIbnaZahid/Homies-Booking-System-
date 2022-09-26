<?php
include "inc/header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Manage All Category</li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">

          <?php

          $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
          if ($do == 'Manage') { ?>

            <!-- Main content -->
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- All Post Start -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Manage All Post</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body" style="display: block;">
                        <table class="table table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">Sl.</th>
                              <th scope="col">Post Title</th>
                              <th scope="col">Category</th>
                              <th scope="col">Image</th>
                              <th scope="col">Posted By</th>
                              <th scope="col">Status</th>
                              <th scope="col">Post Date</th>
                            </tr>
                          </thead>

                          <tbody>
                            <?php
                            $query = "SELECT * FROM post";
                            $all_post = mysqli_query(db(), $query);
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($all_post)) {
                              $id           = $row['id'];
                              $title        = $row['title'];
                              $description  = $row['description'];
                              $image        = $row['image'];
                              $user_id      = $row['user_id'];
                              $category_id  = $row['category_id'];
                              $status       = $row['status'];
                              $date         = $row['post_date'];
                              $i++;
                            ?>
                              <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $title; ?></td>
                                <td>
                                  <?php
                                  $query = "SELECT * FROM category WHERE id = '$category_id'";
                                  $the_cat = mysqli_query(db(), $query);
                                  while ($row = mysqli_fetch_assoc($the_cat)) {
                                    $cat_id     = $row['id'];
                                    $cat_name   = $row['name'];
                                  }
                                  echo $cat_name;
                                  ?>
                                </td>
                                <td><img src="img/post/<?php echo $image; ?>" width=100px;></td>
                                <td><?php
                                    $query = "SELECT * FROM user WHERE id = '$user_id'";
                                    $the_user = mysqli_query(db(), $query);
                                    while ($row = mysqli_fetch_assoc($the_user)) {
                                      $user_id     = $row['id'];
                                      $user_name   = $row['name'];
                                    }
                                    echo $user_name;
                                    ?>
                                </td>
                                <td>
                                  <?php
                                  if ($status == 0) { ?>
                                    <span class="badge badge-warning">Draft</span>
                                  <?php } else { ?>
                                    <span class="badge badge-success">Published</span>
                                  <?php }
                                  ?>
                                </td>
                                <td><?php echo $date; ?></td>
                              </tr>
                            <?php  }
                            ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- All Post End -->
                  </div>
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div><!-- /.content -->
          <?php } else if ($do == 'Add') { ?>
            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- Add New Post Start -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Add New Post</h3>
                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                        </div>
                        <!-- /.card-tools -->
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body" style="display: block;">
                        <form action="post.php?do=Insert" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control" required="required" autocomplete="off">
                          </div>

                          <div class="form-group">
                            <label>Post Description</label>
                            <textarea name="description" name="description" rows="5" class="form-control"></textarea>
                          </div>

                          <div class="form-group">
                            <label>Post Thumbnail</label>
                            <input type="File" name="image" class="form-control-file">
                          </div>

                          <div class="form-group">
                            <label>Category Name</label>
                            <select class="form-control" name="category_id">
                              <?php
                              $query = "SELECT * FROM category";
                              $all_cat = mysqli_query(db(), $query);
                              while ($row = mysqli_fetch_assoc($all_cat)) {
                                $cat_id     = $row['id'];
                                $cat_name   = $row['name']; ?>
                                <option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
                              <?php  }
                              ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Published By</label>
                            <select class="form-control" name="the_user_id">
                              <?php
                              $query = "SELECT * FROM user";
                              $all_user = mysqli_query(db(), $query);
                              while ($row = mysqli_fetch_assoc($all_user)) {
                                $user_id     = $row['id'];
                                $user_name   = $row['name']; ?>
                                <option value="<?php echo $user_id; ?>"><?php echo $user_name; ?></option>
                              <?php  }
                              ?>
                            </select>
                          </div>

                          <div class="form-group">
                            <input type="submit" name="AddPost" value="Pubsish Post" class="btn btn-primary btn-flat">
                          </div>
                        </form>
                      </div>
                    </div>
                    <!-- Add New Post End -->
                  </div>
                </div>
              </div>
            </div>
          <?php
          } else if ($do == 'Insert') {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

              $title        = mysqli_real_escape_string(db(), $_POST['title']);
              $description  = mysqli_real_escape_string(db(), $_POST['description']);

              $the_user_id  = $_POST['the_user_id'];
              $category_id  = $_POST['category_id'];

              $image       = $_FILES['image']['name'];
              $image_tmp   = $_FILES['image']['tmp_name'];
              $random_number = rand(0, 100000);

              $updatedimage = $random_number . $image;
              move_uploaded_file($image_tmp, "img/post/" . $updatedimage);

              $query = "INSERT INTO post (title,description,image, user_id,category_id,status,post_date) VALUES('$title','$description','$updatedimage','$the_user_id','$category_id',1,now() )";

              $add_post = mysqli_query(db(), $query);

              if ($add_post) {
                header("Location: post.php?do=Manage");
              } else {
                die("Mysqli Error " . mysqli_error(db()));
                echo "Error";
              }
            }
          }
          // else if( $do == 'Edit' ){
          //   echo 'We can see the edit page here';
          // }
          // else if( $do == 'Update' ){
          //   echo 'We can Update the Post Data Into the DB From Here';
          // }
          // else if( $do == 'delete' ){
          //   echo 'We can Delete the Post Data From Here';
          // }
          ?>


        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php
include "inc/footer.php";
?>