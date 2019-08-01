
<?php

if (isset($_SESSION['user'])){
  echo '<nav class="navbar navbar-inverse navbar-fixed-top navy " 
  style="background-color:rgb(102, 51, 0);
      border-radius:10px;
      padding: 5px;
      font-size: 22px;
      color: black; ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">Dr Harry</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="pages/poems.php">Poetry</a></li>
          <li><a href="pages/stories.php">Books</a></li>
          <li><a href="pages/addpoem.php">Add poem</a></li>
            <li class="w3-dropdown-hover w3-hover-brown">
              <a class="w3-hover-brown" href="#">Add book<span class="caret"></span></a>
              <div class="w3-dropdown-content w3-light-grey w3-card-4">
              <a  class="w3-text-black" href="pages/New_book.php">New book</a>
              <a class="w3-text-black"  href="pages/addStorybody.php">Continuation</a>
              </div>
            </li>
  
          </ul>
          <ul class="nav navbar-nav navbar-right">
         <li class="w3-dropdown-hover w3-hover-brown">
          <a class="w3-hover-brown  w3-border w3-round-xlarge" href="#">'; echo $_SESSION['user'];echo'<span class="caret"></span></a>
             <div class="w3-dropdown-content w3-light-grey w3-card-4">
            <a class="w3-text-black" href="pages/logout.php">Logout</a>
          </div>
        </li>
          </ul>
        </div>
      </div>
    </nav> <br><br> <br><br>';
  
}else{
  echo '
  <nav class="navbar navbar-inverse navbar-fixed-top navy " 
style="background-color:rgb(102, 51, 0);
    border-radius:10px;
    padding: 5px;
    font-size: 22px;
    color: black; ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Dr Harry</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
          <li><a href="pages/poems.php">Poetry</a></li>
          <li><a href="pages/stories.php">Books</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#signinmodal" data-toggle="modal"><span class="glyphicon  glyphicon-log-in"></span>Login<i
              class="fa fa-caret-down"></i></a>
        </li>
        <li> <a href="#registermodal" data-toggle="modal"><span class="glyphicon glyphicon-user"
              data-target=""></span> Sign up<i class="fa fa-caret-down"></i></a></li>
      </ul>
      </div>
    </div>
  </nav> <br><br> <br><br>
  <!-- navigation bar -->
  
  ';
}
?>
