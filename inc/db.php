<?php
function db()
{
    return mysqli_connect("localhost", "root", "", "homies");
}
function single_query($table_name, $id)
{
    $single_table_query = "SELECT * FROM $table_name where id = $id";
    return mysqli_fetch_assoc(mysqli_query(db(), $single_table_query));
}


function read_all_query($table_name)
{
    $read_query = "SELECT * FROM $table_name";
    return mysqli_query(db(), $read_query);
}
