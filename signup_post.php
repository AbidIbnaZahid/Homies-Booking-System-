<?php
include "inc/db.php";
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];


$flag = true;

if (!$name) {
    $_SESSION['name_error'] = "Your Name field is Empty";
    $flag = false;
} else {
    $_SESSION['name'] = $name;
}
if (!$email) {
    $_SESSION['email_error'] = "Your Email field is Empty";
    $flag = false;
}
if (!$phone) {
    $_SESSION['phone_error'] = "Your Phone field is Empty";
    $flag = false;
}
if (!$password) {
    $_SESSION['password_error'] = "Your Password field is Empty";
    $flag = false;
}


if ($flag) {
    $email_check_query = "SELECT COUNT(*) AS email_count FROM users WHERE email = '$email'";
    if (mysqli_fetch_assoc(mysqli_query(db(), $email_check_query))['email_count'] == 0) {
        $phone_check_query = "SELECT COUNT(*) AS phone_count FROM users WHERE phone = '$phone'";
        $increpetd_pass = md5($password);
        if (mysqli_fetch_assoc(mysqli_query(db(), $phone_check_query))['phone_count'] == 0) {
            $insert_quary = "INSERT INTO users(name, email,phone, password)VALUES('$name','$email','$phone','$increpetd_pass')";
            $quary = mysqli_query(db(), $insert_quary);
            if ($quary) {
                $_SESSION['email_sent'] = $email;
                $_SESSION['success'] = "$name, Your registration successfully. Now log in";
                header('location: login.php');
            }
        } else {
            $_SESSION['mobile_exit_error'] = "$name, This mobile Number Alrady have an Account";
            header('location: signup.php');
        }
    } else {
        $_SESSION['email_exit_error'] = "$email, This Email Address Alrady have an Account";
        header('location: signup.php');
    }
} else {
    header('location: signup.php');
}
