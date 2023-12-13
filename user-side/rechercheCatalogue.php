
<?php
// Include necessary files and classes
require_once('../controllers/ProduitController.php');
require_once('../models/Produit.php');
// Assuming this is the file where your ProduitController class is defined
echo "<style>  body {
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
}</style>
<header>
    <h1>Catalog Search Results</h1>
</header>

<nav>
    <a href='indexCatalogue.php'>Catalogue View</a>
    <a href='ajoutCatalogue.html'>Add Product</a>
    <a href='rechercherCatalogue.html'>back</a>    <!-- Add more navigation links as needed -->
</nav>
<h3>welcome to casanova</h3>"; 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $criteria = $_GET['criteria'];
    $value = $_GET['value'];

    if (empty($criteria) || empty($value)) {
        die("Please provide both search criterion and value.");
    }

    try {
        $controller = new ProduitController();

        $results = $controller->chercher($criteria, $value);

       
        echo "<h3></h3>";

        if (empty($results)) {
            echo "No matching products found.";
        } else {
            echo "<table border='1'>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Product Characteristics</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                    </tr>";

            foreach ($results as $result) {
                echo "<tr>
                        <td>{$result['idProduit']}</td>
                        <td>{$result['nomProduit']}</td>
                        <td>{$result['caracteristique']}</td>
                        <td>{$result['prix']}</td>
                        <td>{$result['quantite']}</td>
                      </tr>";
            }

            echo "</table>";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    // Redirect or display an error message if the form is not submitted
    header("Location: index.php");
    exit();
}
?>
