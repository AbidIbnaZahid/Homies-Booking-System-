<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
</head>

<body>
    <div class="register">
        <div class="container">
            <div class="row" style="margin-left: 400px;
      margin-top:100px">
                <div class="col-6">
                    <?php
                    if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-danger">
                            <?= $_SESSION['success'] ?>
                        </div>
                    <?php
                    endif;
                    ?>
                    <?php
                    if (isset($_SESSION['mobile_exit_error'])) : ?>
                        <div class="alert alert-warning">
                            <?= $_SESSION['mobile_exit_error'] ?>
                        </div>
                    <?php
                    endif;
                    ?>
                    <?php
                    if (isset($_SESSION['email_exit_error'])) : ?>
                        <div class="alert alert-warning">
                            <?= $_SESSION['email_exit_error'] ?>
                        </div>
                    <?php
                    endif;
                    ?>
                    <div class="card bg-success">
                        <div class="card-header text-center">
                            <h1>Sign Up Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="signup_post.php" method="POST">
                                <div class="">
                                    <label for="">Enter Your name</label>
                                    <input type="text" placeholder="Enter your name" class="form-control" name="name" value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : ""; ?>">

                                    <small class="text-danger">
                                        <?php
                                        if (isset($_SESSION['name_error'])) {
                                            echo $_SESSION['name_error'];
                                        }
                                        ?>
                                    </small>
                                </div>
                                <div class=" mt-3">
                                    <label for="">Enter Your Email Address</label>
                                    <input type="email" placeholder="Enter your Email Address" class="form-control" name="email">
                                    <small class="text-danger">
                                        <?php
                                        if (isset($_SESSION['email_error'])) {
                                            echo $_SESSION['email_error'];
                                        }
                                        ?>
                                    </small>
                                </div>
                                <div class=" mt-3">
                                    <label for="">Enter Your Phone Number</label>
                                    <input type="phone" placeholder="Enter your number" class="form-control" name="phone">
                                    <small class="text-danger">
                                        <?php
                                        if (isset($_SESSION['phone_error'])) {
                                            echo $_SESSION['phone_error'];
                                        }
                                        ?>
                                    </small>
                                </div>
                                <div class=" mt-3">
                                    <label for="">Enter Your Password</label>
                                    <input type="password" placeholder="Enter your Password" class="form-control" name="password">
                                    <small class="text-danger">
                                        <?php
                                        if (isset($_SESSION['password_error'])) {
                                            echo $_SESSION['password_error'];
                                        }
                                        ?>
                                    </small>
                                </div>
                                <div class=" mt-3">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                    <a href="login.php" class="btn btn-dark" style="margin-left: 150px;">Log In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_unset();
    session_destroy();
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>