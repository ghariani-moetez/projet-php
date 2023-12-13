<?php
// Include necessary files and classes
require_once('../controllers/ClientController.php');
require_once('../models/Client.php');
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
    <h1>Client Search Results</h1>
</header>

<nav>
    <a href='indexClient.php'>Client View</a>
    <a href='ajoutClient.html'>Add Client</a>
    <a href='rechercherClient.html'>back</a>    <!-- Add more navigation links as needed -->
</nav>
<h3>Welcome to casanova</h3>"; 
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $criteria = $_GET['criteria'];
    $value = $_GET['value'];
    if (empty($criteria) || empty($value)) {
        die("Please provide both search criteria and value.");
    }

    try {
        $controller = new ClientController();

        $results = $controller->chercher($criteria, $value);

        // echo "<h2>Catalog Search Results</h2></br>";
        // echo "<h3><a href='indexClient.php'>back</a></h3>";
        if (empty($results)) {
            echo "No matching clients found.";
        } else {
            echo "<table border='1'>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Telephone</th>
                    </tr>";

            foreach ($results as $result) {
                echo "<tr>
                        <td>{$result['id']}</td>
                        <td>{$result['nom']}</td>
                        <td>{$result['prenom']}</td>
                        <td>{$result['telephone']}</td>
                      </tr>";
            }

            echo "</table>";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>
