<?php
require_once "../inc/db.php";

$id = $_POST['id'];
$home_type = $_POST['home_type'];
$number_of_rooms = $_POST['number_of_rooms'];
$number_of_belcuni = $_POST['number_of_belcuni'];
$number_of_bathroom = $_POST['number_of_bathroom'];
$room_price = $_POST['room_price'];

$update_query = "UPDATE homes SET home_type='$home_type',number_of_rooms='$number_of_rooms',number_of_belcuni='$number_of_belcuni',number_of_bathroom='$number_of_bathroom',room_price='$room_price' where id = $id";
mysqli_query(db(), $update_query);
header('location: home_view.php');
