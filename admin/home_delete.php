<?php
require_once "../inc/db.php";
session_start();

$id = $_GET['id'];

$delete_query = "DELETE FROM homes WHERE id = $id";
mysqli_query(db(), $delete_query);
$_SESSION['Delete_service'] = "Your Room delete successfully";
header('location: home_view.php');
