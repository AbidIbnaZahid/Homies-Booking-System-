<?php
include "../inc/db.php";
session_start();

$location_name = $_POST['location_name'];

// Image Uploaded Code start
$location_photo = $_FILES['location_img']['name'];
$photo_location = $_FILES['location_img']['tmp_name'];
$after_exp = explode('.', $location_photo);
$extension = end($after_exp);

$image_new_name = time() . "-" . rand(10000, 90000000) . "." . $extension;

$folder_location = "img/location/" . $image_new_name;
$my_loation = $_SERVER['DOCUMENT_ROOT'] . "/homies/" . $folder_location;

move_uploaded_file($photo_location, $my_loation);
// Image Uploaded Code End 

$flag = true;

if (!$location_name) {
    $_SESSION['location_error'] = "Your Location Fielde is Empty";
    $flag = false;
}

if (!$location_photo) {
    $_SESSION['missing_location_photo'] = "Your Image Field is Empty";
    $flag = false;
}

if ($flag) {
    $insert_query = "INSERT INTO location (location_name,location_photo)VALUES('$location_name','$folder_location')";
    $result_query = mysqli_query(db(), $insert_query);
    $_SESSION['success'] = "Location Added Successfully!";
}
header('location: location.php');
