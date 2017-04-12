<head>
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxkqy69pNnN-zuRMhSMmCih8oKpf8YXcA"></script>
    <script type='text/javascript'>
        google.charts.load('upcoming', {'packages': ['geochart']});
        google.charts.setOnLoadCallback(drawMarkersMap);
        <?php
        $i = 0;
        $d = "";

        foreach ($hits as $s):
            $i++;
            $value = $s['vrednost'];
            $prebivalstvo = $s['prebivalstvo'];
            $ime = "$s[OBCINA] ($prebivalstvo prebivalcev)";
            $lat = $s["lat"];
            $lng = $s["lng"];
            $d .= "[$lat, $lng, '$ime' , $value] ";
            if($i < count($hits)){
                $d .= (", ");
            }
        endforeach;

        ?>
        function drawMarkersMap() {
            var data = google.visualization.arrayToDataTable([
                ['Latitude','Longitude', 'Občina', 'odhodki na prebivalca (EUR)'],
                <?= $d ?>

            ]);

            var options = {
                region: 'SI',
                displayMode: 'markers',
                backgroundColor: { fill:'transparent' },

                colorAxis: {colors: ['#D38312', '#D38312']}
            };

            var chart = new google.visualization.GeoChart(document.getElementById('geo_chart'));
            chart.draw(data, options);
        };
    </script>
</head>
<body>
<div id="geo_chart" style="width: 100%; height: 700px;"></div>
</body>
</html>