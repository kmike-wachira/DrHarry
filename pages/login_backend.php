<?php
// Start the session
session_start();
?>
<?php
if (isset($_SESSION['user'])){
    unset($_SESSION["user"]);   
}

include '../tmp/connection.php';
if(isset($_POST['login'])){
$pass=$_POST['password'];
$user=$_POST['Username'];
$sql="SELECT * FROM `users`WHERE `User name` ='$user' AND `password`='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {  
    $_SESSION["user"] =$_POST['Username'];
    header('location:../index.php');         
} else {
      header('location:login.php'); 
}
}
?>