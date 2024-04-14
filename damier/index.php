<!DOCTYPE html>
<html>
<head>
    <title>Damier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table class="damier">
       
    <?php for ($row = 1; $row <= 8; $row++){ 
            echo '<tr>';
            for ($col = 1; $col <= 8; $col++) {
                $class = ($row + $col) % 2 === 0 ? 'noir' : 'blanc';
                echo '<td class="' . $class . '"></td>';
            }
            echo '</tr>';
        }
    ?>
        
    </table>
</body>
</html>