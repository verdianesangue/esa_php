<?php
require '../controllers/function.php';
$file = '../controllers/todos.csv';

if (isset($_POST['task'])) {
    $index = $_POST['task'];

    if (delete_tache($index, $file)) {
        $_SESSION['message'] = 'Action éffectuée avec succès!';
        header("Location: listes_taches.php");
    } else {
        echo "Erreur lors de la suppression de la tâche.";
    }
}

// Rediriger vers la liste des tâches après la suppression

exit;
