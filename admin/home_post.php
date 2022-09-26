<?php
include "../inc/db.php";
session_start();

$locataion_id = $_POST['locataion_id'];
$sublocation = $_POST['sublocation'];
$home_type = $_POST['home_type'];
$number_of_rooms = $_POST['number_of_rooms'];
$number_of_belcuni = $_POST['number_of_belcuni'];
$number_of_bathroom = $_POST['number_of_bathroom'];
$room_price = $_POST['room_price'];

// Image Uploaded Code start
$room_photo = $_FILES['room_photo']['name'];
$photo_location = $_FILES['room_photo']['tmp_name'];
$after_exp = explode('.', $room_photo);
$extension = end($after_exp);
$image_new_name = time() . "-" . rand(10000, 90000000) . "." . $extension;
$folder_location = "img/home/" . $image_new_name;
$my_loation = $_SERVER['DOCUMENT_ROOT'] . "/homies/" . $folder_location;

move_uploaded_file($photo_location, $my_loation);

$flag = true;

if (!$locataion_id) {
    $_SESSION['missing_location'] = "Your location Field is Empty";
    $flag = false;
}
if (!$sublocation) {
    $_SESSION['missing_sublocation'] = "Your Sub-location Field is Empty";
    $flag = false;
}
if (!$home_type) {
    $_SESSION['missing_homen'] = "Your Home Field is Empty";
    $flag = false;
}
if (!$number_of_rooms) {
    $_SESSION['missing_number_of_rooms'] = "Your Number of Rooms Field is Empty";
    $flag = false;
}
if (!$number_of_belcuni) {
    $_SESSION['missing_number_of_belcuni'] = "Your Number of Belcuni Field is Empty";
    $flag = false;
}
if (!$number_of_bathroom) {
    $_SESSION['missing_number_of_bathroom'] = "Your Number of Bath Room Field is Empty";
    $flag = false;
}
if (!$room_price) {
    $_SESSION['missing_room_price'] = "Your Room price Field is Empty";
    $flag = false;
}
if (!$room_photo) {
    $_SESSION['missing_room_photo'] = "Your Image Field is Empty";
    $flag = false;
}

if ($flag) {
    $insert_query = "INSERT INTO homes(locataion_id,sublocation,home_type,number_of_rooms,number_of_belcuni,number_of_bathroom,room_price,image)VALUES('$locataion_id','$sublocation','$home_type','$number_of_rooms','$number_of_belcuni','$number_of_bathroom','$room_price','$folder_location')";
    $result_query = mysqli_query(db(), $insert_query);
    $_SESSION['success'] = "Home Added Successfully!";
}
header('location: home.php');
