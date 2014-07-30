$(document).ready(function() {
    var pepe = $.fn.fullpage({
        anchors: ['home', 'about', 'works', 'contact'],
        menu: false,
        easing: "easeOutExpo",
        css3: true,
        navigation: false,
        navigationPosition: 'right',
        navigationTooltips: ['firstSlide', 'secondSlide'],
        slidesNavigation: true,
        slidesNavPosition: 'bottom',
        controlArrowColor: 'RGBA(255,255,255,0.6)',
        fixedElements: '.main-menu',
        
        // For triggers after page load
        afterLoad: function(anchorLink, index){
            if(anchorLink == 'home'){
                $(".main-menu").animate({top: "-7%"}, 200);
            } else{
                $(".main-menu").animate({top: "0%"}, 600);                
            }
        },
        
        // For triggers while changing section
        onLeave: function(index, direction){
            // While leaving homepage
            if(index == '2' && direction =='up'){
                $(".main-menu").animate({top: "-7%"}, 0);
            }
        }
    });
    
    // Hovering effects
    $(".text-menu li ").hover(function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").removeClass("menu-inactive");
        $(".img-menu li:nth-child("+(index + 1)+")").addClass("menu-active");
    },function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").removeClass("menu-active");
        $(".img-menu li:nth-child("+(index + 1)+")").addClass("menu-inactive");
    });
    
    $(".img-menu li ").hover(function(){
        $(this).removeClass("menu-inactive");
        $(this).addClass("menu-active");
    },function(){
        $(this).removeClass("menu-active");
        $(this).addClass("menu-inactive");
    });
    
});