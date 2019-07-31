
function openArticle(evt, cityName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].classList.remove("w3-red");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("w3-red");
}

  
    function w3_open() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    }
    function w3_close() {
        document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    }

    function openNav() {
        document.getElementById("myNav").style.display = "block";
      }
      
      function closeNav() {
        document.getElementById("myNav").style.display = "none";
      }
      
    function myFunction(id) {
    document.getElementById(id).classList.toggle("w3-show");
    document.getElementById(id).previousElementSibling.classList.toggle("w3-red");
}
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


// floating bar
