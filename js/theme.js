jQuery.noConflict()
jQuery(document).ready(function(){
    (function($){

    $(document).ready(function(){
      $(".footer-button").click(function(){
        $(".footer-slider").slideToggle(500);
        
      });
    });

   $(document).ready(function(){
      $("#dot5").click(function(){
        $(".gamer").slideToggle(500);
        
      });
    });


    $(document).ready(function(){
    $("#dot5").hover(
        function(){
            $(this).stop().animate({width: '140px'});
        },
        function(){
            $(this).stop().animate({width: '65px'});
        }
    );                             
});

var open = $('.open'),
    a = $('ul').find('a');

console.log(a.hasClass('active'));

open.click(function(e){
    e.preventDefault();
    var $this = $(this),
        speed = 500;
    if(a.hasClass('active') == false) {
        $this.addClass('active').next('.box').fadeIn(speed);
    } else {
        a.removeClass('active').next('.box').fadeOut(speed);
        $this.addClass('active').next('.box').delay(speed).fadeIn(speed);
    }

    $(".absolutepos").each(function() {
        $(this).parent().css("height",$(this).height());
});
    
});

function logo() {
$(".dot1").hide().delay(250).show("slow");
$(".dot2").hide().delay().show("slow");
$(".dot3").hide().delay(500).show("slow");
$(".dot4").hide().delay(150).show("slow");
$(".dot5").hide().delay(1000).show("slow");
$(".dot6").hide().delay(700).show("slow");
$(".dot7").hide().delay(1250).show("slow");
}


$(document).ready(logo);



    })(jQuery);
 
});