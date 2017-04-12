<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
    
        function drawChart() {
    
    	var data = new google.visualization.DataTable();
    	data.addColumn('number', 'prebivalci');
    	data.addColumn('number', 'število prebivalcev, odhodki na prebivalca v EUR');
    	//custom
		data.addColumn({ type: 'string', role: 'tooltip', p: {html: true}});


        <?php
        $i = 0;
        $d = "";
        $value = $_GET["val"];



            ?>
                data.addRows([
                	<?php
                	foreach ($hits as $s):
        			    $i++;
         				$preb = (int)$s[prebivalstvo];
         				$odhodki = (float)$s[$value];
         				$obcina = '<div style="font-size:125%;">
         				 <strong>' . $s[OBCINA] . '</strong> <br>
         				  ' . $preb . ' prebivalcev, <br>
         				   odhodki na prebivalca: ' . $odhodki . '€
						</div>';


                		echo "[" . $preb . "," . $odhodki . ", `" . $obcina . "` ],";
               
                	endforeach;

                	?>

					]);

        			console.log(data);

            var options = {
                title: 'primerjava odvisnosti med št. občanov in odhodki na občana',
                tooltip: { isHtml: true },
                hAxis: {title: 'število občanov'},
                vAxis: {title: 'EUR/občan'},
                legend: 'none',
                backgroundColor: { fill:'transparent' },
                colors: ['#C0B283']
            };

            var chart = new google.visualization.ScatterChart(document.getElementById('chart_div'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>