<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add poem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../custom_css/index.css">
    <link media="screen" rel="stylesheet" href="../custom_css/login1.css">
    <link media="screen" rel="stylesheet" href="../custom_css/w3.css">
</head>

<body class="w3-container addpoem">
    <!-- navigation bar -->

  <!-- navigation bar -->
  <?php 
  include 'navbar.php';
  include 'uploadimage.php' ;
  include 'addpoembackend.php' ;
  ?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 col-s-12 holder1 holderpoem">

        <fieldset>
        <button onclick="document.getElementById('uploadimage').style.display='block'" class="w3-btn">Add Image</button>
            <form action="" method="post" autocomplete="off"> 
                <?php
                // called from uploadimage.php
                  myImage();
                    ?>               
                    <legend>Add a Poem</legend>
                    <label for="poemtitle">Poem title</label><br> <input class="inputfields" type="text"
                        name="poemtitle" required> <br>
                    <label for="poet">Poet </label><br> <input class="inputfields" type="text" name="poet" required><br>
                    <textarea name="poembody" id="poembody" rows="10" cols="25"
                        placeholder="Write your poem here" required></textarea><br>
                    <input class="button" type="submit" name="addpoem" value="Add poem">
                </fieldset>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
    </div>
   
  </div>
</div> 

<div id="uploadimage" class="w3-modal w3-center">
  <div class="w3-modal-content">
    <header class="w3-container "> 
      <span onclick="document.getElementById('uploadimage').style.display='none'" 
      class="w3-closebtn">×</span>
       <h3>Choose your image</h3>
    </header>
    <div class="w3-container w3-center">
    <form action="" method ="post" enctype ="multipart/form-data"  class="" >     
          <input type ="file" name ="fileToUpload" id ="fileToUpload">
          <input type ="submit" value ="Upload Image" name ="submit"><br>
    </form>
    </div>    
  </div>
</div>
<?php
include 'footer.php';
    ?>
     <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../custom_js/main.js"></script>
</body>

</html>
