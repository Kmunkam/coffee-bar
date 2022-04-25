<?php

$connectDB = mysqli_connect("localhost","root","","coffeebardb");

// Check connection
if (mysqli_connect_error($connectDB)) {
  echo "Failed to connect to MySQL: " ;
};


// $sql = "CREATE TABLE orders (
//           id int(5) AUTO_INCREMENT NOT NULL, 
//           tableID int(5) NOT NULL,
//           menuname varchar(255) NOT NULL,
//           sweet varchar(255),
//           quantity int(5),
//           price int(10),
//           pricetotal int(10),
//           userorder int(10),
//           PRIMARY KEY (id)
//         )";

// $sql1 = "CREATE TABLE RECEIP (
//           orderID int(5) NOT NULL PRIMARY KEY,
//           total int(10),
//           cash int(10),
//           change int(10),
//           order_date varchar(255) 
//         )";


// $sql = "ALTER TABLE coffeemenu
// ADD CONSTRAINT fk_type
// FOREIGN KEY (typemenu)
// REFERENCES typemenu(typeID)";

// $sql = "ALTER TABLE orders
// ADD CONSTRAINT fk_user_order
// FOREIGN KEY (userorder)
// REFERENCES user(id)";

// $sql = "CREATE TABLE orders (
//   id int(5) UNSIGNED AUTO_INCREMENT, 
//   tableID int(5) NOT NULL,
//   menuname varchar(255) NOT NULL,
//   sweet varchar(255),
//   quantity int(5),
//   price int(10),
//   pricetotal int(10),
//   userorder int(10)
//   PRIMARY KEY (id)
// )";

// $sql = "ALTER TABLE orders
// ADD CONSTRAINT fk_order
// FOREIGN KEY (tableID)
// REFERENCES tables(id)";

// $sql = "CREATE TABLE tables (
//         id int(2) AUTO_INCREMENT,
//         tableID int(2),
//         PRIMARY KEY (id),
//         FOREIGN KEY (tableID)
//         REFERENCES receipt(orderID)
//       )";

// $sql = "ALTER TABLE receipt
// ADD CONSTRAINT fk_order
// FOREIGN KEY (table_no)
// REFERENCES tables(id)";

// if (mysqli_query($connectDB, $sql)) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo mysqli_error($connectDB);
// }

?>