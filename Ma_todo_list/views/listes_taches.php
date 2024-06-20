<?php 
require 'controllers/function.php';
$file = 'controllers/todos.csv';
$taches = getTodos($file);
$taches_en_cours = array_filter($taches, function($tache) {
    return $tache['status'] !== 'terminer';
});
$taches_terminer = array_filter($taches, function($tache) {
    return $tache['status'] === 'terminer';
});
?>
<h2 class="liste"><img src="/views/images/list.png" alt="">Liste des tâches</h2>


        <h2>Tâches en cours</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php if (empty($taches_en_cours)): ?>
                <tr>
                    <td colspan="3" style="text-align: center; padding: 2%;">Aucune tâche en cours.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($taches_en_cours as $index => $tache): ?>
                <tr class="task-container">
                    <td><?php echo htmlspecialchars($tache['nom']); ?></td>
                    <td><?php echo htmlspecialchars($tache['status'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <form action="views/modifier_tache.php" method="GET" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="modifier">
                        </form>
                        <form action="views/supprimer_tache.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="supprimer">
                        </form>
                        <form action="views/toggle.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="changer status">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
   
        <h2>Tâches terminées</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php if (empty($taches_terminer)): ?>
                <tr>
                    <td colspan="3" style="text-align: center; padding: 2%;">Aucune tâche terminée.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($taches_terminer as $index => $tache): ?>
                <tr style="text-decoration: line-through; color: purple;">
                    <td><?php echo htmlspecialchars($tache['nom']); ?></td>
                    <td><?php echo htmlspecialchars($tache['status'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <form action="views/modifier_tache.php" method="GET" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="modifier">
                        </form>
                        <form action="views/supprimer_tache.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="supprimer">
                        </form>
                        <form action="views/toggle.php" method="POST" style="display:inline;">
                            <input type="hidden" name="task" value="<?php echo $index; ?>">
                            <input type="submit" value="changer status">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
   