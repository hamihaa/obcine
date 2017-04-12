<?php
/**
 * Created by PhpStorm.
 * User: Miha
 * Date: 18-Oct-16
 * Time: 16:42
 */
require_once("model/ObcinaDB.php");
require_once("./ViewHelper.php");

class ObcineController{

    public static function get($id){
        $id = htmlspecialchars($id);
        $id = trim($id);
        $hits = ObcinaDB::getObcinaPoraba($id);
        ViewHelper::render("view/obcina/obcina-detail.php", ["hits" => $hits, "obcina" => ObcinaDB::get($id)]);
    }

    public static function getAll(){
        //viewhelper kliče view(prvi argument) in array, ki je shranjen pod song
        ViewHelper::render("view/obcina/obcina-list.php",
            ["hits" =>ObcinaDB::getAll() ]);
    }

    public static function search(){
        if(isset($_GET["query"])){
            $query = $_GET["query"];
            $query = htmlspecialchars($query);
            $query = trim($query);
            $hits = ObcinaDB::search($query);
        } else {
            $query = "";
            $hits = [];
        }
        ViewHelper::render("view/obcina/search-obcina.php", ["hits" => $hits]);
    }

    public static function poraba(){
        if(isset($_GET["val"])){
            $query = $_GET["val"];
            $num = $_GET["num"];
            $hits = ObcinaDB::getPoraba($query, $num);
        } else {
            $query = "";
            $hits = [];
        }
        ViewHelper::render("view/obcina/poraba.php", ["hits" => $hits]);
    }
      public static function analiza() {
        $hits = [];
        if(isset($_GET["val"])){
            #$hits = ObcinaDB::getAll();
            $hits = ObcinaDB::getAnaliza($_GET["val"]);
        }
        ViewHelper::render("view/analiza.php", ["hits"=> $hits]);
    }
   
}