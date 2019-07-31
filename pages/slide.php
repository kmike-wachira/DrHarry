<div class="w3-content slide-content" style="max-width:100%;position:relative;">
<div class="mySlides sliding-div" >
  <img src="images/16..jpg" style="width:100%;">
  <div class="display-text ">
   <h2 class=" sliderHeading2  w3-animate-left  w3-center">Books</h2>
   <p   class="slider-paragraph">Read some of our exciting books/stories.</p>
   <a href="pages/stories.php"><button class="w3-btn btn4slide w3-khaki w3-padding-10">Read</button></a>    
  </div>
</div>

<div class="mySlides sliding-div" >
  <img src="images/16..jpg" style="width:100%;">
  <div class="display-text ">
   <h2 class=" sliderHeading2  w3-animate-left" style="">Poems</h2>
   <p  class="slider-paragraph">Get a range of beautifully written poems</p>
   <a href="pages/poems.php"><button class="w3-btn btn4slide w3-khaki w3-padding-10">Read</button></a>    
  </div>
</div>
<div class="mySlides sliding-div" >
  <img src="images/16..jpg" style="width:100%;">
  <div class="display-text ">
   <h2 class=" sliderHeading2 w3-animate-left " style="">Join team</h2>
   <p  class="slider-paragraph">Join the writers team by signing in from the link below</p>
   <a href="pages/reg.php"><button class="w3-btn btn4slide w3-khaki w3-padding-10">Join Here</button></a>    
  </div>
</div>



<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:50%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:50%;right:0" onclick="plusDivs(1)">❯</a>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000);    
}
</script>
