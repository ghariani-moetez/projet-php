<?php
require_once('../controllers/ClientController.php');
$clientCtr=new ClientController();
$clientCtr->delete($_GET['id']);
header('Location:indexClient.php');
?>
