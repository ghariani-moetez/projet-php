<?php

class Client {
private $id,$nom,$prenom,$telephone;
function __construct($id="",$nom="",$prenom="",$telephone="") {
	
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->telephone=$telephone;
}

public function getId(){
	return $this->id;
}

public function getNom(){
	return $this->nom;
}

public function getPrenom(){
	return $this->prenom;
}

public function getTel(){
	return $this->telephone;
}


public function setFirstName($nom){
        $this->nom = $nom;
    }

public function setId($id){
        $this->id = $id;
    }

public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

 public function setTel($telephone){
        $this->telephone = $telephone	;
    }
	
}?>