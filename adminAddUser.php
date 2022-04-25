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



        <div class="container mt-4">
            <!-- <div class="">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="btn btn-primary" type="button" href="#">Add Menu</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="btn btn-success me-2" type="button" href="#">Save</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" type="button" href="#">Cancel</a>
                    </li>
                </ul>
            </div> -->

            <form action="insertUser.php" method="post" class="mt-5">
            <div class="mb-3 row">
                <label for="employeeID" class="col-sm-2 col-form-label">Employee ID</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="employeeID" name="employeeID" maxlength="10">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="fname" name="fname">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="lname" name="lname">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-6">
                    <input type="number" 
                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    class="form-control" id="phone" name="phone" pattern="\d*" maxlength="10">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="roleuser" class="col-sm-2 col-form-label">Role User</label>
                <div class="col-sm-6">
                    <select class="form-select" aria-label="Default select example" name="roleuser">
                        <option selected>select role user</option>
                        <option value="1">Admin</option>
                        <option value="2">Employee</option>
                    </select>
                </div>
            </div>

            <div>
                <a href="adminManageUser.php" class="btn btn-success mt-3"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Back</a>
                <button class="btn btn-success mt-3"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Add Employee</button>
                <button class="btn btn-success mt-3" type="reset"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Reset</button>
            </div>
        </form>
        </div>
    </body>
</html>


<style>

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }


</style>