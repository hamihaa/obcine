<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Odhodki občin</title>
</head>
<div class="row" style="margin:2%">

    <div class="col-sm-3">
        <h2>Pregled porabe po občinah <i class="fa  fa-pie-chart"></i></h2>
        <p>Za leto 2015 je za vseh 212 slovenskih občin izdelana analiza nad odhodki, kateri so potrebni za delovanje občine. Tukaj lahko vidite podatke o posamezni občini razdeljene na 10 klasifikacij, primerjavo s slovenskim povprečjem in uvrstitev na lestvici.
            <br>
        <a style="color:#1c69b1" href=<?= BASE_URL . "obcina/search" ?>>Več na povezavi...</a></p>
    </div>
    <div class="col-sm-3">
        <h2>Razvrstitev po področju porabe <i class="fa fa-sort-amount-desc"></i></h2>
        <p>Prikaz prvih 10, 20 ali 30 občin, katere za izbrano klasifikacijo namenijo največ denarja na prebivalca.
            <br>
            <a style="color:#1c69b1" href=<?= BASE_URL . "obcina/poraba" ?>>Več na povezavi...</a></p>
    </div>
    <div class="col-sm-3">
        <h2>Primerjava po statističnih regijah <i class="fa fa-bar-chart"></i></h2>
        <p>Podatki o občinah združeni v regije in primerjani med seboj po 10 klasifikacijah. <br>
        <a style="color:#1c69b1" href=<?= BASE_URL . "regije/skupaj" ?>>Več na povezavi...</a></p>
    </div>
    <div class="col-sm-3">
        <h2>Analiza odvisnosti  <i class="fa fa-line-chart"></i> </h2>
        <p>Prikaz odvisnosti velikosti občine glede na odhodek na prebivalca, razdeljen po odhodkovnih klasifikacijah.<br>
        <a style="color:#1c69b1" href=<?= BASE_URL . "obcina/analiza"?>>Več na povezavi...</a></p>
    </div>
</div>
<hr style="border-color:#1c69b1">
<div class="row">
    <div class="col-sm-2" style="font-size:110%">
        <ul>
            <?php $cnt = 0;
            foreach ($hits as $s): $cnt++;
            if($cnt == 36){
            $cnt = 0;
            ?>
    </div>

    <div class="col-sm-2" style="font-size:110%">
        <?php
        }
        ?>
        <li class="list-unstyled"><a href="<?= BASE_URL . "obcina?id=" . $s["ID"] ?>"><?= $s["OBCINA"] ?></a></li>
        <?php endforeach; ?>
    </div>
</div>
</ul>

<?php include_once "footer.php" ?>
