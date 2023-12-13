<?php
require_once('../controllers/ClientController.php');
$us = new ClientController();
$res = $us->liste();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
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
        <h1>Client List</h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="rechercherClient.html">Search Client</a>
        <a href="ajoutClient.html">add Client</a>
    </nav>

    <div class="container">
        <h2>Client List</h2>

        <table>
            <tr>
                <th>Numero id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php
            if (is_array($res) || is_object($res)) {
                foreach ($res as $row) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nom']}</td>
                            <td>{$row['prenom']}</td>
                            <td>{$row['telephone']}</td>
                            <td><a href='modifClient.php?id={$row['id']}'>Modifier</a></td>
                            <td><a href='sup.php?id={$row['id']}'>Supprimer</a></td>
                          </tr>";
                }
            }
            ?>
        </table>

     
    </div>
</body>
</html>
