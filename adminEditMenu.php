<!DOCTYPE html>
<html>
    <?php include 'header.php' ;?>
    <body>

        <!-- Edit Menu Modal -->

        <div class="modal fade" id="editMenu" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editMenuLabel">Edit Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="updateMenu.php" method="post">
                        <input type="hidden" class="form-control" id="menuID" name="menuID" value="">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="menuname" class="form-label">Name</label>
                                <input type="text" class="form-control" id="menuname" name="name_menu" value="">
                            </div>
                            <div class="col-md-2 ">
                                <label for="menuprice" class="form-label">Price</label>
                                <input type="text" class="form-control" id="menuprice" name="price_menu" value="">
                            </div>
                            <div class="col-md-4">
                                <label for="menutype" class="form-label">Type</label>
                                <select class="form-select" name="menu_type" id="menutype">
                                    <option selected>Type Coffee</option>
                                    <option value="1">Coffee</option>
                                    <option value="2">Milk</option>
                                    <option value="3">Tea</option>
                                </select>
                            </div>
                            <div class="">
                                <input type="hidden" name="date" value="<?php putenv("TZ=Asia/Bangkok"); echo date("F j, Y, g:i a") ?>">
                            </div>
                            
                        
                        </div>
                    
                        <!-- button -->
                        <div class="mt-3">
                            <input type="submit" value="Update" class="btn btn-success mt-3">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>