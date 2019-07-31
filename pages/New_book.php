

<!DOCTYPE html>
<html>

<head>
    <title>New Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
      <link rel="stylesheet" href="../custom_css/index.css">
     <link media="screen" rel="stylesheet" href="../custom_css/login1.css">
    <link media="screen" rel="stylesheet" href="../custom_css/w3.css">
</head>


<body class="addpoem">
<?php 
    include 'navbar.php';
    include 'new_bookBac.php';
    ?>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 col-s-12 holder1">
            <form action="" method="post" autocomplete="off">
                <fieldset>
                    <legend>Add a new book</legend>
                    <label for="booktitle">Book tittle</label> <br> <input class="inputfields" type="text"
                        name="booktitle" required><br>
                    <label for="bookId">Book Id</label><br> <input class="inputfields" type="number" min="1000" name="bookid" required ><br>
                    <label for="author">Author</label> <br> <input class="inputfields" type="text" name="author" required ><br>
                    <input class="button" type="submit" name="submit" value="Add book">
                   
                </fieldset>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
    <?php 
    include 'footer.php';  
  ?>
   <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../custom_js/main.js"></script>
</body>
</html>


