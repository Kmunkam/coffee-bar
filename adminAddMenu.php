<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>
        <!-- Navbar -->
        <?php include 'adminNav.php';?>

        <div class="container mt-4">
            <div class="mb-2">
                <a class="btn btn-primary" type="button" onclick="addrow()"><i class="fa-solid fa-plus"></i>&nbsp;Add Menu</a>
            </div>


            <form action="insertMenu.php" method="post">
                <table class="table table-borderless" id="tableAddmenu">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="" >
                                <input type="text" class="form-control" id="menuname" name="name_menu[]">
                            </td>
                            <td class="" width="200">
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="menuprice" name="price_menu[]">
                                    <span class="input-group-text">฿</span>
                                </div>
                            </td>
                            <td class="" width="300">
                                <select class="form-select" name="menu_type[]">
                                    <option selected>Select type Coffee</option>
                                    <option value="1">Coffee</option>
                                    <option value="2">Milk</option>
                                    <option value="3">Tea</option>
                                </select>
                            </td>
                            <td>
                                <input type="hidden" class="form-control" name="date[]" value="<?php echo date("F j, Y, g:i a") ?>">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-3">
                    <button class="btn btn-success mt-3"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Save</button>
                    <button class="btn btn-success mt-3" type="reset"><i class="fa-solid fa-floppy-disk"></i>&nbsp;Reset</button>
                </div>
            </form>
        </div>


        <script>
            function addrow() {
                var table = document.getElementById("tableAddmenu");
                // var row = table.insertRow();
                // row.innerHTML = "";
                var row = table.insertRow(-1)
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                cell1.innerHTML = "<input type='text' class='form-control' id='menuname' name='name_menu[]'>";
                cell2.innerHTML = "<div class='input-group'><input type='number' class='form-control' id='menuprice' name='price_menu[]'><span class='input-group-text'>฿</span></div>";
                cell3.innerHTML = "<select class='form-select' name='menu_type[]'><option selected>Type Coffee</option><option value='1'>Coffeee</option><option value='2'>Milk</option><option value='3'>Tea</option></select>";
                cell4.innerHTML = "<input type='hidden' class='form-control' name='date[]' value='<?php echo date('F j, Y, g:i a') ?>'>";

            }

            // function myDeleteFunction() {
            //     document.getElementById("myTable").deleteRow(0);
            // }
        </script>
    </body>
</html>

<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>