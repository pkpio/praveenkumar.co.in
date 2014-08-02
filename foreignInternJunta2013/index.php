<?php
$dbFile = 'dbFile.txt';
$handle = fopen($dbFile, 'r') or die('Cannot open file:  '.$dbFile);
$dbFileData = fread($handle,filesize($dbFile));
$JSON_Data = $dbFileData;
$jsonData = json_decode($JSON_Data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<link href='praveen.ico' rel='icon' type='image/x-icon'/>
<title>Foreign intern junta - 2013</title>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBj1x1ru0nbKZwNDKq8eGxc1x_Au0Dy7ls" type="text/javascript"></script>
<link href="styles.css" rel="stylesheet" type="text/css" />
<style>
html, body {
	height: 100%;
}
#map {
	width: 70%;
	height: 100%;
	float: left;
}
</style>
</head>
<body>
<div id="map"></div>
<div id="infoPanel">
  <div id="header">
    <input id="blueButton" value="Add marker" type="submit" onclick="window.open(document.URL+'addMarker.php', '_self');" />
    <a href="https://github.com/praveendath92/foreignInternJunta2013" target="_blank"><input id="redButton" value="Source code" type="button" /></a>
	
  </div>
    <hr style="width:28%;margin-top:15px;">
  <div id="markersInfo"> </div>
</div>
<noscript>
<b>JavaScript must be enabled in order for you to use Google Maps.</b> However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
</noscript>
<script type="text/javascript">
    if (GBrowserIsCompatible()) { 
	var map = new GMap2(document.getElementById("map"));
	  map.setUIToDefault();
	 
	 // ==== It is necessary to make a setCenter call of some description before adding markers ====
      // ==== At this point we dont know the real values ====
      map.setCenter(new GLatLng(0,0),0);
    
   
      var side_bar_html = "";
      var gmarkers = [];
      var htmls = [];
      var i = 0;


      function createMarker(point,name,html) {
        var marker = new GMarker(point);
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        gmarkers[i] = marker;
        htmls[i] = html;
        side_bar_html += '<a href="javascript:myclick(' + i + ')">' + name + '<\/a><br>';
		i++;
        return marker;
      }


      function myclick(i) {
        gmarkers[i].openInfoWindowHtml(htmls[i]);
      }

      
      // ===== Start with an empty GLatLngBounds object =====     
      var bounds = new GLatLngBounds();
	  
	  
<?php
$LatSum		= 0 ;
$LngSum		= 0;
$i=0;
foreach($jsonData->markers as $marker){	
	$LatSum+= $marker->lat;
	$LngSum+= $marker->lng;
?>	  
          var lat = <?php echo $marker->lat ; ?>;
          var lng = <?php echo $marker->lng ; ?>;
          var point = new GLatLng(lat,lng);
          var html = "<?php echo "<b>".$marker->name."</b><br>".$marker->website."<br>".$marker->phone."<br>".$marker->info."<br><b>Added by : </b>".$marker->ldapid ; ?>";
          var label = "<?php echo $marker->name ; ?>";
          // create the marker
          var marker = createMarker(point,label,html);
          map.addOverlay(marker);
            
            // ==== Each time a point is found, extent the bounds ato include it =====
         bounds.extend(point);
          
		  <?php
}
?>

          document.getElementById("markersInfo").innerHTML = side_bar_html;
          
          // ===== determine the zoom level from the bounds =====
          //map.setZoom(map.getBoundsZoomLevel(bounds));

          // ===== determine the centre from the bounds ======
          //map.setCenter(bounds.getCenter());
		   map.setCenter(new GLatLng(<?php echo $jsonData->center->lat; ?>,<?php echo $jsonData->center->lng; ?>),2);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

   
    </script>
</body>
</html>