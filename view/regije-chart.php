<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);



        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['ODHODKI', 'EUR/capita'],
                ['POLITIČNI SISTEM', <?= ($regija["a_01"]/$regija["prebivalci"])?>],
                ['EKONOMSKA IN FISKALNA ADMINISTRACIJA', <?= ($regija["a_02"]/$regija["prebivalci"]) ?>],
                ['ZUNANJA POLITIKA IN MEDNARODNA POMOČ',  <?= ($regija["a_03"]/$regija["prebivalci"])?>],
                ['SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE',  <?= ($regija["a_04"]/$regija["prebivalci"]) ?>],
                ['ZNANOST IN TEHNOLOŠKI RAZVOJ TV', <?= ($regija["a_05"]/$regija["prebivalci"]) ?>],
                ['LOKALNA SAMOUPRAVA',    <?= ($regija["a_06"]/$regija["prebivalci"]) ?>],
                ['OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH', <?= $regija["a_07"]/$regija["prebivalci"] ?>],
                ['NOTRANJE ZADEVE IN VARNOST', <?= $regija["a_08"]/$regija["prebivalci"] ?>],
                ['TRG DELA IN DELOVNI POGOJI', <?= $regija["a_10"]/$regija["prebivalci"] ?>],
                ['GOSPODARSTVO', <?= $regija["a_14"]/$regija["prebivalci"] ?>]
            ]);

            var options = {
                title: 'Odhodki regije v letu 2015',
                is3D: true,
                backgroundColor: { fill:'transparent' }

            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="piechart_3d" style="width: 100%; height: 500px;"></div>

</body>

</html>
