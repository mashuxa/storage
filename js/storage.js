var imgDirectory = "all-imgs";
var imgWrapper = $(".imgs-container");
(function () {   
 

 
$(".directory").click(function () { 
        $(".choose-folder").remove(); 
});  
$(".btn.clear").click(function () { 
    imgWrapper.empty(); 
});  
    
$(".btn.remove-first").click(function () { 
    $('.imgs-container img').filter( ':first' ).remove(); 
});      
$(".btn.remove-last").click(function () { 
    $('.imgs-container img').last().remove(); 
});  

$("span").click(function () { 
    $(this).parent().children("ul").slideToggle(); 
    $(this).toggleClass("open"); 
});
 
 
$(".directory img").click(function () {  
    var imgClone = $(this).clone();
    imgClone.appendTo(imgWrapper);
}); 



$(".directory span").click(function () {  
    var imgCurrently = $(this).parent().children("img"); 
    imgCurrently.clone().appendTo(imgWrapper);  
}); 
 

$(".imgs-container").click(function () { 
    $('.imgs-container img').toggleClass("big-size"); 
}); 
    
    }());