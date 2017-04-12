<?php
include_once ("header.php");


if(isset($_GET["val"])){
$v = $_GET["val"];
} else { $v = 0;}
?>
<head><title>Občina <?= $obcina["OBCINA"] ?></title>
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

      <h2>Občina <?= $obcina["OBCINA"] ?></h2>
        <h4>število prebivalcev:  <?= $obcina["prebivalstvo"] ?></h4>


      <div class="col-md-6" id = "left">
          <?php
          include_once "obcina-chart.php";
          ?>
      </div>

        <div class="col-md-6" id = "right">
            <br>
            <div class="table-responsive">
                <h3>Odhodki občine na prebivalca</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>kriterij</th>
                        <th>razvrstitev</th>
                        <th>odhodki na prebivalca občine</th>
                        <th>slovensko povprečje</th>
                        <th>odhodki skupaj</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0;
                    $sum = 0;
                    $sum2 = 0;
                    foreach ($hits as $key => $value): 
                   		 if($i > 3){
                   		 	$sum += $obcina[$key];
                   		 	$sum2 += $value;
                   		 ?>
                     <tr>
                     	<td id = "kriterij"><?= kriterij($i)?></td>
                         <td ><?=
                             ObcinaDB::getKriterijPos($obcina["ID"], $key)["position"];
                             ?></td>
                     	<td><?= $obcina[$key] . " € " ?></td>
                            <td><?= round(ObcinaDB::getKriterijAvg($key)["avg"],2 )?> €</td>

                         <td>  <?= $value . " €" ?></td>
                     </tr>
                    <?php }
                   	 $i++; ?>
                    <?php endforeach ?>
                   <tr>
                   <td id = "kriterij">SUM</td>
                   <td></td>
                   	 <td> <?= $sum . "€" ?> </td>
                   	 <td></td>
                   	 <td><?= $sum2 . "€" ?></td>
                   </tr>
                    </tbody>
                </table>
            </div>
        </div> 

   </div>
<br>

<?php
include "map2.php";
?>

<?php include_once "footer.php" ?>

<?php
 function kriterij($v){
              if ($v == 4 ) return "POLITIČNI SISTEM";
              if ($v == 5 ) return "EKONOMSKA IN FISKALNA ADMINISTRACIJA";
              if ($v == 6 ) return "ZUNANJA POLITIKA IN MEDNARODNA POMOČ";
              if ($v == 7 ) return "SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE";
              if ($v == 8 ) return "ZNANOST IN TEHNOLOŠKI RAZVOJ";
              if ($v == 9 ) return "LOKALNA SAMOUPRAVA";
              if ($v == 10 ) return "OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH";
              if ($v == 11) return "NOTRANJE ZADEVE IN VARNOST";
              if ($v == 12 ) return "TRG DELA IN DELOVNI POGOJI";
              if ($v == 13 ) return "GOSPODARSTVO";
              else return "ne dela";
        }
?>