<?php
require 'layout/head.php';
?>

<form action="../controllers/ajout.php" method="post">
    <label for="nom">Nom</label>
    <input type="text" placeholder="Entrez le nom de la tache" id="nom" name="nom" required>
    <label for="status">Status</label>
    <select name="status" id="status" required>
        <option value="non terminer">non terminer</option>
    </select>
    <input type="submit" value="Valider">
    <li><a href="../index.php">retour</a></li>
    

</form>

<?php 
require 'layout/footer.php';?>





 
