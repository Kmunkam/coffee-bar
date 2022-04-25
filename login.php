<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>

    <body>
        <div class="container-fluid login">
            <div class="position-absolute top-50 start-50 translate-middle">
                <h1 class="mb-5 px-5">Welcome!</h1>

                <form name="frmlogin"  method="post" action="loginDB.php">
                    <div class="form-floating mb-3 mt-2">
                        <input type="text" class="form-control form-control-lg" name="employeeID" maxlength="10" id="idInput" placeholder="idEmployee" >
                        <label for="idInput" >ID Employee</label>
                    </div>
                    <div class="d-grid gap-2 mt-1">
                        <button class="btn btn-outline-success" type="submit" name="login"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;LOGIN</button>
                    </div>
                </form>

            </div>
        </div>
    </body>
</html>
<style>


</style>