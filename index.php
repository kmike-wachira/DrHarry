<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DrHarry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="custom_css/index.css">
  <link rel="stylesheet" href="custom_css/w3.css">
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">

<!-- Font awesome -->
<link href="fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="flat-icon/flaticon.css">



</head>


<body  style="background:lightgrey;">
  <!-- navigation bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" 
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
        <a class="navbar-brand" href="#">Dr Harry</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="pages/poems.php">Poetry</a></li>
          <li><a href="pages/stories.php">Books</a></li>
          <li><a href="pages/addpoem.php">Add poem</a></li>
          <li class="w3-dropdown-hover w3-hover-brown">
            <a class="w3-hover-brown" href="#">Add book<span class="caret"></span></a>
            <div class="w3-dropdown-content w3-light-grey  w3-card-4">
              <a  class="w3-text-black" href="pages/New_book.php">New book</a>
              <a class="w3-text-black"  href="pages/addStorybody.php">Continuation</a>
            </div>
          </li>

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




  <?php 
    include 'pages/slide.php';
  
  ?>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="glyphicon glyphicon-chevron-up"></i></button>
  <div class="w3-container">
  <div class="weOffer">
      <h2 class="textBackground">Who we are</h2>
    </div>

    <div class="w3-card-6 introduction">
      <div class="w3-container w3-light-grey w3-leftbar w3-rightbar w3-border-brown about_note ">
        <p class="text">Dr Harry poetic empire is an online  Organisation started on the year 2019 with the hope 
          of creating a platform where young and upcoming writers can have a place to show case their writting skills.
          We believe that no talent should go to waste without proper utilisation.
        </p>
      </div>

    </div>
    
    <!-- info cards  -->
    <!-- intro statement -->
    <div class="weOffer">
      <h2 class="textBackground"> What we have for you</h2>
    </div>
    <!-- intro statement -->
     <div class="container-fluid">
    <div class="row rowz">
      <!-- card 1 -->
      <div class="col-md-3 col-xs-12  cardbackground ">
        <div class="introCards ">
        <div class="w3-container img-container">
          <img src="images/poem.jpg" class="intro-images" alt="poetry">
          <div class="topright w3-center"><h3>Poetry</h3></div>
         </div>   
         <hr>      
            <p class="infoText">Poetry is an echo asking a shadow to dance.We as Dr Harry have gathered some amusing poems that 
            brightens up your day and soothes your heart.Click the button below to read these poems</p>
          
         <a href="pages/poems.php"><button class="w3-btn btn w3-khaki">Read poems</button></a> 
        </div>
      </div>
      <div class=" col-md-1"></div>

      <!-- card 2 -->
      <div class="col-md-3 col-xs-12  cardbackground ">
        <div class="introCards ">
        <div class="w3-container img-container">
          <img src="images/story.jpg" class="intro-images" alt="poetry">
          <div class="topright w3-center"><h3>Stories</h3></div>
         </div>   
         <hr>      
            <p class="infoText">We do believe that in reading stories ,one acquires knowledge ,improves memory and reduces  stress.Thats why
            we have a couple of inspiring stories that will do all the magic for you.Rad our stories by clicking the button below</p>
          
       <a href=""> <button class="w3-btn btn w3-khaki">Read Story</button></a>  
        </div>
      </div>
      
      <div class=" col-md-1"></div>
      <!-- card 3 -->
      <div class="col-md-3 col-xs-12  cardbackground ">
        <div class="introCards ">
        <div class="w3-container img-container">
          <img src="images/team.png" class="intro-images" alt="poetry">
          <div class="topright w3-center"><h3>Team Work</h3></div>
         </div>   
         <hr>      
            <p class="infoText">To achieve our main purpose,we need your contribution in writing since we are all talented
            differently in this field in reaching different audiences.<a href="#registermodal" data-toggle="modal">Sign up </a>with us to become part of the team</p>
          
         <a href="pages/reg.php"> <button class="w3-btn btn w3-khaki">read more</button></a>
        </div>
      </div>

    </div>
    </div>
    <!-- info cards -->

    <!-- Team Statement -->
    <div class="weOffer">
      <h2 id="textBackground"> Our team</h2>
    </div>
    <!-- Team statement -->
    <div class="container-fluid w3-white ">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="images/harry.jpg" alt="poetry" class="team-images"><br>
            <div class="item-description">
              <h4>Harry Warren</h4>
              <p>A student at Strathmore  university and also the team leader at DrHarry Poetic empire</p>
              <h5>Contact:07000000000</h5>
            </div>
          </div>

          <div class="item">
            <img src="images/mike.jpg" alt="Stories" class="team-images"><br>
            <div class="item-description">
              <h4>Michael Kariuki</h4>
              <p> A student at Maseno university. He is a contributor and co-founder</p>
              <h5>Contact:0790960000</h5>
            </div>
          </div>

          <div class="item">
            <img src="images/padona.jpg" alt="poetry" class="team-images"><br>
            <div class="item-description">
              <h4>Alfred Obach</h4>
              <p>A student at Maseno university. He is a contributor and co-founder</p>
              <h5>Contact:0790964507</h5>
            </div>
          </div>
        </div>
        <br><br><br>
        <!-- Indicators -->
        <ol class="carousel-indicators ">
          <li class="w3-black" data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li  class="w3-black" data-target="#myCarousel" data-slide-to="1"></li>
          <li  class="w3-black" data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>


      </div>
    </div>

   
   
  </div>

  <?php 
   include 'pages/footer.php';
  include 'pages/register.php';
  include 'pages/signin.php';
  ?>
 <script>
 window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 30) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
 </script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="custom_js/main.js"></script>
</body>

</html>