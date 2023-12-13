<?php
require_once('../controllers/UserController.php');
$userCtr = new UserController();
$res = $userCtr->getUser($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
        <h1>Modify User</h1>
    </header>
     <nav>
        <a href="indexUser.php">User View</a>
        <!-- Add more navigation links as needed -->
    </nav>

    <div class="container">
        <h2>Welcome to casanova</h2>

        <form name='f1' method='post' action='modificationUser.php'>
            <table border='1'>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id" readonly="readonly" value="<?php echo $res['idUser'] ?>" /></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" value="<?php echo $res['nom'] ?>" /></td>
                </tr>
                <tr>
                    <td>Prenom</td>
                    <td><input type="text" name="prenom" value="<?php echo $res['prenom'] ?>" /></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td><input type="text" name="email" value="<?php echo $res['email'] ?>" /></td>
                </tr>
                <tr>
                    <td>mot,de passe</td>
                    <td><input type="password" name="mot2pass" value="<?php echo $res['mot2pass'] ?>" /></td>
                </tr>
                <tr>
                    <td>Role</td>
                    <td><input type="text" name="role" value="<?php echo $res['role'] ?>" /></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Modifier" name="mod" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
