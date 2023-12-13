<?php
require_once('../controllers/UserController.php');
$us = new UserController();
$res = $us->userList();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
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
        <h1>User List</h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="ajoutUser.html">Add User</a>
    </nav>

    <div class="container">
        <h2>User List</h2>

        <table>
            <tr>
                <th>User ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Role</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php
            if (is_array($res) || is_object($res)) {
                foreach ($res as $row) {
                    echo "<tr>
                            <td>{$row['idUser']}</td>
                            <td>{$row['nom']}</td>
                            <td>{$row['prenom']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['role']}</td>
                            <td><a href='modifUser.php?id={$row['idUser']}'>Modifier</a></td>
                            <td><a href='supUser.php?id={$row['idUser']}'>Supprimer</a></td>
                          </tr>";
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
