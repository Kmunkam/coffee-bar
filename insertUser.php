<?php
    include 'connectDB.php';
            print_r($_POST);

            $employeeID = $_POST['employeeID'];
            $fname  = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];
            $roleuser = $_POST['roleuser'];
            


            $userDB = "INSERT INTO user (employeeID, fname, lname, phone, roleuser)
                      VALUES ('$employeeID', '$fname', '$lname', '$phone', '$roleuser')";
            mysqli_query($connectDB,$userDB);
            
            
            
            Header("Location: adminManageUser.php");


        
?>