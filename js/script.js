
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

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          myFooter.style.position = "fixed";
        } else {
          myFooter.style.position = "relative";
        }
      }


// Checkbox button
function boxChecked() {
    var checkBox = document.getElementById("companyNameCheckbox");
        if (checkBox.checked == true){
            companyChecked.style.display = "block";
        } else {
            companyChecked.style.display = "none";
        }
}

// Footer
myFooter = document.getElementById("overfooter");

// Back to top button
mybutton = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
