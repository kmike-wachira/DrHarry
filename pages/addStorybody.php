<!DOCTYPE html>
<html>

<head>
    <title>Add Story</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../custom_css/index.css">
    <link media="screen" rel="stylesheet" href="../custom_css/login1.css">
    <link media="screen" rel="stylesheet" href="../custom_css/w3.css">
</head>


<body class="addpoem">
    <!-- navigation bar -->
    <?php
include 'navbar.php';
         ?>
    <!-- navigation bar -->
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8 col-s-12 holder1">
        <form action="" method="post" autocomplete="off">
            <fieldset>
                <legend>Update the story body</legend>
                <label for="booktitle"> Select Book</label> <br>
                <select class="inputfields" name="bookid" id="booktittle">
                    <?php
                            include '../tmp/connection.php';
                            $stories_sql = "SELECT * FROM books";
                             $result = $conn->query($stories_sql);
                                if ($result->num_rows > 0) { 
                                 while($row = $result->fetch_assoc()) {  
                                    echo' <option value="'.$row['book-id'].'">'.$row['book-tittle'].'</option>';
                                 }
                                }                                                    
                        ?>


                </select> <br>
                <label for="Chapter">Chapter</label><br> <input class="inputfields" type="number" name="Chapter" min="1"
                    required><br>
                <textarea name="storybody" id="storybody" rows="15" cols="25" placeholder="Enter your body here"
                    required></textarea><br>
                <input class="button" type="submit" value="Insert Body" name="addbody"> <input class="button"
                    type="reset" value="clear">

            </fieldset>
        </form>
    </div>

    <div class="col-2"></div>



    </div>
    <?php
    include 'footer.php';
    ?>
    <?php  include 'addStorybac.php';?>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../custom_js/main.js"></script>

</body>

</html>