<?php
    session_start();
    include 'connectDB.php';
    print_r($_POST);

    $menuID = $_POST['menuID'];
    // $menuname = $_POST['menuname'];
    $tableID = $_POST['tableID'];
    $sweetLevel = $_POST['sweet'];
    $amount = $_POST['amount'];

    $employeeID = $_SESSION['employeeID'];
    // echo $employeeID;
    
    $userID = mysqli_query($connectDB, "SELECT * FROM user");

    while($row = mysqli_fetch_assoc($userID)) {
        if($row['employeeID'] == $_SESSION['employeeID']){
            $id = $row['id'];
        }
    };
    
    // echo 'id = '.$id;

    
    $menu = mysqli_query($connectDB, "SELECT menuname, menuprice 
                                      FROM coffeemenu 
                                      WHERE menuID = $menuID");
    while($row = mysqli_fetch_assoc($menu)) {
        $name = $row['menuname'];
        $price = $row['menuprice'];
    };
    // echo '</br>'.$name.'</br>';
    // echo $price.'</br>';
    $pricetotal = $amount*$price;
    // echo $pricetotal.'</br>';

    

    $order = "INSERT INTO orders (tableID, menuname, sweet, amount, price, pricetotal, userorder)
            VALUES ('$tableID', '$name', '$sweetLevel', '$amount', '$price', '$pricetotal', '$id')";

    mysqli_query($connectDB, $order);

    // Header("Location: order.php");

    // echo $order;

    if(mysqli_affected_rows($connectDB) > 0) {
        // echo "susseccfully";
        Header("Location: order.php");
    }else{
        echo mysqli_error(($connectDB));
    }


?>