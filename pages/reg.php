

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
  <div class="row">
        <div class="col-3"></div>
        <div class="col-6 col-s-12 holder1">
            <form action="registerbackend.php" method="post" autocomplete="off">
                <fieldset>
                    <legend>Data Collection</legend>
                    <div class="row">
                        <div class="col-6 col-s-12">
                            <label for="FirstName">First Name</label><br> <input class="inputfields" type="text"
                                name="FirstName" required>
                        </div>
                        <div class="col-6 col-s-12">
                            <label for="SecondName">Second Name</label> <br> <input class="inputfields" type="text"
                                name="SecondName" required><br>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-6 col-s-12">
                                    <label for="email">Email</label> <br> <input class="inputfields" type="email" name="email" required><br><br>
                            </div>
                            <div class="col-6 col-s-12">
                                    <label for="phoneNumber">Phone</label> <br> <input class="inputfields" name="phone" type="text" required><br><br>
                            </div>
                        </div>
                    <label for="password">Password</label> <br>  <input class="inputfields" type="password"
                        name="password" required><br><br>
                    <label for="Confirmpassword">Confirm Password</label> <br><input class="inputfields" type="password"
                        name="Confirmpassword" required><br><br>
                    <input type="submit" value="Sign Up" name="register" class="button">
                    <input type="reset" value="Clear  fields" class="button"> <br>
                    <a class="w3-text-white" href="login.php">Already Have an Account?Login then</a>
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
</body>
</html>


