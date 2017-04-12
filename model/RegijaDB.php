<?php
require_once "DBInit.php";

class RegijaDB{
	 public static function getRegije(){
        $db = DBInit::getInstance();
        $statement = $db->prepare("SELECT * FROM  regije ORDER BY Ime_regije ASC");
        $statement->execute();

        return $statement->fetchAll();
    }
    public static function orderRegije($val){
        $db = DBInit::getInstance();
        $statement = $db->query("SELECT Ime_regije, $val as skupaj, prebivalci, $val/prebivalci AS vrednost FROM regije  ORDER BY vrednost DESC")->fetchAll();

        return $statement;
    }

    public static function getRegija($id){
       $db = DBInit::getInstance();
       $stm = $db->prepare("SELECT * FROM regije WHERE Sifra_regije = :id");
       $stm->bindParam(":id", $id, PDO::PARAM_INT);
       $stm->execute();
       return $stm-> fetch();
    }
    public static function getPozicijaRegije($id,$kriterij){
         $db = DBInit::getInstance(); //naredi povezavo na bazo
          $statement = $db->query(
            "SELECT t.sifra_regije, t.$kriterij,
            (SELECT COUNT(*) FROM regije
                WHERE regije.$kriterij > t.$kriterij)+1 as position,t.ime_regije
                FROM regije t
                WHERE t.sifra_regije = $id
            ")->fetch();
             return $statement;
    }
}
