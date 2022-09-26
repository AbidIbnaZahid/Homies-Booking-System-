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
                    if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-warning">
                            <?= $_SESSION['error'] ?>
                        </div>
                    <?php
                    endif;
                    ?>
                    <div class="card bg-success">
                        <div class="card-header text-center">
                            <h1>Log In Form</h1>
                        </div>
                        <div class="card-body">
                            <form action="login_post.php" method="POST">
                                <?php
                                if (isset($_SESSION['sent_massage'])) :
                                ?>
                                    <div class="alert alert-success">
                                        <?= $_SESSION['sent_massage']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <?php
                                if (isset($_SESSION['passwod_error'])) : ?>
                                    <div class="alert alert-danger">
                                        <?= $_SESSION['passwod_error']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>

                                <?php
                                if (isset($_SESSION['login_first_error'])) : ?>
                                    <div class="alert alert-info">
                                        <?= $_SESSION['login_first_error']; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <div class=" mt-3">
                                    <label for="">Enter Your Email Address</label>
                                    <input type="eamil" placeholder="Enter your Email Address" class="form-control" name="email_or_email" value="<?= (isset($_SESSION['email_sent']) ? $_SESSION['email_sent'] : ''); ?>">
                                    <?php
                                    if (isset($_SESSION['phone_or_email_error'])) : ?>
                                        <small class="text-danger"><?= $_SESSION['phone_or_email_error']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>

                                <div class=" mt-3">
                                    <label for="">Enter Your Password</label>
                                    <input type="password" placeholder="Enter your Password" class="form-control" name="password">
                                    <?php
                                    if (isset($_SESSION['password'])) : ?>
                                        <small class="text-danger"><?= $_SESSION['password']; ?></small>
                                    <?php
                                    endif;
                                    ?>
                                </div>
                                <div class=" mt-3">
                                    <button type="submit" class="btn btn-primary">Log In</button>
                                    <a href="signup.php" class="btn btn-dark" style="margin-left: 150px;">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
<?php
session_unset();
session_destroy();
?>