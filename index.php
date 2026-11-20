
<?php

$nomFictif = "El Idrissi";
$prenomFictif = "Yassine";
$groupe = "Groupe B";
$phraseFinale = "Bon courage pour la suite du TP PHP.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 01 - Affichage PHP</title>
</head>
<body>
    <h1>Exercice 01</h1>
    <?php
    echo "<p>Bienvenue dans mon TP PHP</p>";
    echo "<p>Nom : " . $nomFictif . " — Prénom : " . $prenomFictif . "</p>";
    echo "<p>Groupe : " . $groupe . "</p>";
    ?>
    <p><?= $phraseFinale ?></p>
</body>
</html>
<?php
$nom = "Bennani";
$prenom = "Salma";
$age = 20;
$formation = "Licence Informatique";

$presentation = "Bonjour, je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";
$presentation .= "J'apprends PHP";

$note = 12;
$Note = 16;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 02 - Variables et concaténation</title>
</head>
<body>
    <h1>Exercice 02</h1>
    <p><?= $presentation ?></p>
    <p>Valeur de \$note : <?= $note ?></p>
    <p>Valeur de \$Note : <?= $Note ?></p>
</body>
</html>
<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite;
$montantTVA = $totalHT * (TAUX_TVA / 100);
$totalTTC = $totalHT + $montantTVA;

$fraisLivraison = 15;
$totalTTC += $fraisLivraison;

$tauxExiste = defined("TAUX_TVA");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 03 - Constantes et calculs</title>
</head>
<body>
    <h1>Exercice 03 - Récapitulatif de commande</h1>
    <ul>
        <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
        <li>Quantité : <?= $quantite ?></li>
        <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
        <li>TVA (<?= TAUX_TVA ?> %) : <?= $montantTVA . " " . DEVISE ?></li>
        <li>Total TTC (avec livraison de <?= $fraisLivraison . " " . DEVISE ?>) : <strong><?= $totalTTC . " " . DEVISE ?></strong></li>
    </ul>
    <p>Constante TAUX_TVA définie : <?= $tauxExiste ? "Oui" : "Non" ?></p>
</body>
</html>
<?php
$vInt = 42;
$vStringNum = "42";
$vFloat = 15.8;
$vTrue = true;
$vFalse = false;
$vNull = null;

$intDepuisChaine = (int) $vStringNum;
$intDepuisFloat = (int) $vFloat;
$chaineDepuisInt = (string) $vInt;

$boolZeroInt = (bool) 0;
$boolZeroStr = (bool) "0";
$boolPhpStr = (bool) "PHP";
$boolTabVide = (bool) [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 04 - Types et conversions</title>
</head>
<body>
    <h1>Exercice 04</h1>

    <h2>1. var_dump() des variables initiales</h2>
    <pre><?php
    var_dump($vInt, $vStringNum, $vFloat, $vTrue, $vFalse, $vNull);
    ?></pre>

    <h2>2. Conversions explicites</h2>
    <pre><?php
    echo "Conversion \"42\" en int : ";
    var_dump($intDepuisChaine);

    echo "Conversion 15.8 en int : ";
    var_dump($intDepuisFloat);

    echo "Conversion 42 en string : ";
    var_dump($chaineDepuisInt);
    ?></pre>

    <h2>3. Affichage de true et false avec echo puis var_dump()</h2>
    <p>
        echo true : [<?php echo true; ?>] | echo false : [<?php echo false; ?>]
    </p>
    <pre><?php
    var_dump($vTrue, $vFalse);
    ?></pre>

    <h2>4. Conversions en booléen</h2>
    <pre><?php
    echo "(bool) 0 : ";
    var_dump($boolZeroInt);

    echo "(bool) \"0\" : ";
    var_dump($boolZeroStr);

    echo "(bool) \"PHP\" : ";
    var_dump($boolPhpStr);

    echo "(bool) [] : ";
    var_dump($boolTabVide);
    ?></pre>
</body>
</html>
<?php
$moyenne = 14; // Tester successivement : -1, 9, 10, 12, 14, 16, 21

if ($moyenne < 0 || $moyenne > 20) {
    $resultat = "Note invalide";
} elseif ($moyenne < 10) {
    $resultat = "Non validé";
} elseif ($moyenne < 12) {
    $resultat = "Passable";
} elseif ($moyenne < 14) {
    $resultat = "Assez bien";
} elseif ($moyenne < 16) {
    $resultat = "Bien";
} else {
    $resultat = "Très bien";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 05 - Conditions</title>
</head>
<body>
    <h1>Exercice 05</h1>
    <p>Moyenne testée : <?= $moyenne ?></p>
    <p>Résultat : <strong><?= $resultat ?></strong></p>
</body>
</html> 