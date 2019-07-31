  <!-- Trigger the modal with a button -->
  <link media="screen" rel="stylesheet" href="custom_css/login1.css">

  <!-- Modal -->
  <div class="modal fade" id="registermodal" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title w3-center">Register</h4>
        </div>
        <div class="modal-body">
        <div class="row">
        <div class="col-3"></div>
        <div class="col-6 col-s-12 holder1">
            <form action="pages/registerbackend.php" method="post" autocomplete="off">
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
                    <a class="w3-text-white" href="pages/login.php">Already Have an Account?Login then</a>
                </fieldset>
            </form>
        </div>
        <div class="col-3"></div>
    </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>