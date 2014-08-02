<?php
$dbFile = 'dbFile.txt';
$handle = fopen($dbFile, 'r') or die('Cannot open file:  '.$dbFile);
$dbFileData = fread($handle,filesize($dbFile));
$JSON_Data = $dbFileData;
$jsonData = json_decode($JSON_Data);
?>
<html><head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link href='favicon.png' rel='icon' type='image/x-icon'/>
<title>Add new place</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">

function updateMarkerPosition(latLng) {
	document.getElementById("lat").value = latLng.lat();
	document.getElementById("lng").value = latLng.lng();
}

function initialize() {
  var latLng = new google.maps.LatLng(19.13461, 72.9135845);
//  var latLng2 = new google.maps.LatLng(19.0555837, 72.8766559);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 2,
    center: new google.maps.LatLng(16.636192, 8.437500),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
	icon: new google.maps.MarkerImage(
    'http://www.google.com/intl/en_us/mapfiles/ms/micons/green-dot.png',
    new google.maps.Size(32,32),
    new google.maps.Point(0, 0),
    new google.maps.Point(16, 32)
  ),
    draggable: true
  });
  
<?php
$i=0;
foreach($jsonData->markers as $marker){
?>  
  var marker<?php echo $i; ?> = new google.maps.Marker({
    position: new google.maps.LatLng(<?php echo $marker->lat; ?>, <?php echo $marker->lng; ?>),
    title: '<?php echo $marker->name; ?>',
    map: map,
    draggable: false
  });
<?php $i++; }?>
  
  // Update current position info.
  updateMarkerPosition(latLng);
  
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerPosition(marker.getPosition());
  });
}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);


</script>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<style>
#mapCanvas {
	width: 70%;
	height: 100%;
	float: left;
}
</style>
<body>
<div id="mapCanvas"></div>
<div id="infoPanel">
  <form action="saveMarker.php" method="post">
    <div id="header">
      <input id="greenButton" value="Save" type="submit" />
      <input id="redButton" value="Cancel" type="button" />
      <p style="position:relative;left:20px;">Drag the green marker to desired location</p>
    </div>
    <hr style="width:28%;margin-top:15px;">
    <div id="markerEditInfo">
    <input id="lat" name="lat" value="" type="hidden" />
    <input id="lng" name="lng" value="" type="hidden" />
    
    <input name="title" placeholder="Name" />
	<p style="color:#ff0000">Don't forget to drag the green marker to proper location</p>
    <input name="phoneno" placeholder="Contact number(s)" />
    <input name="website" placeholder="Univ/Company & city" />
    <textarea name="otherinfo" placeholder="Any other Info" rows="2"></textarea>
	<p>*Below fields are must to check authenticity of info being added. Password is only to validate and never saved. Check source code on git @ /praveendath92/foreignInternJunta2013/</p>
    <input name="ldapid" placeholder="LDAP Id" />
    <input name="ldappswd" type="password" placeholder="LDAP password" />
    </div>
  </form>
</div>
</body>
</html>
