<?php
    session_start();
    include 'connectDB.php';

    print_r($_POST);

        $menuID = $_POST['menuID'];
        $menuname = $_POST['name_menu'];
        $menuprice = $_POST['price_menu'];
        $date = $_POST['date'];



        mysqli_query($connectDB,"UPDATE coffeemenu 
                                set menuname='$menuname', 
                                    menuprice='$menuprice',
                                    menuupdate = '$date'
                                WHERE menuID = '$menuID' ");
            

        Header("Location: adminMenu.php");

        ?>
