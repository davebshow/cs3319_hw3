<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "admin";
$dbname = "dbrow52tadb";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
