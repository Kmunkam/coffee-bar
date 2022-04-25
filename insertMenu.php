<?php 
session_start();
include 'connectDB.php' ;

        print_r($_POST);


        $menuname = $_POST['name_menu'];
        $menuprice = $_POST['price_menu'];
        $type = $_POST['menu_type'];
        $date = $_POST['date'];

        $conutmenu = count($menuname);

        for ($i= 0; $i < $conutmenu; $i++) {
                $menuDB = "INSERT INTO coffeemenu (menuname, menuprice, menutype, menuupdate)
                        VALUES ('{$menuname[$i]}','{$menuprice[$i]}','{$type[$i]}', '{$date[$i]}')";
                mysqli_query($connectDB, $menuDB);
        }
        

        // $menuDB = "INSERT INTO coffeemenu (menuname, menuprice, menutype, menuupdate)
        //             VALUES ('$menuname','$menuprice',' $type', '$date')";

        // mysqli_query($connectDB, $menuDB);

        // echo $menuDB;


        if(mysqli_affected_rows($connectDB) > 0) {
                // echo "susseccfully";
                Header("Location: adminMenu.php");
        }else{
                echo mysqli_error(($connectDB));
        }


        // Header("Location: adminMenu.php");



?>