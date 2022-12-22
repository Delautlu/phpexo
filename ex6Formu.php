<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document 6</title>
</head>
<body>
<header class="entête">
        <img src="assets/img/jarditou_logo.jpg" class="logo" title="promo sur les lames" alt="logojar"><br><br>
        <h1 class="h1">Tout le jardin</h1>
    </header>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>   
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="menu">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="tableau.html">Tableau</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>

    <img src="assets/img/promotion.jpg" class="promojpg" title="promo sur les lames" alt="promoban">
   
    <article>
        <h2>Contact</h2> 
        <form action="http://127.0.0.1:8080/ex6Formu.php" method="get" id="formulaire_contact"> 
            <h3>*ces zones sont obligatoires</h3>  

            <section class="s1">
                <fieldset>
                    <legend>Vos coordonnées</legend><br>
                    <label for="nom">Votre nom*:</label><input type="text" name="nom" id="nom" >
                    <span id="alert_name"></span>
        <br>

                    <label for="votre_prenom">Votre prénom*:</label><input type="text" name="prenom" id="prenom">
                    <span id="alert_pre"></span>
        <br>

                    <label for="sexe">Sexe*</label>
                        <input type="radio" name="sexe" value="féminin" class="fem" id="sexe1">féminin
                        <input type="radio" name="sexe" value="masculin" class="men" id="sexe2">masculin
                        <span id="sx_alert"></span>  
        <br>

                    <label for="date">Date de naissance*:</label><input type="date" name="ddn" id="date" >
                    <span id="alert_dateNaissance"></span>
        <br>

                    <label for="code_postal">Code postal*:</label><input type="text" name="code postal" id="code_postal">
                    <span id="alert_cdp"></span>
        <br>

                    <label for="adresse">Adresse:</label><input type="text" name="adresse" id="adresse">
        <br>
                    <label for="ville">Ville:</label><input type="text" name="ville" id="ville">
        <br>
        
                    <label for="mail">Email*:</label><input type="text" name="mail" id="email" >
                    <span id="alert_ml"></span>

                </fieldset>
                <fieldset>
                    <legend>Votre demande</legend><br>
                    <label for="sujet">Sujet*</label>
                    <select id="sujet"><span id="sj"></span>
                        <option value="Veuillez sélectionner un sujet">Veuillez sélectionner un sujet</option>
                        <option value="Mes commandes">Mes commandes</option>
                        <option value="Question sur un produit">Question sur un produit</option>
                        <option value="Réclamation">Réclamation</option>
                        <option value="Autres">Autres</option>
                    </select>
        <br>
                    <label for="votre_question">Votre question*:</label><input type="text" name="votre question" id="votre_question" size="40" >
                    <span id="ques"></span>
                </fieldset>

                <input type="checkbox" name="accepte" id="coche">
                <label for="accepte">* J'accepte le traitement informatique de ce formulaire</label>
                <span id="acce"></span>
                <br>
        
                <input type="submit" name="but1" id="bt1" value="Envoyer">
		        <input type="reset" name="but2" id="bt2" value="annuler">
            </section> 
        </form>
    </article>

    
    <footer>
        <ul class="list2">
            <li><a href="#">Mention Légales</a></li>
            <li><a href="#">Horaires</a></li>
            <li><a href="#">Plan du site</a></li>
        </ul>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="contactFormu.js"></script>


<br><br><br>


<?php

echo "<span style='color: blue;'>Bonjour</span>" . "<br>" . $_GET['nom'] . "  " . $_GET['prenom'] . "<br>" . $_GET['sexe'] . "  " . "<br>"
    . $_GET['ddn'] . "<br>" . $_GET['code postal'] . "  " . $_GET['adresse'] . "<br>" . $_GET['ville'] . " " . "<br>" . $_GET['mail'] . "<br>" . $GET['votre question'];



?>



</body>
</html>
