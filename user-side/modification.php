<?php
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');

$clientCtr = new ClientController();  
$client = new Client();

$client->setId($_POST['id']);
$client->setFirstName($_POST['nom']);
$client->setPrenom($_POST['prenom']);
$client->setTel($_POST['telephone']);

$clientCtr->modifier_user($client);
header('Location: indexClient.php');
?>
