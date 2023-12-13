<?php
include_once('../models/Produit.php') ;
include_once('../database/config.php');

class ProduitController extends Connexion
{
    function __construct() {
        parent::__construct();
    }

    function insert(Produit $p) {
        $query = "INSERT INTO catalogue(idProduit, nomProduit, caracteristique, prix, quantite) VALUES (?,?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($p->getId(), $p->getNom(), $p->getCaracteristique(), $p->getPrix(), $p->getQuantite());
        return $res->execute($aryy);
    }

    function getProduit($id) {
        $query = "SELECT * FROM catalogue WHERE idProduit = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function delete($id) {
        $query = "DELETE FROM catalogue WHERE idProduit=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($id));
    }

    function liste() {
        $query = "SELECT * FROM catalogue";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifier_produit(Produit $p) {
        $sql = "UPDATE catalogue SET nomProduit=?, caracteristique=?, prix=?, quantite=? WHERE idProduit=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($p->getNom(), $p->getCaracteristique(), $p->getPrix(),$p->getQuantite(), $p->getId()));
    }
    
    function chercher($criteria, $value)
    {
        $query = "SELECT * FROM catalogue WHERE $criteria = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($value));

        return $res->fetchAll();
    }
    
}
?>