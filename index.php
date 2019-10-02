<?php
include "db.php";
    
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Charte des apprenants</title>
    <link rel="stylesheet" href="style.css">
</head>

    <body>
        <h1>Charte de l'apprenant.e</h1>
        
            <h2>Fonctionnement global de la promo / Boon of the tiger</h2>
            
                <ul>
                    <li>le confort de tou.te.s en compte tu prendras</li>
                    <li>des locaux propres tu préserveras</li>
                    <li>collectivement le vendredi tu rangeras</li>
                    <li>ta météo brièvement tu feras</li>
                    <li>la veille tu respecteras</li>
                    <li>la feuille de présence tu signeras</li>
                    <li>dans le travail concentré tu seras</li>
                </ul>
        
            <h2>Etat d'esprit / vision / Hidden war</h2>
            
                <ul>
                    <li>à la réussite collective tu oeuvreras</li>
                    <li>plus haut que ton cul ne pèteras</li>
                    <li>quand la parole tu prendras l'attention tu auras</li>
                    <li>au bien être de tous tu veilleras</li>
                    <li>dans le partage tu travailleras</li>
                    <li>avec patience et persévérance tu apprendras</li>
                    <li>ton utopote tu respecteras</li>
                    <li>ton esprit ouvert tu garderas</li>
                    <li>en autonomie tu feras mais l'esprit de groupe tu protègeras</li>
                </ul>
        
            <h2>Engagements de l'apprenant.e / ligthningcrushers</h2>
            
                <ul>
                    <li>assidu tu seras</li>
                    <li>le temps de parole tu respecteras</li>
                    <li>tes formateurs tu respecteras</li>
                    <li>l'entraide tu pratiqueras</li>
                    <li>ta curiosité tu aiguiseras</li>
                    <li>ta connaissance constamment tu élargiras</li>
                    <li>dans tes recherches, méthodique tu seras</li>
                    <li>ces règles tu appliqueras</li>
                    <li>le matériel tu respecteras</li>
                </ul>

            <form action="index.php" method="post" class="Nom">
                <div class="form-example">
                    <label for="name">Nom: </label>
                    <input type="text" name="name" id="name" required placeholder="Nom">
                </div>
                <br>
                <div class="form-example">
                    <input type="submit" value="Soumettre">
                </div>
            </form>

            <h2>Liste des signataires</h2>
                 <hr>
                <div>
                   
                    <?php
                    foreach ($name as $element) {
                        echo $element . "<br>";
                        # code...
                    }
                    ?>
                </div>>
                  
                        
               

        
    </body>
</html>