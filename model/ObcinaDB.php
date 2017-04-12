<?php
/**
 * Created by PhpStorm.
 * User: Miha
 * Date: 25-Oct-16
 * Time: 12:45<?php
/**
 * Created by PhpStorm.
 * User: Miha
 * Date: 18-Oct-16
 * Time: 16:51
+ datoteka, ki vsebuje - vse funkcije, ki jih izvajamo nad tabelo obcina
 */
require_once "DBInit.php";


class ObcinaDB {
    public static function getAll(){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->prepare("SELECT * FROM p2015 ORDER BY OBCINA ASC");
        $statement->execute();

        return $statement->fetchAll();
    }
    public static function getAnaliza($val){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->query("SELECT * FROM p2015 WHERE $val > 0 ORDER BY $val DESC LIMIT 2, 75");

        return $statement->fetchAll();
    }

    public static function insert($id, $lat, $lng){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        $stmt = $db->prepare("UPDATE p2015 SET lat = :lat, lng = :lng WHERE ID = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':lat', $lat);
        $stmt->bindParam(':lng', $lng);
        $stmt->execute();
    }

    //za občino skupaj
    public static function getObcinaPoraba($id){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->query("SELECT * FROM list2 WHERE ID = $id")->fetch();
        return $statement;
    }

    // povprecna vrednost za vsak kriterij
    public static function getKriterijPos($id, $kriterij){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->query(
            "SELECT t.ID, t.$kriterij,
        (SELECT COUNT(*)
        FROM p2015
        WHERE p2015.$kriterij > t.$kriterij)+1 AS position, t.OBCINA
        FROM p2015 t      
        WHERE t.ID = $id")->fetch();
        return $statement;
    }

    //za $kriterij vrne avg vrednost na prebivalca
    public static function getKriterijAvg($kriterij){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->query("SELECT SUM($kriterij)/212 AS avg FROM p2015;")->fetch();
        return $statement;
    }

    //primerjava občin
    public static function getPoraba($val, $num){
        $db = DBInit::getInstance(); //naredi povezavo na bazo
        //prepare statement
        $statement = $db->query("SELECT ID, OBCINA, lat, lng, prebivalstvo, $val AS vrednost FROM p2015 WHERE $val > 0 ORDER BY $val DESC LIMIT $num")->fetchAll();
        return $statement;
    }
    //za eno občino na prebivalca
    public static function get($id){
        $db = DBInit::getInstance();
        $statement = $db->prepare("SELECT * FROM  p2015 WHERE ID = :id");
        $statement->bindParam(":id", $id, PDO::PARAM_INT);
        $statement->execute();

        $book = $statement->fetch();

        if($book != null){
            return $book;
        } else {
            throw new InvalidArgumentException("Error Processing Request: $_GET[id]", 1);
        }
    }

    public static function search($query){
        $db = DBInit::getInstance();
        $statement = $db->prepare("SELECT * FROM  p2015 WHERE OBCINA LIKE :query");
        $statement->bindValue(":query", '%' . $query . '%');
        $statement->execute();

        return $statement->fetchAll();
    }
    
}
