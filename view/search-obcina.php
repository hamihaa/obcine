

<!DOCTYPE html>
<head>    <?php include_once "header.php" ?>
    <meta charset="UTF-8" />
    <title>Iskanje občin</title>

</head>
<div class="container fill" style="min-height:100%; height:100%;">
    <h1>Vpiši ime občine</h1>

    <form action=" <?= BASE_URL . "obcina/search" ?>" method="get">
        <input type="text"  name="query" required/>
        <button type="submit" class="btn btn-primary" style="background-color:#373737;">išči</button>
    </form>
    <br>
    <div class="col-sm-2">

    <?php $cnt = 0;
    foreach ($hits as $s): $cnt++;
        if($cnt == 25){
            $cnt = 0;
            ?>
            </div>
    <div class="col-sm-2"">
    <?php
        }
        ?>
        <li class="list-unstyled"><a href="<?= BASE_URL . "obcina?id=" . $s["ID"] ?>"><?= $s["OBCINA"] ?> (<?=$s["prebivalstvo"] ?> prebivalcev)</a></li>
    <?php endforeach; ?>


    </div>
</div>

<?php include_once "footer.php" ?>
