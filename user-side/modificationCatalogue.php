<?php
require_once('../controllers/ProduitController.php'); // Make sure to use the correct controller
require_once('../models/Produit.php'); // Make sure to use the correct model

$catalogueCtr = new ProduitController();
$produit = new Produit();

$produit->setId($_POST['idProduit']);
$produit->setNom($_POST['nomProduit']);
$produit->setCaracteristique($_POST['caracteristique']);
$produit->setPrix($_POST['prix']);
$produit->setQuantite($_POST['quantite']);

$catalogueCtr->modifier_produit($produit); // Make sure to use the correct method to modify a product
header('Location: indexCatalogue.php');
?>
    