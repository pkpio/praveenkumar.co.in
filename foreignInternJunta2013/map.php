<?php
$countFile = '../tttstats.txt';
$handle = fopen($countFile, 'r') or die('Cannot open file:  '.$countFile);
$data = fread($handle,filesize($countFile));
fclose($handle);
$point = explode(",",$data);
$Lat1 = $point[0] ;
$Lng1 = $point[1] ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Google Maps</title>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBj1x1ru0nbKZwNDKq8eGxc1x_Au0Dy7ls" type="text/javascript"></script>
  </head>
  <body onunload="GUnload()">

    <!-- you can use tables or divs for the overall layout -->

    <table border=1>
      <tr>
        <td>
           <div id="map" style="width: 550px; height: 450px"></div>
        </td>
        <td width = 150 valign="top" style="text-decoration: underline; color: #4444ff;">
           <div id="side_bar"></div>
        </td>
      </tr>

    </table>


    <noscript><b>JavaScript must be enabled in order for you to use Google Maps.</b> 
      However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.
    </noscript>


    <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "";
    
      // arrays to hold copies of the markers used by the side_bar
      // because the function closure trick doesnt work there
      var gmarkers = [];
	  

      // A function to create the marker and set up the event window
      function createMarker(point,name,html) {
        var marker = new GMarker(point);
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        // save the info we need to use later for the side_bar
        gmarkers.push(marker);
        // add a line to the side_bar html
        side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
        return marker;
      }


      // This function picks up the click and opens the corresponding info window
      function myclick(i) {
        GEvent.trigger(gmarkers[i], "click");
      }


      // create the map
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());


<?php
$Lat = array( 'Lat1' );
$Lng = array( 'Lng1');
$LatNum    	= count( $Lat );
$LngNum    	= count( $Lng );
$LatSum		= 0 ;
$LngSum		= 0;
 
for( $i = 0; $i < $LatNum; $i++ )
{	
	$LatSum+= $Lat[$i];
	$LngSum+= $Lng[$i];
?>
      
		  //test
          var lat = <?php echo $Lat[$i] ; ?>;
          var lng = <?php echo $Lng[$i] ; ?>;
          var point = new GLatLng(lat,lng);
          var html = "<?php echo "Hill side - Hostels" ; ?>";
          var label = "<?php echo "Hillside" ; ?>";
          // create the marker
          var marker = createMarker(point,label,html);
          map.addOverlay(marker);
		  
<?php
}
?>
		var LatCenter = <?php echo $LatSum/$LatNum ; ?>;
		var LngCenter = <?php echo $LngSum/$LngNum ; ?>;		
	 
	  map.setCenter(new GLatLng(LatCenter,LngCenter), 6);
        document.getElementById("side_bar").innerHTML = side_bar_html;
      
    }

    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

  </script>
  </body>
  

</html>




