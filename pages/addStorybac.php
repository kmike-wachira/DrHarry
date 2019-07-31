<?php
require '../tmp/connection.php';
if(isset($_POST['addbody'])){
$book_chapter=$_POST['Chapter'];
$book_id=$_POST['bookid'];
$body=$_POST['storybody'];
$book_chapter= mysqli_real_escape_string($conn,$book_chapter);
$body= mysqli_real_escape_string($conn,$body);
$sql = "INSERT INTO `books-body`(`chapter`, `book_id`, `body`) VALUES ('$book_chapter','$book_id','$body')";

if (mysqli_query($conn, $sql)) {
  header ('location:addStorybody.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header ('location:addStorybody.php');
}
$conn->close();
}
?>