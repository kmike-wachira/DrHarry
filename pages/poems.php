<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Poems</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../custom_css/w3.css">
    <link rel="stylesheet" href="../custom_css/index.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../custom_css/poems.css">
</head>

<body style="background:lightgrey;" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
   
   <!-- navigation bar -->
   <?php
include 'navbar.php';
    ?>
       

    <!-- navigation bar -->
    <?php
       echo ' <div class="container  poemRow">
                 <div class="row ">
                 <div  class="w3-card-8 w3-red">
                  <nav class="col-sm-3 col-xs-2" id="myScrollspy">
                   <ul class="nav nav-pills nav-stacked">';  
              include '../tmp/connection.php';
             $poem_sql = "SELECT * FROM poems";
              $poem_result = $conn->query($poem_sql);
               if ($poem_result->num_rows > 0) { 
                   while($poem_row = $poem_result->fetch_assoc()) {
                    echo ' <li class=""><a href="#'.$poem_row['poem-title'].'">'.$poem_row['poem-title'].'</a></li>';
                   }
                  }
                echo'</ul>
              </nav>
              </div>
              <div class="col-sm-9 col-xs-9 section" >';
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
                     <p class="bb" > <pre>'.$poem_row['Poem -Body'].' </pre> </p>  <br>
                      <h4 class="WrittenBy center ">WrittenBy &copy; '.$poem_row['poet'].'</h4>
                      </div>
                      <div class="col-sm-3"></div>
                      </div>
                      </div><br>'; 
                }
               }
                           
            echo'  </div>
            </div>
          </div>';
          ?> 
  <?php
include 'footer.php';
    ?>
    
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../custom_js/main.js"></script>
</body>
</html>