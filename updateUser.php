<?php
session_start();
include 'connectDB.php';

print_r($_POST);
// echo $_POST['iduser'];
// echo $_POST['employeeID'];
// echo $_POST['fname'];
// echo $_POST['lname'];
// echo $_POST['phone'];
// echo $_POST['roleuser'];;


        $id = $_POST['iduser'];
        $employeeID = $_POST['employeeID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $roleuser = $_POST['roleuser'];

        $sql = mysqli_query($connectDB, "UPDATE user 
                                 SET employeeID = '$employeeID', 
                                     fname = '$fname',
                                     lname = '$lname',
                                     phone = '$phone',
                                     roleuser = '$roleuser'
                                 WHERE id = '$id' ");

            Header("Location: adminManageUser.php");

            // if ($sql) {
            //     echo "Record updated successfully";
            //   } else {
            //     echo "Error updating record: " . $connectDB->error;
            //   }

?>
