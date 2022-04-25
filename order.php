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


        <!-- Memu -->

        <?php
            // $showmenu= mysqli_query($connectDB, "SELECT * FROM coffeemenu");
            $showMenu= mysqli_query($connectDB, "SELECT * FROM coffeemenu
                                                             INNER JOIN typemenu
                                                             ON coffeemenu.menutype = typemenu.typeID");
            $no = 1;
        
        ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-8 border-end ">
                    <h2 class="mt-3">Menu</h2>
                    <div class="mt-3">
                        <!-- <h4>Coffee</h4> -->
                        <table class="table table-borderless">
                            <tbody>
                            <?php while($row = mysqli_fetch_array($showMenu)) { ?>
                                <tr>
                                    <td class="nameMenu"><?php echo $no++; ?></td>
                                    <td><a type="button" class="nameMenu showdetailMenu" 
                                            data-id="<?php echo $row['menuID'];?>"
                                            data-menuname="<?php echo $row['menuname'];?>"
                                            data-menuprice="<?php echo $row['menuprice'];?>"
                                            ><?php 
                                            if($row['typeID'] == '1'){
                                                echo $row['menuname'];
                                            }
                                            elseif($row['menutype'] == '2'){
                                                echo $row['menuname'];
                                            }elseif($row['menutype'] == '3'){
                                                echo $row['menuname'];
                                            }?> <br></a></td>
                                    <td class="nameMenu">
                                        <?php 
                                            if($row['typeID'] == '1'){
                                                echo $row['menuprice'];
                                            }elseif($row['menutype'] == '2'){
                                                echo $row['menuprice'];
                                            }elseif($row['menutype'] == '3'){
                                                echo $row['menuprice'];
                                            }
                                        ?> ฿</td>
                                <tr>
                            <?php }; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    
                </div>

                <!-- แสดงเมนูที่เลือก -->
                <div class="col-sm-4">
                    <h2 class="mt-3">Check Order</h2>
                    <div class="mt-3">
                        <form action="showorder.php" method="post">
                            <label for="numbertable" class="col col-form-label">No. Table</label>
                            <div class="col">
                                <input type="text" class="form-control" id="numbertable" name="numbertable">
                            </div>
                            
                            <button class="mt-2 btn btn-primary" type="submit" >Check order</button>
                        </form>
                        
                    </div>

                </div>
            </div>
        
        </div>

        <!-- Modal -->
        <div class="modal fade" id="bill" tabindex="-1" aria-labelledby="billLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="billLabel">bill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php  include 'checkbill.php'; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

        <?php include 'modaldetailMenu.php'; ?>
        <script>
            // order
            $(document).ready(function(){
                $('.showdetailMenu').click(function(){
                    var menuID = $(this).attr('data-id');
                    var menuname = $(this).attr('data-menuname');
                    var menuprice = $(this).attr('data-menuprice');

                    $('#menuID').val(menuID);
                    $('#menuname').val(menuname);
                    $('#menuprice').val(menuprice);
                    
                    $('#detailMenu').modal('show');
                });
               
            });
 
        </script>
        

    </body>
</html>

<style>

.nameMenu {
    cursor: pointer;
    text-decoration: none;
    color: white;
    font-size: 18px;

}


a:hover {
    color: black;
}

    
</style>