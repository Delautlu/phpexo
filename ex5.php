<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document 5</title>
</head>
<body>


<!-- EX1 -->
<?php
echo "<span style='color: green;'> le numéro de la semaine est le : </span>";
echo date('W',strtotime('2019/07/14'));
?>

<br><br>

<!-- EX2 -->
<?php
$debut = strtotime('2022-12-19');
$fin = strtotime('2023-02-03');
$dif = ceil(abs($fin - $debut) / 86400);
echo "<span style='color: red;'> Il reste : </span>";

echo $dif ." " ."jours avant la fin de la formation";
?>

<br><br>

<!-- EX3 -->
<?php
function estAnneeBissextile($annee)
{
$estMultipleDeQuatreCent = ( ($annee % 400) == 0);
$estMultipleDeQuatre = ( ($annee % 4) == 0);
$estPasMultipleDeCent = ( ($annee % 100) != 0);
return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
$estPasMultipleDeCent ) );
}
$y = date("Y"); // pour les tests modifier manuellement $y
if(estAnneeBissextile($y))
$message = $y."<span style='color: blue;'> est une année bissextile !<br/></span>";
else $message = $y."<span style='color: blue;'> n'est pas une année bissextile !<br/></span>";
echo $message;
?>

<br>

<!-- EX4 -->

<?php
$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "32/17/2019 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "<span style='color: orange;'>Erronée !</span>";
}
?>

<br><br>

<!-- EX5 -->
<?php
$heure = new DateTime($macolonne_sql);
echo "<span style='color: red ;'>Date actuelle : </span>";
echo $heure->format("H \h i");
?>

<br><br>

<!-- EX6 -->
<?php
echo "<span style='color: green;'>Date + 1 mois : </span>";
echo date("d-m-Y", strtotime("+1 month"));
?>

<br><br>

<!-- EX7 -->
<?php
$timestamp = 1000200000;
$format = "l d M Y à H:i:s";
echo "<span style='color: grey;'>Que s'est - il passé le : </span>";
echo date($format, $timestamp); 
?>

</body>
</html>