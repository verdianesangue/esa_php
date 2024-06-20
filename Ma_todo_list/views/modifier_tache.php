<?php

require 'layout/head.php';
require '../controllers/function.php';
$file = '../controllers/todos.csv';

$taches = getTodos($file);
$tache_selectionner = null;
$index_tache = null;
if (isset($_GET['task'])) {
    $index_tache = $_GET['task'];
    $tache_selectionner = $taches[$index_tache];
}

if (isset($_GET['task']) && isset($_GET['nom']) && isset($_GET['status'])) {
    $index = $_GET['task'];
    $nouvelle_tache = ['nom' => $_GET['nom'], 'status' => $_GET['status']];

    if (edit_tache($index, $nouvelle_tache, $file)) {
        $_SESSION['message'] = 'Tâche modifier avec succès!';
        header("Location: ../index.php");
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
    <select id="status" name="status" required>
            <option value="non terminer" <?php if ($tache_selectionner['status'] == 'non  terminer') echo 'selected'; ?>>non terminer</option>
            <option value="terminer" <?php if ($tache_selectionner['status'] == 'terminer') echo 'selected'; ?>>terminer</option>
    </select>
    <input type="submit" value="Modifier">
    <li><a href="../index.php">retour</a></li>
</form>

<?php
require 'layout/footer.php';
?>

