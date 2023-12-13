<?php
require_once('../controllers/UserController.php');
require_once('../models/User.php');

if (isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['mot2pass'],$_POST['role'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email= $_POST['email'];
    $mot2pass = $_POST['mot2pass'];
    $role = $_POST['role'];

    $user = new User($id, $nom, $prenom,$email, $mot2pass, $role);

    $userController = new UserController();

    $res = $userController->insert($user);

    if ($res == true) {
        header('Location: indexUser.php');
    }
} else {
    echo "Please fill in all the form fields.";
    header('Location: indexUser.php');
}
?>
