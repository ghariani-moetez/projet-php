<?php
require_once('../controllers/ProduitController.php');  
require_once('../models/Produit.php');  

$idProduit = $_POST['id'];
$nomProduit = $_POST['nom'];
$caracteristique = $_POST['caracteristique'];
$prix = $_POST['prix'];
$quantite= $_POST['quantite'];

$produit = new Produit($idProduit, $nomProduit, $caracteristique, $prix,$quantite);
$produitController = new ProduitController();

$res = $produitController->insert($produit);
if ($res == true) {
    header('Location: indexCatalogue.php');
}
?>
