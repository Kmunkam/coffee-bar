<?php

$connDB = mysqli_connect("localhost","root","","coffeebardb");

// Check connection
if (mysqli_connect_error($connDB)) {
  echo "Failed to connect to MySQL: " ;
};

// CREATE TABLE
// create table ORDER (
//   orderID int(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
// );
// $sql = "CREATE TABLE orders (
//           id int(5) UNSIGNED AUTO_INCREMENT, 
//           tableID int(5) NOT NULL,
//           menuname varchar(255) NOT NULL,
//           sweet varchar(255),
//           quantity int(5),
//           price int(10),
//           pricetotal int(10),
//           userorder int(2)
//           PRIMARY KEY (id),
//           FOREIGN KEY (userorder) REFERENCES RECEIPT(id)
//           FOREIGN KEY (tableID) REFERENCES RECEIPT(orderID)
//         )";
// $sql = " CREATE TABLE receip (
//   orderID int(5) NOT NULL PRIMARY KEY,
//   total int(10),
//   cash int(10),
//   changed int(10),
//   order_date varchar(255) 
// )";


// $sql = "ALTER TABLE coffeemenu
// ADD CONSTRAINT fk_type
// FOREIGN KEY (menutype)
// REFERENCES typemenu(typeID)";

if (mysqli_query($connDB, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo mysqli_error($connDB);
}

?>