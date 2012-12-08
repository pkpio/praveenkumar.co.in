<?php
//Defining my places locations...

	//Home
	$myPlaceLat[0] = 17.086234266227883; 
	$myPlaceLng[0] = 81.95079652118534;
	$myPlaceHTML[0] = "My Sweet Home :)";
	$myPlaceLabel[0] = "";
	$myPlaceIcon[0] = 1;
	
	
	//Love
	$myPlaceLat[1] = 12.358363838207895; 
	$myPlaceLng[1] = 76.64225578308105;
	$myPlaceHTML[1] = "Mysore, An awesome place!";
	$myPlaceLabel[1] = "";
	$myPlaceIcon[1] = 0;
	
	
	//College
	$myPlaceLat[2] = 19.135721703998495; 
	$myPlaceLng[2] = 72.90657162666321;
	$myPlaceHTML[2] = "My college, I just love this place <3 <br/>This is where I learnt alot.";
	$myPlaceLabel[2] = "";
	$myPlaceIcon[2] = 2;
	
	//IITM
	$myPlaceLat[3] = 12.9911563; 
	$myPlaceLng[3] = 80.2363137;
	$myPlaceHTML[3] = "IIT Madras Visit";
	$myPlaceLabel[3] = "";
	$myPlaceIcon[3] = 3;
	
	//Place
	$myPlaceLat[4] = 15.13854; 
	$myPlaceLng[4] = 76.918732;
	$myPlaceHTML[4] = "Karnataka visit for the first time";
	$myPlaceLabel[4] = "";
	$myPlaceIcon[4] = 3;
	


//End of places

?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBj1x1ru0nbKZwNDKq8eGxc1x_Au0Dy7ls" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../css/fonts.css" />
<style>
body {
	font-family: 'Short Stack', cursive;
	font-size:14px;
}
</style>


<!--Maps Div and Results Div-->

<div><p><b>Places I been to</b> - Click on the place for info</p></div>
           <div id="map" style="width:350px; height:260px"></div>
           <div id="side_bar" style="display:none;"></div>
   
    <noscript><b>JavaScript must be enabled in order for you to use M</b> 
      However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
    </noscript>
    

    <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {
		
		
      var map = new GMap2(document.getElementById("map"));
	  map.setUIToDefault();
	  
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "Prices <br>";
    
       map.setCenter(new GLatLng(0,0),0);
    

      var side_bar_html = "";
      var gmarkers = [];
      var htmls = [];
      var i = 0;
      
      // Create some custom icons
      
      // This icon uses the same shape as the default Google marker
      // So we can use its details for everything except the image 
      var loveIcon = new GIcon();
      loveIcon.image = "love.png";
      loveIcon.shadow = "shadow.png";
      loveIcon.iconSize = new GSize(40, 40);
      loveIcon.shadowSize = new GSize(44, 40);
      loveIcon.iconAnchor = new GPoint(9, 34);
      loveIcon.infoWindowAnchor = new GPoint(9, 2);
      loveIcon.infoShadowAnchor = new GPoint(18, 25);
      loveIcon.transparent = "http://www.google.com/intl/en_ALL/mapfiles/markerTransparent.png";
      loveIcon.printImage = "coldmarkerie.gif";
      loveIcon.mozPrintImage = "coldmarkerff.gif";


      // This icon is a different shape, so we need our own settings       
      var homeIcon = new GIcon();
      homeIcon.image = "home.png";
      homeIcon.shadow = "shadow.png";
      homeIcon.iconSize = new GSize(30, 30);
      homeIcon.shadowSize = new GSize(44, 40);
      homeIcon.iconAnchor = new GPoint(9, 34);
      homeIcon.infoWindowAnchor = new GPoint(9, 2);
      homeIcon.infoShadowAnchor = new GPoint(18, 25);
      homeIcon.transparent = "fingertran.png";
      homeIcon.printImage = "fingerie.gif";
      homeIcon.mozPrintImage = "fingerff.gif";
	  
	   // This icon is a different shape, so we need our own settings       
      var collegeIcon = new GIcon();
      collegeIcon.image = "college.png";
      collegeIcon.shadow = "shadow.png";
      collegeIcon.iconSize = new GSize(40, 40);
      collegeIcon.shadowSize = new GSize(44, 40);
      collegeIcon.iconAnchor = new GPoint(9, 34);
      collegeIcon.infoWindowAnchor = new GPoint(9, 2);
      collegeIcon.infoShadowAnchor = new GPoint(18, 25);
      collegeIcon.transparent = "fingertran.png";
      collegeIcon.printImage = "fingerie.gif";
      collegeIcon.mozPrintImage = "fingerff.gif"; 
	  
	  
	   // This icon is a different shape, so we need our own settings       
      var placeIcon = new GIcon();
      placeIcon.image = "marker.png";
      placeIcon.shadow = "shadow.png";
      placeIcon.iconSize = new GSize(24, 28);
      placeIcon.shadowSize = new GSize(44, 40);
      placeIcon.iconAnchor = new GPoint(9, 34);
      placeIcon.infoWindowAnchor = new GPoint(9, 2);
      placeIcon.infoShadowAnchor = new GPoint(18, 25);
      placeIcon.transparent = "fingertran.png";
      placeIcon.printImage = "fingerie.gif";
      placeIcon.mozPrintImage = "fingerff.gif";
      
      // An array of GIcons, to make the selection easier
      var icons = [];
      icons[0] = loveIcon;
      icons[1] = homeIcon;
      icons[2] = collegeIcon;
      icons[3] = placeIcon;
	  

      // the icon information is passed to this function
      function createMarker(point,name,html,icontype) {
        var marker = new GMarker(point,icons[icontype]);
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        // save the info we need to use later for the side_bar
        gmarkers[i] = marker;
        htmls[i] = html;
        // add a line to the side_bar html
        side_bar_html += '<a href="javascript:myclick(' + i + ')">' + name + '<\/a><br>';
        i++;
        return marker;
      }

      function myclick(i) {
        gmarkers[i].openInfoWindowHtml(htmls[i]);
      }
	  
	  
      // ===== Start with an empty GLatLngBounds object =====     
      var bounds = new GLatLngBounds();
	  
<?php for($i=0;$i<sizeof($myPlaceLat);$i++){?>
          var lat = <?php echo $myPlaceLat[$i] ?>;
          var lng = <?php echo $myPlaceLng[$i] ?>;
          var point = new GLatLng(lat,lng);
          var html = "<?php echo $myPlaceHTML[$i] ?>";
          var label =  "<?php echo $myPlaceLabel[$i] ?>";
          var icontype = <?php echo $myPlaceIcon[$i] ?>;
          var marker = createMarker(point,label,html,icontype);
          
		  map.addOverlay(marker);
            
          bounds.extend(point);
<?php	} ?>

		document.getElementById("side_bar").innerHTML = side_bar_html;
          
          // ===== determine the zoom level from the bounds =====
          map.setZoom(map.getBoundsZoomLevel(bounds));

          // ===== determine the centre from the bounds ======
          map.setCenter(bounds.getCenter());
      
    }

    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

  </script>

