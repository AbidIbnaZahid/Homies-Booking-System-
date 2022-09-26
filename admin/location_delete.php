<?php
require_once "../inc/db.php";
session_start();

$id = $_GET['id'];

$delete_query = "DELETE FROM location WHERE id = $id";
mysqli_query(db(), $delete_query);
$_SESSION['Delete_location'] = "Your Location delete successfully";
header('location: location_view.php');
