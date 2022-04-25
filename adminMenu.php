<?php 
session_start();
include 'connectDB.php' 
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
        <!-- Navbar -->
        <?php include 'adminNav.php';?>

        <div class="container-fluid">
            <div class="mt-2">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a href="adminAddMenu.php" class="me-auto btn btn-success me-3" type="button"><i class="fa-solid fa-plus"></i>&nbsp;Add New Menu</a>
                        <form class="d-flex">
                            <input class="form-control rounded-0 rounded-start" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success rounded-0 rounded-end" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>

            <!-- table -->
       
            <div class="container-fluid">
                <table class="table table-bordered table-light table-hover mt-3 rounde-2">
                    <thead>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">ID</th>
                            <th scope="col">Name Menu</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th scope="col">Update</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $order =1 ; 
                        $showMenu= mysqli_query($connectDB, "SELECT * FROM coffeemenu
                                                                INNER JOIN typemenu
                                                                ON coffeemenu.menutype = typemenu.typeID");
                        // $showtables= mysqli_query($connectDB, "SELECT * FROM coffeemenu");
                        while($row = mysqli_fetch_assoc($showMenu)) { ?>
                        <tr>
                            <td class="tdcenter"><?php echo $order++ ?></td>
                            <td class="" width='300'><?php echo $row["menuname"] ?></td>
                            <td class="tdcenter" width='150'><?php echo $row["menuprice"] ?></td>
                            <td class="tdcenter" width='200'><?php echo $row["typename"] ?></td>
                            <td><?php echo $row["menuupdate"] ?></td>
                            <td class="tdcenter">
                                <a class="btn btn-primary editMenu" 
                                    data-menuID="<?php echo $row['menuID'];?>"
                                    data-menuname="<?php echo $row['menuname'];?>"
                                    data-menuprice="<?php echo $row['menuprice'];?>"
                                    data-menutype="<?php echo $row['typename'];?>"
                                    ><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</a>
                                <a type="button" href="deleteMenu.php?delete_id=<?php echo $row['menuID'];?>" class="btn btn-danger"
                                onclick="return confirm('delete data <?php echo $row['menuname'];?>')">
                                <i class="fa-solid fa-trash"></i>&nbsp;Del</a>
                            </td>
                            
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        
        <?php include 'adminEditMenu.php'; ?>
        <!-- Show modal edit -->
        <script>
            $(document).ready(function(){
                $('.editMenu').click(function(){
                    var menuID = $(this).attr('data-menuID');
                    var menuname = $(this).attr('data-menuname');
                    var menuprice = $(this).attr('data-menuprice');
                    var menutype = $(this).attr('data-menutype');
                    
                    $('#menuID').val(menuID);
                    $('#menuname').val(menuname);
                    $('#menuprice').val(menuprice);
                    $('#menutype').val(menutype);
                   

                    //show modal
                    $('#editMenu').modal('show');
                });
            });
 
        </script>
    </body>
</html>

<style>

.btntext a{
    color: white;
}

.btntext button:hover{
    color: red;
    }
th{
    text-align: center;
}
.tdcenter{
        text-align: center;
    }

</style>