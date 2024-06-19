<?php
require_once '../controllers/function.php';
$file = '../controllers/todos.csv';

if (isset($_POST['task'])) {
    $index = $_POST['task'];
    

    if (toggle_tache($index, $file)) {
        $_SESSION['message'] = 'Status modifier avec succès!';
        header("Location: ../index.php");
    } else {
        echo "Erreur lors de la modification du statut de la tâche.";
    }
    
}
