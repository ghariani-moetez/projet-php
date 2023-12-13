<?php
class Commande {
    private $idCommande, $idClient, $dateCommande, $etatCommande;

    function __construct($idCommande = "", $idClient = "", $dateCommande = "", $etatCommande = "") {
        $this->idCommande = $idCommande;
        $this->idClient = $idClient;
        $this->dateCommande = $dateCommande;
        $this->etatCommande = $etatCommande;
    }

    public function getIdCommande() {
        return $this->idCommande;
    }

    public function getIdClient() {
        return $this->idClient;
    }

    public function getDateCommande() {
        return $this->dateCommande;
    }

    public function getEtatCommande() {
        return $this->etatCommande;
    }

    public function setIdCommande($idCommande) {
        $this->idCommande = $idCommande;
    }

    public function setIdClient($idClient) {
        $this->idClient = $idClient;
    }

    public function setDateCommande($dateCommande) {
        $this->dateCommande = $dateCommande;
    }

    public function setEtatCommande($etatCommande) {
        $this->etatCommande = $etatCommande;
    }
}
?>
