<?php
require_once("model/RegijaDB.php");
require_once("./ViewHelper.php");
class RegijeController{
    public static function getRegije(){
        ViewHelper::render("view/regija/regije-list.php",["hits"=> RegijaDB::getRegije()]);
    }
    public static function getRegija($id){
        ViewHelper::render("view/regija/regija-detail.php", ["regija"=> RegijaDB::getRegija($id)]);
    }
    public static function porabaRegij(){
        if(isset($_GET["val"])){
            $query = $_GET["val"];
            $hits = RegijaDB::orderRegije($query);
        } else {
            $query = "";
            $hits = [];
        }
        ViewHelper::render("view/regija/poraba-regije.php",["hits"=> $hits]);
    }
    public static function primerjava(){
        $hits = [];
        //array_push($hits,ObcinaDB::getRegija($id1),ObcinaDB::getRegija($id2));
        ViewHelper::render("view/obcina/primerjava.php",["hits"=> $hits]);
    }
}