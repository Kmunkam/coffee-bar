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

        <?php
            include 'connectDB.php';

            // print_r($_POST);

            $table = $_POST['table'];
            $cash = $_POST['cash'];
            $date = $_POST['date'];

             // show employeeID
             $userID = mysqli_query($connectDB, "SELECT * FROM user");
             while($row = mysqli_fetch_assoc($userID)) {
                if($row['employeeID'] == $_SESSION['employeeID']){
                    $id = $row['employeeID'];
                }
            };

            // select data form orders Table
            $totalDB = mysqli_query($connectDB, "SELECT tableID, COUNT(tableID), menuname,COUNT(menuname), SUM(pricetotal)
                                                FROM orders
                                                GROUP BY tableID");

            if($_POST['table']>0){
                while($row = mysqli_fetch_assoc($totalDB)) {
                    if($table == $row['tableID']){
                        echo '<br><br>โต๊ะที่  '.$row['tableID'].'<br>';
                        echo $date.'<br>';
                        echo '#'.$id;
                        $sumpricetotal = $row['SUM(pricetotal)'];
                        echo '<br><br>Total price = '.$sumpricetotal;
                    } 
                }
            }else{
                echo '<br><br> No order';
            }

            // select data form orders Table
            $order = mysqli_query($connectDB, "SELECT * FROM orders
                                                INNER JOIN user
                                                ON orders.userorder = user.id");
            while($row = mysqli_fetch_assoc($order)) {
                if($table == $row['tableID']){
                    $menu = $row['menuname'];
                    $amount = $row['amount'];
                    $price = $row['price'];
                    $pricetotal = $row['pricetotal'];
                    $employee = $row['employeeID'];

                    
                    // echo '<br> x '.$menu.' ราคา '.$price.' ฿ จำนวน '.$amount.'  แก้ว';
                    echo '<br> x'.$amount.' &nbsp;&nbsp;'.$menu.' &nbsp;&nbsp; '.$price.' ฿';
                }
            }

                if($_POST['cash'] > 0){
                    $change = $cash - $sumpricetotal;
                    echo '<br><br> Cash = '.$cash.' ฿';
                    echo '<br> Change = '.$change.' ฿';
                }
            
           
            // insert bill
            // $bill = "INSERT INTO receipt(tableID, total, cash, changed, employee, date_check)
            //         VALUES ('$table','$sumpricetotal','$cash','$change','$employee','$date')";
            // echo '<br><br>'.$bill;
            
            // mysqli_query($connectDB, $bill);
            // if(mysqli_affected_rows($connectDB) > 0) {
            //     // echo "susseccfully";
            //     // Header("Location: order.php");
            // }else{
            //     echo mysqli_error(($connectDB));
            // }


        ?>

        <div class="mt-5">
            <a class="btn btn-primary" href="order.php" role="button">Back to order page</a>
            <a class="btn btn-primary" href="#" role="button">Print</a>
        </div>

        </div>
    </body>
</html>