<?php


if(isset($_GET["val"])){
$v = $_GET["val"];
} else { $v = 0;}
?>

<head><title>Občina <?= $obcina["OBCINA"] ?></title>
<style type="text/css">
	#left {
    float:left;
    width:50%;
}

#right {
    float:right;
    width:50%;
}
</style>
</head>

    <div class="container" style="background-color:transparent">
        <h2>Občina <?= $obcina["OBCINA"] ?></h2>
        <h4>število prebivalcev:  <?= $obcina["prebivalstvo"] ?></h4>
        <div id = "left">
        <p>Izberi kriterij odhodkov</p>
        <form class= "form-inline" action="<?= BASE_URL . "obcina" ?>" method="get">
            <input type="hidden" name="id" value="<?= $obcina["ID"] ?>">
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

            <button type="submit" class="btn btn-primary" style="background-color:#373737;">prikaži podatke</button>
        </form>
        <?php if(isset($_GET["val"])) { ?>
        <div class="container">
            <br>
            <p>prikaz podatkov za izbrano kategorijo</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>odhodki skupaj</th>
                        <th>odhodki na prebivalca občine</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= $hits["skupaj"] . " €" ?></td>
                        <td><?= $hits["vrednost"] . " €" ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div> 
        </div>
        <?php } ?>
        <div id = "right">
        <?php
        include_once "obcina-chart.php";
        ?>

        </div>
    </div>
<br>
<?php
include "map2.php";
?>


<?php include_once "footer.php" ?>
