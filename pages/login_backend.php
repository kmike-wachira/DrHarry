<?php
// Start the session
session_start();
?>
<?php


include '../tmp/connection.php';
if(isset($_POST['login'])){
$pass=$_POST['password'];
$user=$_POST['Username'];
$sql="SELECT * FROM `users`WHERE `User name` ='$user' AND `password`='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {    
    header('location:../index.php');         
} else {
    echo 'No identified user';
      header('location:login.php'); 
}
}
?>