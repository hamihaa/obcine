<?php
include_once ("header.php");
?>
<div class="container">
<h2>Poraba regij po kriterijih</h2>
    <p>Izberi kriterij odhodkov</p>
    <form class= "form-inline" action="<?= BASE_URL . "regije/skupaj" ?>" method="get">
        <?php
            if(isset($_GET["val"])){
                $v = $_GET["val"];
            } else { $v = 0;}
        ?>
        <select name="val" class="form-control form-inline input-small" style="width:30%">
            <option <?php if ($v == 'a_01' ) echo 'selected' ; ?>  value="a_01">01 POLITIČNI SISTEM</option>
            <option <?php if ($v == 'a_02' ) echo 'selected' ; ?> value="a_02">02 EKONOMSKA IN FISKALNA ADMINISTRACIJA</--option>
            <option <?php if ($v == 'a_03' ) echo 'selected' ; ?> value="a_03">03 ZUNANJA POLITIKA IN MEDNARODNA POMOČ</option>
            <option <?php if ($v == 'a_04' ) echo 'selected' ; ?> value="a_04">04 SKUPNE ADMINISTRATIVNE SLUŽBE IN SPLOŠNE JAVNE STORITVE</option>
            <option <?php if ($v == 'a_05' ) echo 'selected' ; ?> value="a_05">05 ZNANOST IN TEHNOLOŠKI RAZVOJ</option>
            <option <?php if ($v == 'a_06' ) echo 'selected' ; ?> value="a_06">06 LOKALNA SAMOUPRAVA</option>
            <option <?php if ($v == 'a_07' ) echo 'selected' ; ?> value="a_07">07 OBRAMBA IN UKREPI OB IZREDNIH DOGODKIH</option>
            <option <?php if ($v == 'a_08' ) echo 'selected' ; ?> value="a_08">08 NOTRANJE ZADEVE IN VARNOST</option>
            <option <?php if ($v == 'a_10' ) echo 'selected' ; ?> value="a_10">10 TRG DELA IN DELOVNI POGOJI</option>
            <option <?php if ($v == 'a_14' ) echo 'selected' ; ?> value="a_14">14 GOSPODARSTVO</option>
            </select>
            <button type="submit" class="btn btn-primary" style="background-color:#373737;">prikaži podatke</button>
    </form>
   <?php 
   foreach ($hits as $key) {
       echo $key["Ime_regije"]." ".$key[$v] ."</br>";
   }
   ?>


    <?php include_once "footer.php" ?>

