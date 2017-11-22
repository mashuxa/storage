 (function () {
     $(".animation-container-cc img").click(function () {
         var animationPlayState = $(this).css("animation-play-state");
         var imgClass = $(this).attr("class");
         console.log("." + imgClass);
         if (animationPlayState == "paused") {
             $("." + imgClass).css("animation-play-state", "running");
         }
         else {
             $("." + imgClass).css("animation-play-state", "paused");
         }
     });
 })();
 (function () {
     $("img").each(function () {
         var elemClass = $(this).attr("Class");
         var elemTitle = $(this).attr("title", elemClass);
     });
 })();