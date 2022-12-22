<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document 4</title>
        </head>
        <body>

<!-- EX1 -->
<?php
function lien ($lien,$titre){
echo "<a href = $lien> $titre</a>";
}
lien("https://www.reddit.com/", "Reddit Hug");
?>
<br><br>

<!-- EX2 -->
<?php
function tableau($a){
    $a = array(4, 3, 8, 2);
    echo "sum(a)=" . array_sum($a) ."\n";
}
tableau($a);
?>

<!-- EX3 -->






        </body>
    </html>