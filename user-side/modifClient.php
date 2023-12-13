<?php
require_once('../controllers/ClientController.php'); // Assurez-vous d'utiliser le bon contrôleur
$clientCtr = new ClientController(); // Assurez-vous d'utiliser le bon contrôleur

$res = $clientCtr->getClient($_GET['id']); // Assurez-vous d'utiliser la méthode correcte pour récupérer un produit

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
        <h1>Modify Client</h1>
    </header>
     <nav>
            <a href =""></a>
        <a href="indexClient.php">Client View</a>
        <a href="ajoutClient.html">Add Client</a>
        <a href="rechercherClient.html">search Client</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <div class="container">
        <h2>Welcome to casanova</h2>

<form name='f1' method='post' action='modification.php'>
    <table border='1'>
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" readonly="readonly" value="<?php echo $res['id'] ?>" /></td>
        </tr>
        <tr>
            <td>Nom du Client</td>
            <td><input type="text" name="nom" value="<?php echo $res['nom'] ?>" /></td>
        </tr>
        <tr>
            <td>prenom</td>
            <td><input type="text" name="prenom" value="<?php echo $res['prenom'] ?>" /></td>
        </tr>
        <tr>
            <td>telephone</td>
            <td><input type="text" name="telephone" value="<?php echo $res['telephone'] ?>" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="modifier" name="mod" /></td>
        </tr>
    </table>
</form>

