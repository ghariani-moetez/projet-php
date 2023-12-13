<?php
require_once('../controllers/UserController.php');
$clientCtr=new UserController();
$clientCtr->delete($_GET['id']);
header('Location:indexUser.php');
?>
