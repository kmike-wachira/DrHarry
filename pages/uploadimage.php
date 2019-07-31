
<?php
if ( isset( $_POST [ "submit" ])) {
    $target_dir = "../images/" ;
$target_file = $target_dir . basename( $_FILES [ "fileToUpload" ][ "name" ]);
$uploadOk = 1 ;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize( $_FILES
[ "fileToUpload" ][ "tmp_name" ]);
if ($check !== false) {
// echo "File is an image - " . $check[ "mime" ] . "." ;
$uploadOk = 1;
} else {
    $error=  "File is not an image." ;
$uploadOk = 0;
}

// Check if file already exists
if (file_exists($target_file)) {
    $error="Sorry, file already exists." ;
$uploadOk = 0 ;
}
// Check file size
if ( $_FILES [ "fileToUpload" ][ "size" ] >
50000000 ) {
    $error= "Sorry, your file is too large." ;
$uploadOk = 0 ;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
$error= "Sorry, only JPG, JPEG, PNG & GIF files are allowed." ;
$uploadOk = 0 ;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 ) {
    $error= "Sorry, your file was not uploaded." ;
// if everything is ok, try to upload file
} else {
if (move_uploaded_file( $_FILES
[ "fileToUpload" ][ "tmp_name" ], $target_file)) {
// echo "The file " . basename( $_FILES
// [ "fileToUpload" ][ "name" ]). " has been uploaded.<br>" ;
// echo   basename( $_FILES [ "fileToUpload" ][ "name" ]);
 $pic_name = $target_dir.basename( $_FILES [ "fileToUpload" ][ "name" ]);
//  echo $pic_name;
 $pic=basename( $_FILES [ "fileToUpload" ][ "name" ]);
 $_SESSION["pic"]=basename( $_FILES [ "fileToUpload" ][ "name" ]);
} else {
    $error= "Sorry, there was an error uploading your file." ;
}
}
}else{

}
function error(){
    if(isset($_SESSION["pic"])){
        global $error;
    echo '<div class="alert alert-warning">
    <a href="#alert" class="close" data-dismiss="alert" id="alert" aria-label="close">&times;</a>
       <strong> '.$error.'</strong>
        </div>';
    }
}

function myImage(){
    if(isset($_SESSION["pic"])){
        global $pic_name;                
        echo'<img class="thePoemimage" src="'.$pic_name.'" alt=" thePoemimage"><br>';              
            }else{
              $pic_name="noImage";
              error();
                echo'<img class="thePoemimage" src="'.$pic_name.'" alt=" thePoemimage"><br>';  
      } 
}



?>




