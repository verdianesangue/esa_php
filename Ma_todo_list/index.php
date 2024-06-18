<?php 
#require 'models/secure.php';
require 'views/layout/head.php';






if (isset($_SESSION['message'])) {
    echo '<p>' . $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}
#if(($_GET['page'] ?? null) &&  (in_array($_GET['page'], $pages))){

    #require 'views/'.$_GET['page'].'.php';
#}else{
    #
#}

require 'views/main.php';



require 'views/layout/footer.php';