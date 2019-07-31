<?php
 include '../tmp/connection.php';
 if(isset($_POST['register'])){
    $fname=$_POST['FirstName'];
    $sname=$_POST['SecondName'];
    $username=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $confirmpass=$_POST['Confirmpassword'];
    $name=$fname ." ".$sname; 
    if($password==$confirmpass && strlen($password)>=8){
        $pass=$password;     
   $sql = "INSERT INTO `users`(  `Full Name`, `User name`, `password`, `phone`)  VALUES (' $name','$username','$pass','$phone')";

 
if (mysqli_query($conn, $sql)) {
     echo '("New record created successfully")';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 } else{
     echo ' <h1>Pasword miss matched</h1>';
     echo $password;
     echo $confirmpass;
 }
}
$conn->close();
?>