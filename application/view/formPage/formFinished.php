<html>
<body>
<h2><label>
Varify that this information is correct
</label></h2>
<br>
<div class="col-sm-6">
<h3>
Name: <?php echo $_GET["firstName"];?>
  <?php echo $_GET["lastName"];?>
<br>
Phone: <?php echo $_GET["phone"];?>
<br>
E-mail: <?php echo $_GET["email"];?>
<br>
Date: <?php echo $_GET["date"];?>
<br>
Location: <?php echo $_GET["location"];?>
<br>
Category: <?php echo $_GET["category"];?>
</h3>

<br><br><br>
<form action="<?php echo URL;?>home/finished">
<h2 style="text-align:center"> <input name="submit" type="submit" value="Submit" class="btn btn-primary"></h2>


</div>

<div class="col-sm-10" id="map" style="width:30em;height:20em"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }
      function geocodeAddress(geocoder, resultsMap) {
        var address = '<?php echo $_GET['location'];?>';
        geocoder.geocode( {'address' : address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location); 
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
            resultsMap.setZoom(13);
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQQLkL7Ey3LAlVrK73oSV6LVb43NvatLw&callback=initMap">
    </script>
</body>
</html>
