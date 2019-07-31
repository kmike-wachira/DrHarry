<?php
 include '../tmp/connection.php';
 if(isset($_POST['addpoem'])){
    $poet=$_POST['poet'];
    $poem_title=$_POST['poemtitle'];
    if(isset($_SESSION["pic"])){
    $image= $_SESSION["pic"];
    }else{
        $image=null;
    }
    $body=$_POST['poembody']; 
  str_replace(" ' ", " \' ",$body );
  str_replace(' " ', " \" ",$body );
 $sql = "INSERT INTO `poems`( `poet`, `poem-title`, `image-link`, `Poem -Body`) VALUES ('$poet','$poem_title','$image','$body')";
if (mysqli_query($conn, $sql)) {
    //  echo '("New record created successfully")';
     session_unset();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 }
$conn->close();
?>