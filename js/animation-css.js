 (function () {
     $("td").click(function () {
         var animationClassName = $(this).html();
         $(".animation-container img").removeClass();
         $(".animation-container img").addClass("animated");
         $(".animation-container img").addClass(animationClassName);
         $(this).css({
             'backgroundColor': '#a21b5d'
         });
         setTimeout(function () {
             $(".animation-container img").removeClass();
         }, 1000);
     });
 })();