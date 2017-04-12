<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>Odhodki občin</title>
    <?php include_once "header.php" ?>
</head>
<div class="row">
    <div class="span3">
        <h2>Apple</h2>
        <p>The apple is the pomaceous fruit of the apple tree,
            species Malus domestica in the rose family.</p>
    </div>
    <div class="span3">
        <h2>Orange</h2>
        <p>The orange (specifically, the sweet orange) is the fruit
            of the citrus Citrus × ​sinensis,
            pecies Citrus × ​sinensis in the family Rutaceae.</p>
    </div>
    <div class="span3">
        <h2>Peach</h2>
        <p>The peach, Prunus persica, is a deciduous tree,
            native to China and South Asia, where it was first cultivated.</p>
    </div>
    <div class="span3">
        <h2>Pear</h2>
        <p>The pear is any of several tree and shrub
            species of genus Pyrus, in the family Rosaceae.</p>
    </div>
</div>
<hr>
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
