<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document 2</title>
        </head>
        <body>

        <!-- EX1 -->
            <?php
                $a =1 ;
            while ($a <150){
                echo $a . " ";
                $a=$a+2;
            }
            echo "<br>";
            ?> 

        <!-- EX2 -->
            <?php
            for ($a = 1; $a <= 500; $a++) { 
            echo "$a Je dois faire des sauvegardes régulières de mes fichiers <br>"; 
            }
            echo "<br>";
            ?> 
        <!-- EX3 -->
             <?php
            $NbrCol = 12;
            $NbrLigne = 12;

            echo '<table border="1" width="400">';
            // 1ere ligne (ligne 0)
               echo '<tr>';
               echo '<td bgcolor="#CCCCCC">X</td>';
               for ($j=0; $j<=$NbrCol; $j++) {
                  echo '<td bgcolor="#FFFF66">'.$j.'</td>';
               }
               echo '</tr>';
            // -------------------------------------------------------
            // lignes suivantes
            for ($i=0; $i<=$NbrLigne; $i++) {
               echo '<tr>';
               for ($j=0; $j<=$NbrCol; $j++) {
                   // 1ere colonne (colonne 0)
                  if ($j==0) {
                     echo '<td bgcolor="#FFFF66">'.$i.'</td>';
                  }
                   // colonnes suivantes
                     if ($i==$j) {
                        echo '<td bgcolor="#FFCC66">';
                     } else {
                        echo '<td>';
                     }
                   // ------------------------------------------
                   // AFFICHAGE ligne $i, colonne $j
                  echo $i*$j;
                   // ------------------------------------------
                  echo '</td>';
               }
               echo '</tr>';
               $j=1;
            }
            echo '</table>';
            ?> 

        </body>
    </html>