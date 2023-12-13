<?php

require_once("../controllers/UserController.php");
$usercontroller = new UserController();
$email = $_POST["email"];
$mdp = $_POST["mdp"];
session_start();
$res = $usercontroller->testlogin($email, $mdp);
if ($res->rowCount() == 1) {
    // $l = $res->fetch();
    // $_SESSION["id"] = $l[0];
    // $_SESSION["nom"] = $l[1];
    // $_SESSION["prenom"] = $l[2];
    // $_SESSION["email"] = $l[3];
    // $_SESSION["mot2pass"] = $l[4];
    header("location: home.php");
} else {
    header("refresh:0.1;url=index.php");
    echo "<script>alert('Wrong! Username/Password is invalid.')</script>";
   
}
?>
