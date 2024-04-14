<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Voila je parcours mon repertoire !!!</h1>
    <?php
        $chemin = $_SERVER['DOCUMENT_ROOT'];
        $tab = scandir($chemin);

        foreach ($tab as $elem) {
            if (($elem != '.') && ($elem != '..') && ($elem != '.DS_Store')&& ($elem != '.git')) {
                echo "$elem <br>";
            }
        }
    ?>
</body>
</html>
