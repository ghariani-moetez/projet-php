<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');

$idCommande = $_POST['idCommande'];
$idClient = $_POST['idClient'];
$dateCommande = $_POST['dateCommande'];
$etatCommande = $_POST['etatCommande'];

$commande = new Commande($idCommande, $idClient, $dateCommande, $etatCommande);
$commandeController = new CommandeController();

$commandeController->modifier_commande($commande);
header('Location: indexCommande.php');
?>
