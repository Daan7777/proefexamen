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
