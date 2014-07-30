$(document).ready(function() {
    var pepe = $.fn.fullpage({
        slidesColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke'],
        anchors: ['home', 'about', 'works', 'contact'],
        menu: false,
        easing: "easeOutExpo",
        css3: true,
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        slidesNavigation: true,
        slidesNavPosition: 'bottom'
    });
    
    // Hovering effects
    $(".text-menu li ").hover(function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").css("background","#FFFFFF");
    },function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").css("background","RGBA(10,160,10,0.5)");
    });
    
    $(".img-menu li ").hover(function(){
        $(this).css("background","#FFFFFF");
    },function(){
        $(this).css("background","RGBA(10,160,10,0.5)");
    });
    
});