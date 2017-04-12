<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);


        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['ODHODKI', 'EUR/capita'],
                ['POLITIČNI SISTEM', <?= $obcina["a_01"] ?>],
                ['EKONOMSKA IN FISKALNA ADMINISTRACIJA', <?= $obcina["a_02"] ?>],
                ['ZUNANJA POLITIKA IN MEDNARODNA POMOČ',  <?= $obcina["a_03"] ?>],
                ['SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE',  <?= $obcina["a_04"] ?>],
                ['ZNANOST IN TEHNOLOŠKI RAZVOJ TV', <?= $obcina["a_05"] ?>],
                ['LOKALNA SAMOUPRAVA',    <?= $obcina["a_06"] ?>],
                ['OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH', <?= $obcina["a_07"] ?>],
                ['NOTRANJE ZADEVE IN VARNOST', <?= $obcina["a_08"] ?>],
                ['TRG DELA IN DELOVNI POGOJI', <?= $obcina["a_10"] ?>],
                ['GOSPODARSTVO', <?= $obcina["a_14"] ?>]
            ]);

            var options = {
                title: 'Odhodki občine v letu 2015',
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