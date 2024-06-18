<?php 
require 'layout/head.php';
require '../controllers/function.php';
$file = '../controllers/todos.csv';
$taches = getTodos($file);
?>
<h1>Liste des tâches</h1>

<table>
    <tr>
        <th>Nom de la tache</th>
        <th>Status</th>
        <th colspan="2">Action</th>
    </tr>
    <tbody>
        <?php
        if (isset($_SESSION['message'])) {
            echo '<p>' . $_SESSION['message'] . '</p>';
            unset($_SESSION['message']);
        }

        if (!empty($taches)): ?>
            <?php foreach ($taches as $index => $tache): ?>
                <tr>
                    <td><?php echo $tache['nom']; ?></td>
                    <td><?php echo htmlspecialchars($tache['status'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <form action="modifier_tache.php" method="GET" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="modifier">
                        </form>
                        <form action="supprimer_tache.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="supprimer">
                        </form>
                        <form action="toggle.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="changer status">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Aucune tâche trouvée.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<li><a href="../index.php">Menu</a></li>
<?php
require 'layout/footer.php';
?>