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


