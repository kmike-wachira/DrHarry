<?php
$server="localhost";
$database_username="root";
$database_name="drharry";
$database_password="";

$conn=new mysqli($server ,$database_username,$database_password,$database_name);
 

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} 
?>