<?php
/**
 * Created by PhpStorm.
 * User: Miha
 * Date: 18-Oct-16
 * Time: 15:45
 */

require_once("controller/ObcineController.php");
require_once("controller/RegijeController.php");


//incl header

//konstante, base_url in images
//rtrim odstrani drugi parameter iz stringa
define("BASE_URL", $_SERVER["SCRIPT_NAME"] . "/");
define("IMAGES", rtrim($_SERVER["SCRIPT_NAME"], "index.php") . "static/images/");
include_once("view/header.php");

//request, za katerega se preveri, če obstaja v $urls
$path = isset($_SERVER["PATH_INFO"]) ? trim($_SERVER["PATH_INFO"], "/") : "";

//vse ustvarjene poti-funkcije
$urls = [
    "" => function(){
        ViewHelper::redirect(BASE_URL . "obcina");
    },
    "obcina" => function () {
        if (isset($_GET["id"])) {
            ObcineController::get($_GET["id"]);
        } else {
            ObcineController::getAll();
        }
    },
    "obcina/search" => function(){
        ObcineController::search();
    },
    "obcina/poraba" => function(){
        ObcineController::poraba();
    },
    "regije" => function(){
        if (isset($_GET["id"])){
           RegijeController::getRegija($_GET["id"]);
        }else{
            RegijeController::getRegije();
        }
        
    },
    "regije/skupaj" => function(){
       RegijeController::porabaRegij();
    },
    "obcina/primerjava" => function(){
        RegijeController::primerjava();
    },
     "obcina/analiza" => function() {
        ObcineController::analiza();
    },
    "o-projektu" => function(){
        ViewHelper::render("view/o-projektu.php");
    }

];

//pogledamo, ce je path v url
try {
    //ce je, klicemo funkcijo
    if (isset($urls[$path])) {
        $urls[$path]();
    } else {
        //ce ni, izpisemo sporocilo
        echo("no controller for '$path' ");
    }
} catch (Exception $e) {
    echo($e);
    ViewHelper::error404();
}