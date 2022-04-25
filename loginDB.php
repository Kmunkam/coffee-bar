<?php 
session_start();
        if(isset($_POST['employeeID'])){
				//connection
                  include("connectDB.php");
				//รับค่า id
                  $employeeID = $_POST['employeeID'];
                  
				//query 
                  $sql="SELECT * FROM user Where employeeID ='".$employeeID."' ";
 
                  $result = mysqli_query($connectDB, $sql);

                  // echo $sql;
                  // exit;

                  // echo mysqli_num_rows($result);
                  // exit;
				
                  if(mysqli_num_rows($result)==1){
 
                      $row = mysqli_fetch_array($result);

                      $_SESSION["employeeID"] = $row["employeeID"];
                      $_SESSION["roleuser"] = $row["roleuser"];

                      Header("Location: home.php");

                      // echo $_SESSION["employeeID"] ;
                      // echo $_SESSION["role"];
                      // exit;
 
                      // if($_SESSION["role"]=="1"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 
                      //   Header("Location: adminHome.php");
 
                      // }
 
                      // if ($_SESSION["role"]=="2"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
 
                      //   Header("Location: employeeHome.php");
 
                      // }
 
                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
 
        }else{
 
 
             Header("Location: login.php"); //user & password incorrect back to login again
 
        }
        session_encode();
?>