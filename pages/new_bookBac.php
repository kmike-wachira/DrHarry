<?php
require '../tmp/connection.php';
if(isset($_POST['submit'])){
$book_title=$_POST['booktitle'];
$book_id=$_POST['bookid'];
$book_author=$_POST['author'];
$sql = "INSERT INTO `books`(`book-tittle`, `book-id`, `Author`) VALUES ('$book_title','$book_id','$book_author')";

if (mysqli_query($conn, $sql)) {
    header('location:addStorybody.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}


?>