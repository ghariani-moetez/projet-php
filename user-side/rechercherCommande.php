<?php
// Include necessary files and classes
require_once('../controllers/CommandeController.php');
require_once('../models/Commande.php'); // Assuming this is the file where your CommandeController class is defined

// Check if the form is submitted
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
    <h1>Commande Search Results</h1>
</header>

<nav>
    <a href='indexCommande.php'>Commande View</a>
    <a href='ajoutCommande.html'>Add Commmande</a>
    <a href='rechercherCommande.html'>back</a>    <!-- Add more navigation links as needed -->
</nav>
<h3>Welcome to casanova</h3>"; 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $criteria = $_GET['criteria'];
    $value = $_GET['value'];

    if (empty($criteria) || empty($value)) {
        die("Please provide both search criterion and value.");
    }

    try {
        $controller = new CommandeController();

        $results = $controller->chercher($criteria, $value);

        // echo "<h2>Catalog Search Results</h2></br>";
        // echo "<h3><a href='indexCommande.php'>back</a></h3>";
        if (empty($results)) {
            echo "No matching commandes found.";
        } else {
            echo "<table border='1'>
                    <tr>
                        <th>Commande ID</th>
                        <th>Client ID</th>
                        <th>Commande Date</th>
                        <th>Commande State</th>
                    </tr>";

            foreach ($results as $result) {
                echo "<tr>
                        <td>{$result['idCommande']}</td>
                        <td>{$result['idClient']}</td>
                        <td>{$result['dateComande']}</td>
                        <td>{$result['etatCommande']}</td>
                      </tr>";
            }

            echo "</table>";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    // Redirect or display an error message if the form is not submitted
    header("Location: indexCommande.php");
    exit();
}
?>
