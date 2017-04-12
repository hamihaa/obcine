
 <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBasic);

        function drawBasic() {
            <?php
            $i = 0;
            $d = "";

            foreach ($hits as $s):
                $i++;
                $value = $s['vrednost'];

                $d .= "['$s[OBCINA]' , $value] ";
                if($i < count($hits)){
                    $d .= (", ");
                }
            endforeach;

            ?>
             var v = kriterij("<?= $_GET["val"] ?>");
            var data = google.visualization.arrayToDataTable([
                ['Obcina', 'odhodki',],
                <?= $d ?>
            ]);

            var options = {
                title: 'odhodki glede na kriterij ' + v,
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'EUR/osebo',
                    minValue: 0
                },
                vAxis: {
                    title: 'Občina'
                },
                colors: ['#C0B283'],
                backgroundColor: { fill:'transparent' }

            };

            var chart = new google.visualization.BarChart(document.getElementById('poraba_chart'));

            chart.draw(data, options);
        }
         function kriterij(v){
              if (v == 'a_01' ) return "POLITIČNI SISTEM";
              if (v == 'a_02' ) return "EKONOMSKA IN FISKALNA ADMINISTRACIJA";
              if (v == 'a_03' ) return "ZUNANJA POLITIKA IN MEDNARODNA POMOČ";
              if (v == 'a_04' ) return "SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE";
              if (v == 'a_05' ) return "ZNANOST IN TEHNOLOŠKI RAZVOJ";
              if (v == 'a_06' ) return "LOKALNA SAMOUPRAVA";
              if (v == 'a_07' ) return "OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH";
              if (v == 'a_08' ) return "NOTRANJE ZADEVE IN VARNOST";
              if (v == 'a_10' ) return "TRG DELA IN DELOVNI POGOJI";
              if (v == 'a_14' ) return "GOSPODARSTVO";
              else return "ne dela";
        }

    </script>

    </head>
    <body>
    <div id="poraba_chart" style="width: 100%; height: 700px;"></div>
        </body>
        </html>