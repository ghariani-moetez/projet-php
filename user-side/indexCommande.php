<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande View</title>
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
            border: 1px solid #ddd;
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
</head>
<body>
    <header>
        <h1>Commande List</h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="ajoutCommande.html">Add Commande</a>
        <a href="rechercherCommande.html">search Commande</a>
    </nav>

    <div class="container">
        <h2>Welcome to casanova</h2>

        <?php
            require_once('../controllers/ClientController.php'); 
            require_once('../controllers/CommandeController.php'); 
            require_once('../models/Produit.php');
            $commandeController = new CommandeController(); 
            $listeCommandes = $commandeController->liste(); 
            $clientcontroller=new ClientController();
             $listeClient= $client

            echo "<table border=1>
            <tr>
            <th>ID Commande</th>
            <th>ID Client</th>
            <th>nom client</th>
            <th>Date Commande</th>
            <th>État Commande</th>
            <th>Modifier</th>
            <th>Supprimer</th></tr>";

            if (is_array($listeCommandes) || is_object($listeCommandes)) {
                foreach ($listeCommandes as $commande) {
                    // $nom=;
                    echo "<tr>
                        <td>{$commande['idCommande']}</td>
                        <td>{$commande['idClient']}</td>
                        <td>{$client->getNom($commande['idClient'])}</td>
                        <td>{$commande['dateCommande']}</td>
                        <td>{$commande['etatCommande']}</td>
                        <td><a href ='modifCommande.php?id={$commande['idCommande']}'>Modifier</a></td>
                        <td><a href='supCommande.php?id={$commande['idCommande']}'>Supprimer</a></td>
                    </tr>";
                }
            }

            echo "</table>";  

            ?>
    </div>
</body>
</html>
