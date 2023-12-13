<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Dashboard</title>
    <!-- Add your CSS styles here -->
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
        <h1>Catalogue List</h1>
    </header>

    <nav>
        <a href =""></a>
        <a href="home.php">Home</a>
        <a href="ajoutCatalogue.html">Add Catalogue</a>
        <a href="rechercherCatalogue.html">search Catalogue</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <div class="container">
        <h2>Welcome to casanova</h2>

        <?php
        require_once('../controllers/ProduitController.php');
        $produitController = new ProduitController();
        $listeProduits = $produitController->liste();

        echo "<table border=1>
        <tr>
        <th>ID Produit</th>
        <th>Nom du Produit</th>
        <th>Caractéristique</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Modifier</th>
        <th>Supprimer</th></tr>";

        if (is_array($listeProduits) || is_object($listeProduits)) {
            foreach ($listeProduits as $produit) {
                echo "<tr>
                    <td>{$produit['idProduit']}</td>
                    <td>{$produit['nomProduit']}</td>
                    <td>{$produit['caracteristique']}</td>
                    <td>{$produit['prix']}</td>
                    <td>{$produit['quantite']}</td>
                    <td><a href ='modifCatalogue.php?id={$produit['idProduit']}'>Modifier</a></td>
                    <td><a href='supCatalogue.php?id={$produit['idProduit']}'>Supprimer</a></td>
                </tr>";
            }
        }

        echo "</table>";
        
        ?>
    </div>
</body>
</html>
