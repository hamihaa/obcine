<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<style>
    ul {
        list-style-type: none;
    }
    body{
        background-color: #F4F4F4;

    }
    .h1{
    color:white;
    }
    .page-header{

        margin-top:0;
        background: #1c69b1;
        color:white;
    }
    .h1>small{
        color:white; 
    }
    .nav-item{
        color:white;
    }
    a{
        color:#373737;
    }
    .navbar{
        border-top-color: #999999;
    }

    .nav-item:hover{
        border-bottom: #999999;
        text-decoration: none;
        color:#999999;
    }





</style>
</head>
<div class="page-header">
    <div class="container">
    <h1>    Občine <small style="color:white">Vizualizacija primerjave odhodkov potrebnih za delovanje občine med posameznimi občinami</small></h1>
        <nav class="navbar navbar-light bg-faded" style="margin-bottom:0; min-height:0; font-size:110%">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASE_URL ?>">    Domov <span class="sr-only">(current)</span></a><span style="color:darkblue">|</span>
                <a class="nav-item nav-link" href="<?= BASE_URL . "obcina/search" ?>">Išči po občinah</a> <span style="color:darkblue">|</span>
                <a class="nav-item nav-link" href="<?= BASE_URL . "obcina/poraba" ?>">Razvrstitev po področju porabe</a> <span style="color:darkblue">|</span>
                <a class="nav-item nav-link" href="<?= BASE_URL . "regije" ?>">Regije</a> <span style="color:darkblue">|</span>
                <a class="nav-item nav-link" href="<?= BASE_URL . "obcina/primerjava" ?>">Primerjava</a> <span style="color:darkblue">|</span>
                <a class="nav-item nav-link" href="<?= BASE_URL . "obcina/analiza" ?>">Analiza odvisnosti</a>

            </div>
        </nav>
    </div>
</div>