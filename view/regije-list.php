<!DOCTYPE html>
<head>
<meta charset="UTF-8" />


<title>Regije</title>
    <?php include_once "header.php" ?>
</head>
<body>
<div class="row">

    <a style="text-align:center" href= "<?= BASE_URL."regije/skupaj" ?>"><h3>Primerjava vseh regij</h3></a></li>

    <?php
        foreach ($hits as $s):
        ?>
    <div class="col-md-3">
        <a href="<?= BASE_URL . "regije?id=" . $s["Sifra_regije"]?>">
            <h3 style="text-align:center"><?= $s["Ime_regije"]?></h3>
            <img src = "<?= IMAGES . $s["Ime_regije"] . ".png" ?>" style=" display: block;
    margin-left: auto;
    margin-right: auto; width:70%;">
        </a>
    </div>
    <?php endforeach; ?>
</div>
<?php include  "footer.php" ?>

</body>