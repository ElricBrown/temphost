// Get the container element
// var btnContainer = document.getElementById("mainNav");

// Get all buttons with class="btn" inside the container
// var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
// for (var i = 0; i < btns.length; i++) {
//   btns[i].addEventListener("click", function() {
//     var current = document.getElementsByClassName("active");
//     current[0].className = current[0].className.replace("nav-item active", "nav-item");
//     this.className += " active";
//   });
// } 

$(document).ready(function(){
    $('.nav .nav-item').click(function(){
      $('.nav-item a').removeClass("active");
      $(this).addClass("active");
  });
  });