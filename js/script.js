//scroll function for footer//
    var $window = $(window);
    var $box = $("#overfooter");

    $window.scroll(function() {
        var scrollTop = $window.scrollTop();
    
        if (scrollTop >= 200) {
        $box.css("position","relative")
        }else if (scrollTop <= 900)
        $box.css("position","fixed")
    });


// Footer
myFooter = document.getElementById("overfooter");

// Back to top button
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
    myFooter.style.position = "fixed";
  } else {
    mybutton.style.display = "none";
    myFooter.style.position = "relative";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
