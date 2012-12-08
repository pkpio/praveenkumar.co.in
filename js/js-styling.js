function contentShowAnimation(){
	$("#Home").animate({left:306,top:-44},400);
    $("#ContactMe").animate({left:488,top:-44},400);
    $("#AboutMe").animate({left:226,top:110},400);
    $("#Blog").animate({left:572,top:110},400);
    $("#Works").animate({left:308,top:256},400);
    $("#Gallery").animate({left:476,top:256},400);
	
	/*In animation*/ 
    $("#Home").animate({left:376,top:60},600);
    $("#ContactMe").animate({left:422,top:60},600);
    $("#AboutMe").animate({left:358,top:110},600);
    $("#Blog").animate({left:438,top:110},600);
    $("#Works").animate({left:382,top:134},600);
    $("#Gallery").animate({left:414,top:134},600);
	
	/*MainLinks Hiding for taking away*/
	$("#Home").hide(0);	
	$("#ContactMe").hide(0);	
	$("#AboutMe").hide(0);	
	$("#Blog").hide(0);	
	$("#Works").hide(0);	
	$("#Gallery").hide(0);
	
	/*Taking away Profile Tab */
    $("#Profile").delay(1000).animate({left:116,top:-38,width:170},600);
    $("#Profile").delay(100).animate({left:126,top:-28,width:180},200);
	
	/*Content div Poping*/
	$("#Content").delay(1000).show(1000);
}

function contentHideAnimation() {
	/*Content div Hiding*/
	$("#Content").hide(1000);
	
	/*Profile Tab get back */
    $("#Profile").animate({left:116,top:-38},200);
    $("#Profile").delay(100).animate({left:355,top:50,width:244,height:268},600);
    $("#Profile").animate({left:355,top:50,width:234,height:258},200);
	
	$("#Home").delay(1000).show(0);	
	$("#ContactMe").delay(1000).show(0);	
	$("#AboutMe").delay(1000).show(0);	
	$("#Blog").delay(1000).show(0);	
	$("#Works").delay(1000).show(0);	
	$("#Gallery").delay(1000).show(0);
	
	/*Out Animation */  
    $("#Home").animate({left:306,top:-44},400);
    $("#AboutMe").delay(100).animate({left:226,top:110},400);
    $("#Works").delay(200).animate({left:308,top:256},400);
    $("#Gallery").delay(300).animate({left:476,top:256},400);
    $("#Blog").delay(400).animate({left:572,top:110},400);
    $("#ContactMe").delay(500).animate({left:488,top:-44},400);
	
	/*In Animation */  
    $("#Home").animate({left:316,top:-34},200);
    $("#ContactMe").animate({left:478,top:-34},200);
    $("#AboutMe").animate({left:236,top:110},200);
    $("#Blog").animate({left:562,top:110},200);
    $("#Works").animate({left:320,top:248},200);
    $("#Gallery").animate({left:478,top:248},200);	
}

$(document).ready(function(){
	$('div.social').hover(function() {
            $(this).stop().animate({width:140},200);
        }, function() {
            $(this).stop().animate({width:84},1000);
        });	
		
/* OnClick function...........*/  
  
  $(".MainLink").click(function(){
	/*Out Animation */
    contentShowAnimation();

	$page=this.id;
	//setTimeout("$('#ContentText').load('content/'+$page+'.php');", 1600);
  	//$('#ContentText').load('content/'+$page+'.php');
	$('#ContentText').html("<div style='position:relative; left:120px; top:190px;'><img src='loader.gif' style='position:relative; left:80px; top:-40px'/><br>Fetching data from server....Please wait!</div>");
	setTimeout(function(){
	$('#ContentText').load('content/'+$page+'.php', function(response, status, xhr) {
  			if (status == "error") {
    		var msg = "Sorry but we couldn't fetch the page your are looking for! there was an error: ";
    		$('#ContentText').html("<span id='error'>" + msg + "<h3 style='color:#F00;' align='center'>" +xhr.status + " " + xhr.statusText + "</h3><br/>If you have got here following a link somewhere please notify <a href='http://home.iitb.ac.in/~praveendath92/#!/ContactMe' target='_new' >Praveen Kumar</a> (<a href='https://www.facebook.com/pamarru'>Alternative contact</a>)</span>");}});
	
	window.location.href="#!/"+$page;
	return false;}, 2000);
  });

 
  
  
    $("#Profile").click(function(){
	/*MainLinks UnHiding for Showing back*/
  	var pos = $(this).css("left");
	
/*If Profile on Top left*/		
	if(pos != "355px"){
		contentHideAnimation();
	}
	
/*If Profile NOT on Top left*/	
	else{	
	$("#Home").show(0);	
	$("#ContactMe").show(0);	
	$("#AboutMe").show(0);	
	$("#Blog").show(0);	
	$("#Works").show(0);	
	$("#Gallery").show(0);
	
	/*Out Animation */  
    $("#Home").animate({left:306,top:-44},200);
    $("#ContactMe").animate({left:488,top:-44},200);
    $("#AboutMe").animate({left:226,top:110},200);
    $("#Blog").animate({left:572,top:110},200);
    $("#Works").animate({left:308,top:256},200);
    $("#Gallery").animate({left:476,top:256},200);
	
	/*In Animation */  
    $("#Home").animate({left:316,top:-34},200);
    $("#ContactMe").animate({left:478,top:-34},200);
    $("#AboutMe").animate({left:236,top:110},200);
    $("#Blog").animate({left:562,top:110},200);
    $("#Works").animate({left:320,top:248},200);
    $("#Gallery").animate({left:478,top:248},200);
	
	}
  });
  
});