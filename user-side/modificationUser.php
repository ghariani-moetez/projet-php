<?php
require_once('../controllers/UserController.php');
require_once('../models/User.php');

$userCtr = new UserController();  
$user = new User();

$user->setIdUser($_POST['id']);
$user->setNom($_POST['nom']); 
$user->setPrenom($_POST['prenom']);
$user->setEmail($_POST['email']);   
$user->setmot2pass($_POST['mot2pass']); 
$user->setRole($_POST['role']); 
$userCtr->updateUser($user);
header('Location: indexUser.php');
?>
