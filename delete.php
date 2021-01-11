<?php
 
//include database connection file
include_once("adminDB.php");
 
//get id from url to delete that user
$id = $_GET['id'];
 
//delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM news WHERE id=$id");
 
//after delete redirect to home, so that latest user list will be displayed
header("Location:index.php");
 
?>
