<?php
require_once('../controllers/CommandeController.php');
$clientCtr=new CommandeController();
$clientCtr->delete($_GET['id']);
header('Location:indexCommande.php');
?>
