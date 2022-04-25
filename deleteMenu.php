<?php
session_start();
include 'connectDB.php';


$menuID = $_GET['delete_id'];
// echo $menuID;

         $result = mysqli_query($connectDB,"DELETE FROM coffeemenu WHERE menuID = '$menuID' ");

         Header("Location: adminMenu.php");
            // if($result){
            //     echo "<script type='text/javascript'>";
            //     echo "alert('delete Succesfuly');";
            //     echo "window.location = 'adminMenu.php'; ";
            //     echo "</script>";
            //     }
            //     else{
            //     echo "<script type='text/javascript'>";
            //     echo "alert('Error back to delete again');";
            //     echo "</script>";
            //     }
?>