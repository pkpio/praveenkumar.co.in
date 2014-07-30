// For one-page scroll
$(document).ready(function() {
                
    $(".main").onepage_scroll({
       sectionContainer: "section", 
       easing: "ease",
       animationTime: 1000,
       pagination: false,
       updateURL: false
    });
    
    $(".preview-menu-text-container li ").hover(function(){
        var index = $(".preview-menu-text-container li ").index($(this));
        var test = index + 1;
        $(".preview-menu-image-container li:nth-child("+test+")").css("background","#FFFFFF");
    },function(){
        var index = $(".preview-menu-text-container li ").index($(this));
        var test = index + 1;
        $(".preview-menu-image-container li:nth-child("+test+")").css("background","RGBA(10,160,10,0.5)");
    });
    
     $(".preview-menu-image-container li ").hover(function(){
        $(this).css("background","#FFFFFF");
    },function(){
        $(this).css("background","RGBA(10,160,10,0.5)");
    });
                
});

// For slider
$(function(){
     $('#slider1').liquidSlider({        
         includeTitle:true,
         autoHeight:false,
         slideEaseFunction:'animate.css',
         autoSlide:true,
         slideEaseDuration:300,
         autoSlideInterval:3000,
         animateIn:"fadeInRight",
         animateOut:"fadeOutLeft",
     });
});