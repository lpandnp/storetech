<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?sensor=false">
    </script>
    <script type="text/javascript">
    	var map = null;
			function showlocation() {
			   // One-shot position request.
			    navigator.geolocation.getCurrentPosition(callback);
			}
    	
      function callback(position) {
      	
      	var lat = position.coords.latitude;
      	var lon = position.coords.longitude;
      	
	 		 document.getElementById('latitude').innerHTML = lat;
	     document.getElementById('longitude').innerHTML = lon;
           	
      	var latLong = new google.maps.LatLng(lat, lon);
      	
				var marker = new google.maps.Marker({
				    position: latLong
				});      
				
				marker.setMap(map);
      	map.setZoom(8);
      	map.setCenter(marker.getPosition());
      }
      
      google.maps.event.addDomListener(window, 'load', initMap);
      function initMap() {
        var mapOptions = {
          center: new google.maps.LatLng(0, 0),
          zoom: 1,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map-canvas"), 
                                          mapOptions);
      
      }
    </script>
  </head>
  <body>
  	<center>
		<input type="button" value="Show my location on Map"
		    	onclick="javascript:showlocation()" />   <br/>
  	</center>
		    	
		Latitude: <span id="latitude"></span>       <br/>
		Longitude: <span id="longitude"></span>
  	<br/><br/>
    <div id="map-canvas"/>
  </body>
</html>