<?php
session_start();
include 'connectDB.php';


$id = $_GET['delete_id'];
// echo $menuID;

         $result = mysqli_query($connectDB,"DELETE FROM user WHERE id = '$id' ");

         Header("Location: adminManageUser.php");

?>