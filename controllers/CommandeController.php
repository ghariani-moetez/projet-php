<?php
include_once('../models/Commande.php');
include_once('../database/config.php');

class CommandeController extends Connexion
{
    function __construct() {
        parent::__construct();
    }


    function insert_commande(Commande $cmd){

        $query="insert into commande(idCommande,idClient,dateCommande,etatCommande) values(?, ?, ?, ?)";
        $res=$this->pdo->prepare($query);
        $aryy =array($cmd->getIdCommande(), $cmd->getIdClient(), $cmd->getDateCommande(), $cmd->getEtatCommande()) ;
       // $aryy =array('kkii', '14440050', '2023-11-08','aa') ;
        //var_dump($aryy);
        return $res->execute($aryy);
        
    }
    /*function insert_commande(Commande $cmd) {
        //echo $cmd->getIdCommande()."<br>". $cmd->getIdClient()."<br>". $cmd->getDateCommande()."<br>". $cmd->getEtatCommande()."<br>";

       // $query = "INSERT INTO commande(idCommande,idClient,dateComande,etatCommande) VALUES ('zzy', '14440050', '2023-11-08','aa');";
       $quer = "INSERT INTO commande(idCommande,idClient,dateComande,etatCommande) VALUES (?,?,?,?)";
       $res = $this->pdo->prepare($quer);

       // $aryy = array($cmd->getIdCommande(), $cmd->getIdClient(), $cmd->getDateCommande(), $cmd->getEtatCommande());
      // 
      $aryy = array('kkii', '14440050', '2023-11-08','aa');
        
        return  $res->execute($arry);
    }*/

    function getCommande($idCommande) {
        $query = "SELECT * FROM Commande WHERE idCommande = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idCommande));
        $array = $res->fetch();
        return $array;
    }

    /*function delete($idCommande) {
        $query = "delete from commande where idCommande=?";
        $res=$this->pdo->prepare($query);
        return $res->execute(array($idCommande));
        }*/
        function delete($idCommande) {
            $query = "delete from commande where idCommande=?";
            $res = $this->pdo->prepare($query);
            $success = $res->execute(array($idCommande));
        
            if (!$success) {
                $errorInfo = $res->errorInfo();
                echo "PDO Error: " . $errorInfo[2];
            }
        
            return $success;
        }
        
    function liste() {
        $query = "SELECT * FROM Commande";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_commande(Commande $cmd) {
        $sql = "UPDATE Commande SET idClient=?, dateCommande=?, etatCommande=? WHERE idCommande=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($cmd->getIdClient(), $cmd->getDateCommande(), $cmd->getEtatCommande(), $cmd->getIdCommande()));
    }
    function chercher($criteria, $value)
    {
        $query = "SELECT * FROM Commande WHERE $criteria = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($value));

        return $res->fetchAll();
    }
}
?>
