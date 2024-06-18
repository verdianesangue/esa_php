<?php
require '../controllers/function.php';
$file = '../controllers/todos.csv';

if (isset($_POST['task'])) {
    $index = $_POST['task'];

    if (toggle_tache($index, $file)) {
        echo "Statut modifié avec succès.";
    } else {
        echo "Erreur lors de la modification du statut de la tâche.";
    }
}

// Rediriger vers la liste des tâches après la modification du statut
header("Location: listes_taches.php");
exit;
