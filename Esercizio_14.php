<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    function generaSfondo($lar) {
        if($lar < 150) {
            return "#7FFFD4";
        } else if($lar >= 150 && $lar <= 250) {
            return "#1E90FF";
        } else {
            return "#0000FF";
        }
    }
    
    $larghezza = rand(50, 500);
    $colore = generaSfondo($l);
    $altezza = $larghezza * 2;

    echo "<div style='width: {$l}px; height: {$altezza}px; background-color: $colore'></div>";
    
    ?></body>
</html>
