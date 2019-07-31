

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
  
     <!-- navigation bar -->
     <?php
include 'navbar.php';
    ?>
  <!-- navigation bar -->
   <!-- login -->
   <div class="row">
        <div class="col-3"></div>
        <div class="col-6 col-s-12 holder1">
            <form action="login_backend.php" method="post" autocomplete="off">
                <fieldset>
                    <legend>Login</legend>
                    <div class="row">
                        <div class="col-12 col-s-12">
                            <label for="Username">Username</label> <br> <input class="inputfields" type="email"
                                name="Username"><br><br>
                        </div>
                       
                    </div>
                    <label for="password">Password</label> <br> <input class="inputfields" type="password"
                        name="password"><br><br>
                    <input type="submit" value="Login" name="login" class="button"> <br>
                    <a class="w3-text-white" href="reg.php">create new account</a>
                   

                </fieldset>

            </form>
        </div>

        <div class="col-3"></div>



    </div>
    <?php
include 'footer.php';
    ?>
    
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../custom_js/main.js"></script>
    <!-- login -->
</body>
</html>


