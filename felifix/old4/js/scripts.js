$(document).ready(function() {
    var pepe = $.fn.fullpage({
        anchors: ['home', 'about', 'works', 'contact'],
        menu: false,
        easing: "easeOutExpo",
        css3: true,
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Home', 'About', 'Works', 'Contact'],
        slidesNavigation: true,
        slidesNavPosition: 'bottom',
        controlArrowColor: 'RGBA(255,255,255,0.6)',
        fixedElements: '.main-menu',
        
        afterLoad: function(anchorLink, index){
            // If not home. Get side navigation, animate menu.
            if(anchorLink != 'home'){
                $(".main-menu").animate({top:"0%"}, 500);
            }
        },
        
        onLeave: function(index, direction){
            // Find out to which page we are going by url read
            $url = document.URL;
            var index = 0;
            
            // To home
            if($url.match(/home/gi)){
                $("#fullPage-nav").animate({opacity:0}, 500, "easeOutQuad");
                $(".main-menu").animate({top:"-10%"}, 0);
            }
            
            // From home.
            else{
                $("#fullPage-nav").animate({opacity:1}, 500);
            }
            
            // To about
            if($url.match(/about/gi)){
                 $(".main-menu li a").removeClass("main-menu-light");
                 $(".main-menu li a").addClass("main-menu-dark");
                 index = 1;
            } 
            
            // To works
            if($url.match(/works/gi)){
                 $(".main-menu li a").removeClass("main-menu-dark");
                 $(".main-menu li a").addClass("main-menu-light");
                 index = 2;
            }
            
            // To contact
            if($url.match(/contact/gi)){
                 $(".main-menu li a").removeClass("main-menu-dark");
                 $(".main-menu li a").addClass("main-menu-light");
                 index = 3;
            }
            
            for(var i=0; i<4 ; i++){
                if(i != index){
                    $(".main-menu li:nth-child("+(i + 1)+")").removeClass("main-menu-active");
                    $(".main-menu li:nth-child("+(i + 1)+")").addClass("main-menu-inactive");
                } else{
                    $(".main-menu li:nth-child("+(i + 1)+")").removeClass("main-menu-inactive");
                    $(".main-menu li:nth-child("+(i + 1)+")").addClass("main-menu-active");
                }                    
            }
        }
    });
    
    // Hovering effects
    $(".text-menu li ").hover(function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").removeClass("text-menu-inactive");
        $(".img-menu li:nth-child("+(index + 1)+")").addClass("text-menu-active");
    },function(){
        var index = $(".text-menu li ").index($(this));
        $(".img-menu li:nth-child("+(index + 1)+")").removeClass("text-menu-active");
        $(".img-menu li:nth-child("+(index + 1)+")").addClass("text-menu-inactive");
    });
    
    $(".img-menu li ").hover(function(){
        $(this).removeClass("text-menu-inactive");
        $(this).addClass("text-menu-active");
    },function(){
        $(this).removeClass("text-menu-active");
        $(this).addClass("text-menu-inactive");
    });
    
});