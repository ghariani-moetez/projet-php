<?php
require_once('../controllers/ProduitController.php'); // Make sure to use the correct controller
$catalogueCtr = new ProduitController(); // Make sure to use the correct controller

$res = $catalogueCtr->getProduit($_GET['id']); // Make sure to use the correct method to retrieve a product
?>

<style>
    /* Your style code remains unchanged */
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

<header>
    <h1>Modify Catalogue</h1>
</header>

<nav>
    <a href="indexCatalogue.php">Catalogue View</a>
    <a href="ajoutCatalogue.html">Add Product</a>
    <a href="rechercherCatalogue.html">Search Product</a>
    <!-- Add more navigation links as needed -->
</nav>

<div class="container">
    <h2>Welcome to casanova</h2>

    <form name='f1' method='post' action='modificationCatalogue.php'>
        <table border='1'>
            <tr>
                <td>ID Produit</td>
                <td><input type="text" name="idProduit" readonly="readonly" value="<?php echo $res['idProduit'] ?>" /></td>
            </tr>
            <tr>
                <td>Nom Produit</td>
                <td><input type="text" name="nomProduit" value="<?php echo $res['nomProduit'] ?>" /></td>
            </tr>
            <tr>
                <td>Caractéristique</td>
                <td><input type="text" name="caracteristique" value="<?php echo $res['caracteristique'] ?>" /></td>
            </tr>
            <tr>
                <td>Prix</td>
                <td><input type="text" name="prix" value="<?php echo $res['prix'] ?>" /></td>
            </tr>
            <tr>
                <td>Quantité</td>
                <td><input type="text" name="quantite" value="<?php echo $res['quantite'] ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="modifier" name="mod" /></td>
            </tr>
        </table>
    </form>
</div>

<?php
/*if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mod'])) {
    $produit = new Produit();
    $produit->setIdProduit($_POST['idProduit']);
    $produit->setNomProduit($_POST['nomProduit']);
    $produit->setCaracteristique($_POST['caracteristique']);
    $produit->setPrix($_POST['prix']);
    $produit->setQuantite($_POST['quantite']);

    $catalogueCtr->modifier_produit($produit); // Make sure to use the correct method to modify a product
    header('Location: indexCatalogue.php');
}*/
?>
