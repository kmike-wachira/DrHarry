<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Stories</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../custom_css/w3.css">
  <link rel="stylesheet" type="text/css" media="screen" href="../custom_css/stories.css">
  <link rel="stylesheet" href="../custom_css/index.css">
  


</head>

<body  style="background:lightgrey;" >
  <!-- navigation bar -->
  <?php 
    include 'navbar.php';  
  ?>
  <!-- navigation bar -->
  <div class="weOffer">
      <h2 class="textBackground"> Available Stories</h2>
    </div>

  <!-- story liner -->
  
  <?php  

    include '../tmp/connection.php';
  $stories_sql = "SELECT * FROM books";
   $result = $conn->query($stories_sql);
      if ($result->num_rows > 0) { 
        echo'  <div class="panel-group" id="accordion">'; 
       while($row = $result->fetch_assoc()) {      
      echo'     
  <div class="panel">
    <div class="panel-heading mylink"  style=" background:#999999;text-transform: uppercase;padding:15px" >
      <h1 class="panel-title" style="text-align:center;font-size:24px">
        <a data-toggle="collapse" data-parent="#accordion" href="#'.$row['book-id'].'" >
        '.$row['book-tittle'].'</a>       
      </h1>
    </div>
    <div id="'.$row['book-id'].'" class="panel-collapse collapse">
      <div class="panel-body"   style=" background:#cccccc;text-transform: uppercase;padding:10px"><h3>'.$row['book-tittle'].'</h3> <br>
      <h4> Author: '.$row["Author"].' </h4> <br>
      <h4> Book id: '.$row["book-id"].' </h4> <br>  
  <button type="button" class=" btn-info btn-lg" data-toggle="modal" data-target="#demo'.$row['book-id'].'">Read  '.$row['book-tittle'].'</button>

      </div>    
    </div>
  </div> <br>
  
  <div class="container">
  
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="demo'.$row['book-id'].'" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content"  style=" background: lightgrey" >
        <div class="modal-header"  style="color:white;background:#999999" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">'.$row['book-tittle'].'</h4>
        </div>
        <div class="modal-body">';
        $openbook=$row['book-id'];
        $story_body_sql = "SELECT * FROM `books-body` WHERE book_id= '$openbook' ";
        $output = $conn->query($story_body_sql);
           if ($output->num_rows > 0) { 
            while($story_body_row = $output->fetch_assoc()) {  
             echo' <div class="panel-group" id="accordion" >
                       <div class="panel" style=" background:#a6a6a6;">
                           <div class="panel-heading">
                              <h1 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#'.$story_body_row["chapter"].$row['book-id'].'">'.$row["book-tittle"]."  "."Chapter".$story_body_row['chapter'].'</a>
                              </h1>
                            </div>
                          <div id="'.$story_body_row["chapter"].$row['book-id'].'" class="panel-collapse collapse ">
                                 <div class="panel-body"  style=" background:#bfbfbf;"><p><pre>'.$story_body_row['body'].'</pre></p></div>
                          </div>
                        </div>            
                     </div>';
            }       
          }
          else{
            echo '<h1>No Yet Released</h1>';
          }
          
       echo' </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div> 
';      
       }
       echo  '</div>';
      }


  
  ?>


<?php
include 'footer.php';
    ?>


  </div>


  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../custom_js/main.js"></script>
</body>

</html>