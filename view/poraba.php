<?php
include_once ("header.php");
?>
<?php

if(isset($_GET["val"])){
    $v = $_GET["val"];
} else { $v = 0;}
?>
<head><title>Razvrstitev po področju porabe</title>
    <style type="text/css">
        .row{
            margin-left: 2%;
            margin-right: 2%;
        }
    </style>
</head>


<div class="row" style="background-color:transparent">
    <div class="container">
        <p>Izberi kriterij odhodkov</p>
    <form class= "form-inline" action="<?= BASE_URL . "obcina/poraba" ?>" method="get">

        <select name="val" class="form-control form-inline input-small" style="width:50%">
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
        <br>
        <br> število rezultatov:
        <input type="radio" name="num" value="10" required checked="checked"> 10
        <input type="radio" name="num" value="20"> 20
        <input type="radio" name="num" value="30"> 30
         <button type="submit" class="btn btn-primary" style="background-color:#373737;">prikaži podatke</button>
    </form>
    </div>
    <div class="col-md-6" id="right">
        <?php
        if(isset($_GET["val"])) {
            include_once("poraba-chart.php");
        }
        ?>
    </div>
    <div class="col-md-6" id="left">
        <?php
        if(isset($_GET["val"])){
            include_once("poraba-geo.php");
        }
        ?>
    </div>

</div>


<?php include_once "footer.php" ?>
