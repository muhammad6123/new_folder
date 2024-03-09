<?php
$dbcon = mysqli_connect("localhost", "root", "", "crud");
$id = $_GET['id'];

$query = "DELETE FROM school WHERE id = $id";

$query_run = mysqli_query($dbcon, $query); 
if($query_run){
    header('location:create.php');

}





?>