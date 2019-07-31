<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../custom_css/w3.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../custom_css/index.css"> 
  <link rel="stylesheet" type="text/css" media="screen" href="../custom_css/poems.css">
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../flat-icon/flaticon.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.w3-opennav{
position:fixed;
top:60px;

}
.w3-main{
  margin-left:300px
}
.w3-sidenav{
  width:300px;
  top:65px;
  font-size:20px;
  text-align:center;
 color:white;
  list-style-type:none;
  background:#999999;
}
</style>
 
</head>

<body>
<?php
include 'navbar.php';
    ?>
  <nav class="w3-sidenav w3-text-white w3-collapse  w3-card-2 w3-animate-left" style="">
    <a href="javascript:void(0)" onclick="w3_close()" 
    class="w3-closenav w3-large w3-hide-large">Close ×</a>
    <?php
      include '../tmp/connection.php';    
      $poem_sql = "SELECT * FROM poems";
      $poem_result = $conn->query($poem_sql);
       if ($poem_result->num_rows > 0) { 
           while($poem_row = $poem_result->fetch_assoc()) {
            echo ' <li class=""><a href="#'.$poem_row['poem-title'].'">'.$poem_row['poem-title'].'</a></li>';
           }
          }
    ?>		
  </nav>

  <div class="w3-main w3-white " style="">
  <span class="w3-opennav w3-btn-floating w3-white w3-xlarge w3-hide-large" style="top:60px;right:20px "onclick="w3_open()">☰</span>

  <?php
  $poem_sql = "SELECT * FROM poems";
              $poem_result = $conn->query($poem_sql);
              if ($poem_result->num_rows > 0) { 
                while($poem_row = $poem_result->fetch_assoc()) {
               echo'  <div class="sections w3-text-black w3-card-8  w3-animate-top" id="'.$poem_row['poem-title'].'" style="background:#cccccc">
                        <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 col-xs-12">
                        <p class="heading center"><b>'.strtoupper($poem_row['poem-title']).'</b> </p>
                         <div class="center">
                          <img class="poemImage w3-border w3-padding"src="../images/'.$poem_row['image-link'].'" alt="">
                         </div>
                       <h3 class="center">'.$poem_row['poem-title'].'</h3>
                     <p> <pre>'.$poem_row['Poem -Body'].' </pre> </p>  <br>
                      <h4 class="WrittenBy center ">WrittenBy &copy; '.$poem_row['poet'].'</h4>
                      </div>
                      <div class="col-sm-3"></div>
                      </div>
                      </div><br>'; 
                }
               }

               
               include 'footer.php';
               ?>
              
       
  </div>
  <script>
  function w3_open() {
      document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
  }
  function w3_close() {
      document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
  }
  </script>    
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../custom_js/main.js"></script>
  </body>
</html>