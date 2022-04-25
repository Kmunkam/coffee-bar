<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
        <!-- edit modal -->
        <div class="modal fade" id="editUser" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserLabel">Employee</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="updateUser.php" method="post" class="">
                            <div class="mb-1 row">
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="iduser" name="iduser" value="">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="employeeID" class="col-sm-3 col-form-label">Employee ID</label>
                                <div class="col-sm-6">
                                    <!-- <input type="number" class="form-control" id="employeeID" name="employeeID" maxlength="10" value="" disabled readonly
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"> -->
                                    <input type="text" class="form-control" id="employeeID" name="employeeID" maxlength="10" value="">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="fname" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="fname" name="fname" value="">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="lname" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lname" name="lname" value="">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <label for="phone" class="col-sm-3 col-form-label">Phone number</label>
                                <div class="col-sm-6">
                                    <input type="number" value=""
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    class="form-control" id="phone" name="phone" pattern="\d*" maxlength="10">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="roleuser" class="col-sm-3 col-form-label">Role User</label>
                                <div class="col-sm-6">
                                    <select class="form-select" name="roleuser">
                                        <option selected ></option>
                                        <option value="1">Admin</option>
                                        <option value="2">Employee</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" value="Save" class="btn btn-success mt-3">
                        
                        </form>
                    </div>
                </div>
            </div>
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