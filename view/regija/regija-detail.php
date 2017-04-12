


<head><title>Regija <?= $regija["Ime_regije"] ?></title>
<style type="text/css">
.row{
  margin-left: 2%;
    margin-right: 2%;
}
#kriterij{
  text-align: left;
}
th{
  text-align: center;
}
td{
  text-align: center;
}
</style>
</head>
<div class="row" style="background-color:transparent">
    <h1><?= $regija["Ime_regije"] ?></h1>
    <h4>število prebivalcev:  <?= $regija["prebivalci"] ?></h4>

    <div class="col-md-6" id = "left">
            <br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                    	<th>kriterij</th>
                        <th>odhodki skupaj</th>
                        <th>odhodki na prebivalca regije</th>
                        <th>slovensko povprečje</th>
                        <th>razvrstitev</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0;
                    foreach ($regija as $key => $value): 
                   		 if($i > 1 && $i < 12 ){
                   		 ?>
                     <tr>
                     	<td id = "kriterij"><?= kriterij($i)?></td>
                     	<td>  <?= $value . " €" ?></td> 
                    	<td><?= round($value/ $regija["prebivalci"],2) . " €" ?></td>
                      <td><?= round(ObcinaDB::getKriterijAvg($key)["avg"],2 )?> €</td>
                     <td ><?=
                             RegijaDB::getPozicijaRegije($regija["Sifra_regije"], $key)["position"];
                             ?></td>
                    </tr>
                    <?php }
                   	 $i++; ?>
                    <?php endforeach ?>
                   
                    </tbody>
                </table>
            </div>
        </div>
	<div class="col-md-6" id = "right">
  	  <?php
  	  	include_once "regije-chart.php";
  	  ?>
  	  </div>
</div>
<br>
<?php include_once("footer.php") ?>

<?php
 function kriterij($v){
              if ($v == 2 ) return "POLITIČNI SISTEM";
              if ($v == 3 ) return "EKONOMSKA IN FISKALNA ADMINISTRACIJA";
              if ($v == 4 ) return "ZUNANJA POLITIKA IN MEDNARODNA POMOČ";
              if ($v == 5 ) return "SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE";
              if ($v == 6 ) return "ZNANOST IN TEHNOLOŠKI RAZVOJ";
              if ($v == 7 ) return "LOKALNA SAMOUPRAVA";
              if ($v == 8 ) return "OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH";
              if ($v == 9) return "NOTRANJE ZADEVE IN VARNOST";
              if ($v == 10 ) return "TRG DELA IN DELOVNI POGOJI";
              if ($v == 11 ) return "GOSPODARSTVO";
              else return "ne dela";
        }
?>
