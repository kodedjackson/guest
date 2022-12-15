<?php
include('config.php');
$id = $_GET['id'];
//echo $id;

 $del =mysqli_query($conn, "DELETE FROM `guest` WHERE id=$id");

 if($del == TRUE){
    //echo "user deleted";
    header('location:'. HOMEPAGE);
 }

?>