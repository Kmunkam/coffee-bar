<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
        <!-- Navbar -->
        <?php
            session_start();
            // echo $_SESSION['role'];
            include("connectDB.php");

            if( $_SESSION['roleuser'] == '1') {
                include 'adminNav.php';
            }
            elseif($_SESSION['roleuser'] == '2'){
                include 'employeeNav.php';
                
            }
        ?>

        <div class="container">
            <div class="mt-3">
                <a type="button" href="order.php" class="btn btn-success">Back to Order Page</a>
            </div>

            <!-- show order -->
            <div class="">
                <?php
                    include 'connectDB.php';

                    // print_r($_POST);
                    $noTable = $_POST['numbertable'];

                    // select data form orders Table
                    $totalDB = mysqli_query($connectDB, "SELECT tableID, COUNT(tableID), menuname,COUNT(menuname), SUM(pricetotal)
                                                        FROM orders
                                                        GROUP BY tableID");

                    
                        if($_POST['numbertable']>0){
                            while($row = mysqli_fetch_assoc($totalDB)) {
                                if($noTable == $row['tableID']){
                                    $table = $row['tableID'];
                                    echo '<br><br>โต๊ะที่  '.$row['tableID'].'<br>';
                                    $sumpricetotal = $row['SUM(pricetotal)'];
                                }
                            }
                        }

                    // select data form orders Table
                    $order = mysqli_query($connectDB, "SELECT * FROM orders
                                                        INNER JOIN user
                                                        ON orders.userorder = user.id");
                    while($row = mysqli_fetch_assoc($order)) {
                        if($noTable == $row['tableID']){
                            // echo '<br><br>โต๊ะที่  '.$row['tableID'].'<br>';
                            $menu = $row['menuname'];
                            $amount = $row['amount'];
                            $price = $row['price'];
                            $pricetotal = $row['pricetotal'];
                            $employee = $row['employeeID'];

                            // echo '<br> x '.$menu.' ราคา '.$price.' ฿ จำนวน '.$amount.'  แก้ว';
                            echo '<br> x'.$amount.' &nbsp;&nbsp;'.$menu.' &nbsp;&nbsp; '.$price.' ฿';
                        }
                    }
                    // print total price of order
                    echo '<br><br>Total price = '.$sumpricetotal;
                ?>
            </div>

            <div class="mt-5">
                <form action="checkbill.php" method="post" class="needs-validation">
                    <div class="mb-3">
                        <label for="cash" class="col-form-label">Enter Cash</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="cash" name="cash" min="0" aria-describedby="textInvalid" required>
                            <div class="invalid-feedback" id="textInvalid">
                                Please enter your cash!
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="form-control" id="table" name="table" value="<?php echo $table; ?>">
                    <input type="hidden" name="date" value="<?php putenv("TZ=Asia/Bangkok"); echo date("F j, Y, g:i a") ?>">

                    <button class="mt-2 btn btn-primary" type="submit" >Check Bill</button>
                </form>
            </div>
        </div>

    </body>
</html>

