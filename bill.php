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
            <div class="mt-3 row">
                <form action="checkbill.php" method="post">
                    <label for="numbertable" class="col-sm-2 col-form-label">No. Table</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="numbertable" name="numbertable">
                    </div>
                    

                    <label for="cash" class="col-sm-2 col-form-label">Cash</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="cash" name="cash">
                    </div>
                    <input type="hidden" name="date" value="<?php putenv("TZ=Asia/Bangkok"); echo date("F j, Y, g:i a") ?>">

                    
                    <button class="mt-2 btn btn-outline-secondary" type="submit" id="numbertable">OK</button>
                </form>
            </div>
        </div>
    
    </body>
</html>