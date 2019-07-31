


  <!-- Trigger the modal with a button -->
 
  <link media="screen" rel="stylesheet" href="custom_css/login1.css">

  <!-- Modal -->
  <div class="modal fade" id="signinmodal" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title w3-center">Sign in</h4>
        </div>
        <div class="modal-body">

         <!-- login -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6 col-s-12 holder1">
            <form action="pages/login_backend.php" method="post" autocomplete="off">
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
                    <a class="w3-text-white"  href="pages/reg.php">Register/create new account</a>
                   

                </fieldset>

            </form>
        </div>

        <div class="col-3"></div>



    </div>
    <!-- login -->
        

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>

  

 
