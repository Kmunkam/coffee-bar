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
                        <a href="adminAddUser.php" class="me-auto btn btn-success me-3" type="button"><i class="fa-solid fa-plus"></i>&nbsp;Add User</a>
                        <form class="d-flex">
                            <input class="form-control rounded-0 rounded-start" type="search" placeholder="Search" onkeyup="myFunction()" id="myInput">
                            <button class="btn btn-success rounded-0 rounded-end" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>

            <!-- table -->
            <div class="container-fluid mt-3">
                <table class="table table-light table-hover table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" >Employee ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $showuser= mysqli_query($connectDB, "SELECT * FROM user
                                                             INNER JOIN roleuser
                                                             ON user.roleuser = roleuser.roleID");
                        // $showuser= mysqli_query($connectDB, "SELECT * FROM user");
                        while($row = mysqli_fetch_array($showuser)) {?>
                            
                        <tr> 
                        <td class="tdcenter"><?php echo $no++; ?></td>
                            <td class="tdcenter"><?php echo $row["employeeID"] ?></td>
                            <td><?php echo $row["fname"]. "&nbsp;&nbsp;&nbsp;" . $row["lname"] ?></td>
                            <td class="tdcenter"><?php echo $row["phone"] ?></td>
                            <td class="tdcenter"><?php echo $row["rolename"] ?></td>
                            
                            <td class="tdcenter">
                                <a class="btn btn-primary editUser" href="#editUser"
                                data-id="<?php echo $row['id'];?>"
                                data-employeeID="<?php echo $row['employeeID'];?>"
                                data-fname="<?php echo $row['fname'];?>"
                                data-lname="<?php echo $row['lname'];?>"
                                data-phone="<?php echo $row['phone'];?>"
                                data-role="<?php echo $row['roleuser'];?>"
                                ><i class="fa-solid fa-pen-to-square"></i>&nbsp;Edit</a>
                                
                                <a type="button" href="deleteUser.php?delete_id=<?php echo $row['id'];?>" class="btn btn-danger"
                                onclick="return confirm('delete data <?php echo $row['fname']. '&nbsp;&nbsp;&nbsp;' .$row['lname'];?>')">
                                <i class="fa-solid fa-trash"></i>&nbsp;Del</a>
                            </td>
                        
                            <?php } ?> 
                        </tr>
                
                    </tbody>
                </table>
            </div>

        </div>

        <?php include 'adminEditUser.php'; ?>
        <script>
            // show modal edit user
            $(document).ready(function(){
                $('.editUser').click(function(){
                    var id = $(this).attr('data-id');
                    var employeeID = $(this).attr('data-employeeID');
                    var fname = $(this).attr('data-fname');
                    var lname = $(this).attr('data-lname');
                    var phone = $(this).attr('data-phone');
                    var role = $(this).attr('data-role');

                    $('#iduser').val(id);
                    $('#employeeID').val(employeeID);
                    $('#fname').val(fname);
                    $('#lname').val(lname);
                    $('#phone').val(phone);
                    $('#roleuser').val(role);

                    //show modal
                    $('#editUser').modal('show');
                });
            });

            // search
            function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                // td = tr[i].getElementsByTagName("td")[1];
                td = tr[i].getElementsByTagName("td")[2];
                // td = tr[i].getElementsByTagName("td")
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }
 
        </script>

        
    </body>
</html>

<style>
    .btntext a{
        color: white;
    }
    th{
        text-align: center;
    }
    .tdcenter{
        text-align: center;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    table{
        font-size: 16px;
    }
</style>