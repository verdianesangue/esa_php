<?php 
require 'views/layout/head.php';

if (isset($_SESSION['message'])) {
    echo '<p>' . $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}

require 'views/main.php';
require 'views/listes_taches.php';



require 'views/layout/footer.php';