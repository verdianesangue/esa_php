<?php

require 'layout/head.php';
require '../controllers/function.php';
$file = '../controllers/todos.csv';

$taches = getTodos($file);
$selectedTask = null;
$taskIndex = null;

if (isset($_GET['task']) && isset($_GET['nom']) && isset($_GET['status'])) {
    $index = $_GET['task'];
    $nouvelle_tache = ['nom' => $_GET['nom'], 'status' => $_GET['status']];

    if (edit_tache($index, $nouvelle_tache, $file)) {
        $_SESSION['message'] = 'Action éffectuée avec succès!';
        header("Location: listes_taches.php");
    } else {
        echo "Erreur lors de la modification de la tâche.";
    }
}
?>
<h1>Modifier Tâche</h1>

<form action="modifier_tache.php" method="GET">
    <input type="hidden" name="task" value="<?php echo $_GET['task']; ?>">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?php echo $taches[$_GET['task']]['nom']; ?>">
    <label for="status">Status:</label>
    <select name="status" id="status" value="<?php echo $taches[$_GET['task']]['status']; ?>">
        <option value="realiser">realiser</option>
        <option value="non realiser">non realiser</option>
    </select>
    <input type="submit" value="Modifier">
</form>

<?php
require 'layout/footer.php';
?>

