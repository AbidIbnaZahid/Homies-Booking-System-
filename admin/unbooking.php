<?php
include "../inc/db.php";
session_start();

$id = $_GET['id'];

$query = "UPDATE homes SET status='unbooked' where id = $id";
$result_query = mysqli_query(db(), $query);

$query = "DELETE FROM bookings WHERE home_id = $id";
$result_query = mysqli_query(db(), $query);
$_SESSION['success'] = "Your UnBooking Successfully Done!";

header('location: booking_detals.php');
