<?php
include_once('../models/User.php');
include_once('../database/config.php');

class UserController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(User $u)
    {
        $query = "INSERT INTO user(nom, prenom, email, mot2pass, role) VALUES (?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $aryy = array($u->getNom(), $u->getPrenom(), $u->getEmail(), $u->getMot2pass(), $u->getRole());
        return $res->execute($aryy);
    }

    function getUser($idUser)
    {
        $query = "SELECT * FROM user WHERE idUser = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($idUser));
        $array = $res->fetch();
        return $array;
    }

    function delete($idUser)
    {
        $query = "DELETE FROM user WHERE idUser=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idUser));
    }

    function userList()
    {
        $query = "SELECT * FROM user";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function updateUser(User $u)
    {
        $sql = "UPDATE user SET nom=?, prenom=?, email=?, mot2pass=?, role=? WHERE idUser=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($u->getNom(), $u->getPrenom(), $u->getEmail(), $u->getMot2pass(), $u->getRole(), $u->getIdUser()));
    }
    function testlogin($email,$mdp){
        $query= "select * from user where email='$email' and mot2pass='$mdp'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    function testadmin($user){
        $query="select * from user where role='admin'";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }
    }
}
?>
