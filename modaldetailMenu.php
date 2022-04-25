<?php include 'connectDB.php' ;?>
<!DOCTYPE html>
<html>
<?php include 'header.php' ;?>
    <body>
        <!-- pop-up -->
        
        <div class="modal fade" id="detailMenu" role="dialog">
            <div class="modal-dialog">
                <form action="insertOrder.php" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title modalname" id="exampleModalLabel">Coffee Bar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body ms-3" id="showMenu">
                            <!-- Menu -->
                            <div class="">
                                <!-- Table ID -->
                                <div class="mb-3 row">
                                    <label for="tableID" class="col-sm-3 col-form-label"><strong>Teble</strong></label>
                                    <div class="col-sm-4" >
                                        <input type="number" class="form-control" name="tableID" id="tableID" width="20px">
                                    </div>
                                </div>

                                <input type="hidden" name="menuID" id="menuID" value="">
                                <!-- <input type="text" readonly class="form-control-plaintext nameMenuPop"  name="menuname" id="menuname" value="" disabled> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" readonly class="form-control-plaintext nameMenuPop"  name="menuname" id="menuname" value="" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" readonly class="form-control-plaintext" name="menuprice" id="menuprice" value="" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                    <input type="text" readonly class="form-control-plaintext" value="฿" disabled>
                                    </div>
                                </div>
                                
                                <!-- sweet -->
                                <div class="mt-3">
                                    <p class="mt-1 mb-0"><strong>Sweet Level</strong></p>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="sweet" id="sweet0" value="0%">
                                        <label class="form-check-label" for="sweet0">0%</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="sweet" id="sweet25" value="25%">
                                        <label class="form-check-label" for="sweet25">25%</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="sweet" id="sweet50" value="50%">
                                        <label class="form-check-label" for="sweet50">50%</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="sweet" id="sweet75" value="75%">
                                        <label class="form-check-label" for="sweet75">75%</label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="sweet" id="sweet100" value="100%">
                                        <label class="form-check-label" for="sweet100">100%</label>
                                    </div>
                                </div>

                                <!-- Total -->
                                <div class="mb-3 row mt-5">
                                    <label for="amount" class="col-sm-3 col-form-label"><strong>Amount</strong></label>
                                    <div class="col-sm-4" >
                                        <input type="number" class="form-control" name="amount" id="amount" width="20px">
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
        </div>
    </body>
</html>

<style>
body{
  /* background-image: url('img/2.jfif');
  background-size: cover; */
  background-color: #bfbfbf;
}
.nameMenuPop{
    font-size: 18px;
    font-weight: bold;
}

.modalname{
    font-family: 'Fredoka', sans-serif;
}
</style>