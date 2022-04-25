<?php 
// session_start();
$employeeID = $_SESSION['employeeID'];


 include("connectDB.php");
?>

<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
        <nav class="navbar navbar-light bg-light p-3 navtext">
          <div class="container-fluid">
            <p class="nav nameicon">COFFEE Bar</p>
            <!-- <a class="navbar-brand"><img src="icon/coffee.png" alt="" class="mt-0" width="50" height="50"></a> -->
            <a class="nav-link active pe-md-3 ms-3 pe-sm-1" aria-current="page" href="home.php"><i class="fa-solid fa-house"></i>&nbsp;Home </a>
            <a class="nav-link px-md-3 px-sm-1" href="order.php"><i class="fa-solid fa-list-ul"></i>&nbsp;Order </a>
            <!-- <img src="icon/coffee.png" alt="" class="mx-auto" width="70" height="70"> -->
            <!-- <p class="nav nameicon position-absolute top-50 start-50 translate-middle">COFFEE Bar</p> -->

            <p class="nav ms-auto showID me-3"># <?php echo $employeeID; ?></p>
            <a class="nav-link px-4" href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;Logout</a>
          </div>
        </nav>


    </body>
</html>

<style>

body{
  background-color: #bfbfbf;
}
.nameicon{
  font-size: 24px;
  font-weight: bold;
  font-family: 'Redressed', cursive;
  /* font-family: 'Lobster', cursive; */
}
.showID{
    font-size: 18px;
    font-weight: bold;
    color: black;
    margin: 0px;
}
.navtext{
  font-size: 18px;
  color: black;
}
.navtext a{
  font-size: 18px;
  color: black;
}
.navtext a:hover{
  font-size: 18px;
  color:#33ccff;
}


</style>