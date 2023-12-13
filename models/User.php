<?php
class User {
    private $idUser, $nom, $prenom, $email, $mot2pass, $role;

    function __construct($idUser = null, $nom = "", $prenom = "", $email = "", $mot2pass = "", $role = "") {
        $this->idUser = $idUser;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mot2pass = $mot2pass;
        $this->role = $role;
    }

    public function getIdUser() {
        return $this->idUser;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMot2pass() {
        return $this->mot2pass;
    }

    public function getRole() {
        return $this->role;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMot2pass($mot2pass) {
        $this->mot2pass = $mot2pass;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setIdUser($idUser) {
        $this->idUser = $idUser;
    }
}
?>
