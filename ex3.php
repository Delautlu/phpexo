<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document 3</title>
        </head>
        <body>

<!-- EX1 -->
<?php
$mois = array(
    "Janvier"   => 31,
    "Février"   => 28,
    "Mars"   =>  31,
    "Avril"   =>  30,
    "Mai"   =>  31,
    "Juin"   =>  30,
    "Juillet"   =>  31,
    "Août"   =>  31,
    "Septembre"   => 30,
    "Octobre"   =>  31,
    "Novembre"   =>  30,
    "Décembre"  =>  31
);
asort($mois);

foreach($mois as $cle => $valeur) 
{ 
   echo $cle . " : ". $valeur. "<br>"; 
}

?>
<br>

<!-- EX2 -->
<?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
ksort($capitales);
// asort($pays);
// foreach($capitales as $capi => $pays) {

//     echo ($capi . " : " . $pays  ."<br>");
// }

$nb = count($capitales);
echo "le tableau contient " .$nb . " éléments." ."<br>";


 foreach($capitales as $capi => $pays){
    $lettre = substr($capi, 0, 1);
    if ($lettre == "B") {
        unset($capitales[$capi]);
    } else {
        echo ($capi . " : " . $pays . "<br>");
    }
 }
?>
<br>
<!-- EX3 -->
<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
ksort($departements);
foreach ($departements as $key => $regions){
    echo ($key . " : ");
   foreach ($regions as $reg){
    echo ($reg . " , ");
   }
    echo ("<br>");
}
echo ("<br>");

foreach ($departements as $key => $regions) {
    echo ($key . " : " . count($regions) . "<br>");
}
?>
        </body>
    </html>