<?php
require_once('../controllers/CommandeController.php'); // Assurez-vous d'utiliser le bon contrôleur
$commandeCtr = new CommandeController(); // Assurez-vous d'utiliser le bon contrôleur

$res = $commandeCtr->getCommande($_GET['id']); // Assurez-vous d'utiliser la méthode correcte pour récupérer une commande
?>
  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #555;
            padding: 10px;
        }

        nav a {
            color: #fff;
            margin-right: 20px;
            text-decoration: none;
        }

        .container {
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #ffff;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #555;
            color: white;
        }

        a {
            margin-right: 10px;
            text-decoration: none;
        }
    </style>
       <header>
        <h1>Modify Commande</h1>
    </header>
     <nav>
        <a href="indexCommande.php">Commande View</a>
        <a href="ajoutCommande.html">Add Commande</a>
        <a href="rechercherCommande.html">search Commande</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <div class="container">
        <h2>Welcome to casanova</h2>

<form name='f1' method='post' action='modificationCommande.php'>
    <table border='1'>
        <tr>
            <td>ID Commande</td>
            <td><input type="text" name="idCommande" readonly="readonly" value="<?php echo $res['idCommande'] ?>" /></td>
        </tr>
        <tr>
            <td>ID Client</td>
            <td><input type="text" name="idClient" value="<?php echo $res['idClient'] ?>" /></td>
        </tr>
        <tr>
            <td>Date Commande</td>
            <td><input type="date" name="dateCommande" value="<?php echo $res['dateComande'] ?>" /></td>
        </tr>
        <tr>
            <td>État Commande</td>
            <td><input type="text" name="etatCommande" value="<?php echo $res['etatCommande'] ?>" /></td>
        </tr>
    
        <tr>
            <td><input type="submit" value="modifier" name="mod" /></td>
        </tr>
    </table>
</form>
