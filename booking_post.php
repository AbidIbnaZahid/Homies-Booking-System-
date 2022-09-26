<?php
include "inc/db.php";


$home_id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nidorpassport = $_POST['nidorpassport'];

$flag = true;

if (!$name) {
    $_SESSION['missing_name'] = "Your name Field is Empty";
    $flag = false;
}
if (!$email) {
    $_SESSION['missing_email'] = "Your email Field is Empty";
    $flag = false;
}
if (!$phone) {
    $_SESSION['missing_phone'] = "Your phone Field is Empty";
    $flag = false;
}
if (!$nidorpassport) {
    $_SESSION['missing_nidorpassport'] = "Your nidorpassport Field is Empty";
    $flag = false;
}


if ($flag) {
    $insert_query = "INSERT INTO bookings(home_id,name,email,phone,nidorpassport)VALUES('$home_id','$name','$email','$phone','$nidorpassport')";
    $result_query = mysqli_query(db(), $insert_query);

    $update_query = "UPDATE homes SET status='book' where id = $home_id";
    $result_query = mysqli_query(db(), $update_query);

    $_SESSION['success'] = "Your Booking Successfully Done! We will contact with you very soon";
}
header('location: home.php');
