<?php
require_once('../controllers/ProduitController.php');
$clientCtr=new ProduitController();
$clientCtr->delete($_GET['id']);
header('Location:indexCatalogue.php');
?>
