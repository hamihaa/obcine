<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
            width:auto;
            margin-left:4%;
            margin-right:4%;

        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #floating-panel {
            display:none;
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
    </style>
</head>
<body>
<?php
include_once("../model/ObcinaDB.php");
$hits = ObcinaDB::getAll();
foreach ($hits as $s) {
    echo$s["OBCINA"]);
}
?>
<div id="floating-panel">
    <input id="address" type="textbox" value="Sydney, NSW">
    <input id="submit" type="button" value="Geocode">
</div>
<div id="map"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: 46.07, lng: 13.49}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
            geocodeAddress(geocoder, map);
        });
        geocodeAddress(geocoder, map);
    }


    function geocodeAddress(geocoder, resultsMap, adr) {

            var address = adr;

        geocoder.geocode({'address': address}, function(results, status) {
            if (status === 'OK') {
                alert(results[0].geometry.location.lat());
                alert(results[0].geometry.location.lng());
                resultsMap.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    position: results[0].geometry.location
                });
            } else {
                alert('Geocode was not successful for the following reason: ' + status);
            }
        });
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkqy69pNnN-zuRMhSMmCih8oKpf8YXcA&callback=initMap">
</script>
</body>
</html>