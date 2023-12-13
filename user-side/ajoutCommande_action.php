<?php
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php');

if (isset($_POST['idCommande'], $_POST['idClient'], $_POST['dateCommande'], $_POST['etatCommande'])) {
    $idCommande = $_POST['idCommande'];
    $idClient = $_POST['idClient'];
    $dateCommande = $_POST['dateCommande'];
    $etatCommande = $_POST['etatCommande'];

    $commande = new Commande($idCommande, $idClient, $dateCommande, $etatCommande);

    $commandeController = new CommandeController();

    $res = $commandeController->insert_commande($commande);
    /*echo"<br>***************";
print_r($res);*/
    if($res==true){
        header('Location:indexCommande.php');
    }
} else {
    echo "Veuillez remplir tous les champs du formulaire.";
    header('Location:indexCommande.php');
}   
?>
