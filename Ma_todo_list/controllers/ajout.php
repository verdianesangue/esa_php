<?php
session_start();
require "function.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = [
        'nom' => $_POST['nom'],
        'status' => $_POST['status'],
    ];
    add_task($task, $file);
    $_SESSION['message'] = 'Tâche ajouter avec succès!';
    header('Location: ../index.php');
    exit();
}
