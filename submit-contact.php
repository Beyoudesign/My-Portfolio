<?php

   // get the data to insert into the db
   $name = $_POST["name"];
   $email = $_POST["email"];
   $date = $_POST["date"];
   $content = $_POST["contact"];

// insert the data with the sql query
   include_once 'dbh.inc.php';
   $sql="INSERT INTO contact (name, date, email, contact) VALUES ('" .     
       $name . "','" .  $date . "','" . $email . "','" . $contact . "')";
   $result = mysqli_query($conn, $sql);

   // redirect to contact
   header("Location: contact.php");
?>