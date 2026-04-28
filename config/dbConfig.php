<?php
$hn = "localhost";
$un = "lucky"; // your database user name
$pw = "1R]Ado463mAkcB5u"; // your database user password
$db = "database_madmark"; // this will be your database name


// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>