<?php include("connectDB.php"); ?>

<!DOCTYPE html>
<html>
    <head>
    <?php include 'header.php' ;?>


    </head>
    <body>
      <!-- Navbar -->
    
      <?php
        session_start();
  
        // $userID = $_SESSION['employeeID'];
        // $roleuser = $_SESSION['roleuser'];

        // echo $_SESSION['employeeID'] ;
        // echo "<br>";
        // echo $_SESSION['roleuser'];

            if( $_SESSION['roleuser'] == '1') {
                include 'adminNav.php';
                // echo 'loging seccess';
            }
            elseif($_SESSION['roleuser'] == '2'){
                include 'employeeNav.php';
            }
            // else{
            //     // echo 'loging fail';
            // }
      ?>

        <div class="position-absolute top-50 start-50 translate-middle">
          <div class="">
            <h2 class="nametext">Coffee Bar</h2>
            <p class="border-white border-bottom border-5"></p>
          </div>

          <div class="box">
            <a href="order.php" class="p-2 "> go to Menu Page</a>
            </div>
        </div>

        

    </body>
</html>


<style>

/* body{
  background-image: url('img/2.jfif');
  background-size: cover;
} */

.nametext{
  font-size: 72px;
  color: white;
}
.box{
  margin-top: 50px;
  background-color: #808080;
  font-size: 20px;
  border: 1px;
  padding: 10px;
  text-align: center;
}
.box a:hover{
  color: black;
}

.box a { 
  text-decoration: none;
  color: white;
}

</style>