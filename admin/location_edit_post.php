<?php
require_once "../inc/db.php";

$id = $_POST['id'];
$location_name = $_POST['location_name'];

$update_query = "UPDATE location SET location_name='$location_name' where id = $id";
mysqli_query(db(), $update_query);
header('location: location_view.php');
