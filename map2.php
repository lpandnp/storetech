<?php session_start();?>
<?php include('header.php');?>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html {
        height: 100%;
        margin: 0;
        padding: 0;
		text-align: center;
      }

      #map {
        height: 500px;
        width: 600px;
      }
    </style>
 
            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-home"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>ร้านช่างใกล้คุณ</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">
			 
			 <div id="map" style="width:100%"></div>
		 
    <script>

		var locations = [
		<?php
					$latitude='12.480872';
					$longitude='99.965622';
		?>
		  ['ตำแหน่งของท่าน', <?=$latitude;?>,  <?=$longitude;?>],
		  <?php
		  $sql=" select * from tb_store";
		  $result=$cls_conn->select_base($sql);
		  while($row=mysqli_fetch_array($result))
		  {
		  ?>
		   ['<?=$row['store_name'];?>',<?=$row['store_gps'];?>],
		  <?php
		  }
		  ?>
		 
		 
		];

      function initMap() {
			var mapOptions = {
			  center: {lat: <?=$latitude;?>, lng: <?=$longitude;?>},
			  zoom: 10,
			}
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
			
			var marker, i, info;

			for (i = 0; i < locations.length; i++) {  

				marker = new google.maps.Marker({
				   position: new google.maps.LatLng(locations[i][1], locations[i][2]),
				   map: maps,
				   title: locations[i][0]
				});

				info = new google.maps.InfoWindow();

			  google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
				  info.setContent(locations[i][0]);
				  info.open(maps, marker);
				}
			  })(marker, i));

			}

		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=initMap" async defer></script>
				
				</div>
			</div>
<?php include('footer.php');?>