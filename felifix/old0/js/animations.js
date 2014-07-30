function animateCardsAway(delay_before_start){
	var ANIMATE_TIME = 800;
	var DELAY_BTWN_CARDS = 50;

	var loopCount = 6; //This should be (number of card prefixed id divs in the current content div - 1)
	for (var i = 0; i < loopCount; i++) {
		$("#card" + i).delay(delay_before_start + i * DELAY_BTWN_CARDS).animate({left:2000},ANIMATE_TIME);
	};

	//Time taken for whole animation execution
	var execT = ANIMATE_TIME + loopCount * DELAY_BTWN_CARDS;

	return execT;
}

function animateCardsIn(delay_before_start, temp){
	//START OF TEMP CODE

	setTimeout(
		function(){
			document.getElementById('loading').style.display = 'none';
			return false;
		}, temp + delay_before_start - 100);

	//END OF TEMP CODE

	var ANIMATE_TIME = 800;
	var DELAY_BTWN_CARDS = 50;

	var loopCount = 5; //This should be (number of card prefixed id divs in the current content div - 1)
	for (var i = 0; i <= loopCount; i++) {
		$("#card" + i).delay(delay_before_start + i * DELAY_BTWN_CARDS).animate({left:0},ANIMATE_TIME);
	};

	//Time taken for whole animation execution
	var execT = ANIMATE_TIME + loopCount * DELAY_BTWN_CARDS;

	return execT;
}

function dispLoadingImg(delay){
	setTimeout(
		function(){
			document.getElementById('loading').style.display = 'block';
			return false;
		}, delay);
}

function loadContent(){
	//Swipe cards away
	var execTime = animateCardsAway(0);

	//Load disp img after animation
	dispLoadingImg(execTime);

	//Animate after content is loaded.
	//NOTE: Currently 1500 and execTime passed for displaying content
	animateCardsIn(1500, execTime);
}

$(document).ready(function(){  
  $(".card").click(function(){
    loadContent();
  });
  $("#header").click(function(){
    loadContent();
  });
});