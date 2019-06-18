<?php session_start();?>
<?php include('../class_conn.php');
$cls_conn = new class_conn;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>storetech</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta charset="UTF-8"/>
 

<link rel="stylesheet" href="nativeDroid2/css/font-awesome.min.css" />
        <link rel="stylesheet" href="nativeDroid2/css/jquery.mobile.min.css" />
        <link rel="stylesheet" href="nativeDroid2/vendor/waves/waves.min.css" />
        <link rel="stylesheet" href="nativeDroid2/vendor/wow/animate.css" />
        <link rel="stylesheet" href="nativeDroid2/css/nativedroid2.css" />
        <link rel="stylesheet" href="nativeDroid2/css/nativedroid2.color.light-blue.css" />
 
     <script type="text/javascript">
     function initGeolocation()
     {
        if( navigator.geolocation )
        {
           // Call getCurrentPosition with success and failure callbacks
           navigator.geolocation.getCurrentPosition( success, fail );
        }
        else
        {
           alert("Sorry, your browser does not support geolocation services.");
        }
     }

     function success(position)
     {

         document.getElementById('longitude').value = position.coords.longitude;
         document.getElementById('latitude').value = position.coords.latitude
     }

     function fail()
     {
        // Could not obtain location
     }
     
     function news_near()
     {
         var longitude=document.getElementById('longitude').value;
         var latitude=document.getElementById('latitude').value;
         var url="news_near.php?lat="+latitude+"&long="+longitude;
         window.location=url;
     }

   </script>  
   
</head>
<body onLoad="initGeolocation();">


            <div data-role="page">
                <div data-role="header" data-position="fixed" class="wow fadeIn">

                    <a href="menu.php" class="ui-btn ui-btn-left wow fadeIn" data-wow-delay='0.8s'><i class="zmdi zmdi-menu"></i></a>
                    <h1 class="wow fadeIn" data-wow-delay='0.4s'>ค้นร้านใกล้เคียง</h1>
                </div>

                <div role="main" class="ui-content wow fadeIn" data-inset="false" data-wow-delay="0.2s">

                    <form method="post">
						<input type="text" name="latitude" id="latitude" value="" />
						<input type="text" name="longitude" id="longitude" value=""/>
					<button class="ui-btn ui-btn-raised" name="submit" type="submit">เริมค้นหา</button>
					</form>
					<?php
					if(isset($_POST['submit']))
					{
					$latitude=$_POST['latitude'];
					$longitude=$_POST['longitude'];
					$_SESSION['latitude']=$latitude;
					$_SESSION['longitude']=$longitude;
					//echo $cls_conn->goto_page(0,'map2.php');
					}
					?>
                </div>
</div>
<?php include('footer.php');?>