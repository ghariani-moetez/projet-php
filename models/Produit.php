<?php
class Produit {
    private $id, $nom, $caracteristique, $prix, $quantite;

    function __construct($id = "", $nom = "", $caracteristique = "", $prix = 0.0,$quantite=0) {
        $this->id = $id;
        $this->nom = $nom;
        $this->caracteristique = $caracteristique;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCaracteristique() {
        return $this->caracteristique;
    }

    public function getPrix() {
        return $this->prix;
    }
    public function getQuantite() {
        return $this->quantite;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCaracteristique($caracteristique) {
        $this->caracteristique = $caracteristique;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setQuantite($quantite) {
        $this->quantite = $quantite;}
}
?>
