<?php 
// session_start();
$userID = $_SESSION['employeeID'];


 include("connectDB.php");
?>


<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
      <nav class="navbar navbar-light bg-light p-3 navtext">
        <div class="container-fluid">
          <p class="nav nameicon">COFFEE Bar</p>
          <!-- <a href="adminHome.php" class="navbar-brand"><img src="icon/coffee.png" alt="" class="mt-0" width="50" height="50"></a> -->
          <a href="home.php" class="nav-link pe-md-3 pe-sm-1 ms-2" ><i class="fa-solid fa-house"></i>&nbsp;Home </a>
          <a href="adminManageUser.php" class="nav-link px-md-3 px-sm-1" ><i class="fa-solid fa-user"></i>&nbsp;Manage User</a>
          <a href="adminMenu.php" class="nav-link px-md-3 px-sm-1" ><i class="fa-solid fa-notes-medical"></i>&nbsp;Menu</a>
          <a href="order.php" class="nav-link px-md-3 px-sm-1" ><i class="fa-solid fa-list-ul"></i>&nbsp;Order</a>
          <!-- <img src="icon/coffee.png" alt="" class="mx-auto" width="70" height="70"> -->
          <!-- <p class="nav position-absolute top-50 start-50 translate-middle nameicon">COFFEE Bar</p> -->
          <p class="nav ms-auto me-3 showID"># <?php echo $userID; ?></p>
          <a href="login.php" class="nav-link px-4"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;Logout</a>
        </div>
      </nav>
    </body>
</html>
<?php

?>
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
a{
  text-decoration: none;
}


</style>