<?php
require_once '../contoller/cutilisateur.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = new UserController();
    $user->deleteUserById($id);
    header('Location:dashadmin.php');
}
?>