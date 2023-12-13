<?php
include_once('../models/Client.php') ;
include_once('../database/config.php');
class ClientController extends Connexion
{
    function __construct() {
        parent::__construct();
        }
        function insert(Client $c){

            $query="insert into client(id,nom,prenom,telephone)values(?, ?, ?, ?)";
            $res=$this->pdo->prepare($query);
            
            $aryy =array($c->getId(),$c->getNom(),$c->getPrenom(),$c->getTel()) ;
            //var_dump($aryy);
            return $res->execute($aryy);
            
            }
            
            function getClient($id){
                $query="SELECT * FROM client WHERE id = ? ";
                $res = $this->pdo->prepare($query);
                $res->execute(array($id));
                $array= $res->fetch();
                return $array;
            }
            function delete($id) {
            $query = "delete from client where id=?";
            $res=$this->pdo->prepare($query);
            return $res->execute(array($id));
            }
            function liste(){
            $query = "select * from client";
            $res=$this->pdo->prepare($query);
            $res->execute();
            return $res;
            }
            function modifier_user(Client $c)
            {
            $sql = "UPDATE client SET  nom=?, prenom=?,telephone=? WHERE id=?";
            $stmt= $this->pdo->prepare($sql);
            $stmt->execute(array($c->getNom(),$c->getPrenom(),$c->getTel(),$c->getId()));
            }
            function chercher($criteria, $value){
                // Define the query based on the criteria
                $query = "SELECT * FROM client WHERE $criteria = ?";
                $res = $this->pdo->prepare($query);
                $res->execute(array($value));
                
                // Fetch and return the result
                return $res->fetchAll();
            }
}
?>