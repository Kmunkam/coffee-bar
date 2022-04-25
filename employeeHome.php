<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>

    <body>
      <!-- Navbar -->
      <?php include 'employeeNav.php';?>

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="">
                <h2 class="nametext">Coffee Bar</h2>
                <p class="border-white border-bottom border-5"></p>
            </div>

            <div class="box">
                <a href="order.php" class=""> go to Menu Page</a>
            </div>
        </div>

        

    </body>
</html>

<style>

.nametext{
  font-size: 90px;
  color: white;
}
.box{
  margin-top: 50px;
  background-color: #808080;
  font-size: 20px;
  border: 1px;
  padding: 20px 10px 20px 10px;
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