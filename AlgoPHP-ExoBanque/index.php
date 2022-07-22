<?php
// Liens entres les fichiers
    include "Titulaire.php";
    include "Compte.php";

//Liste des titulaires
$titulaire1 = new Titulaire ("BEZOS", "Jeff", "1964-01-12", "Albuquerque", 2);
$titulaire2 = new Titulaire ("BOB", "Eponge", "1999-05-01", "Bikini-Bottom", 3);
$titulaire3 = new Titulaire ("ZAMIRBEK", "Aman", "1998-05-16", "Paris", 4);


//Affichage des comptes en banque du titulaire
// liste des comptes du titulaire BEZOS
$listeCompte1 = new Compte ($titulaire1, "Compte courant", 500, "Euros");
$listeCompte2 = new Compte ($titulaire1, "Livret A", 12532, "Euros");

// Liste des compte du titulaire EPONGE
$listeCompte3 = new Compte ($titulaire2, "Compte courant", 500000, "Euros");
$listeCompte4 = new Compte ($titulaire2, "Livret A", 9564, "Euros");
$listeCompte5 = new Compte ($titulaire2, "PEL", 41256, "Euros");

// Liste des compte du titulaire ZAMIRBEK
// $listeCompte = new Compte ($titulaire3, "Compte courant", 4514587124,"Euros");
// $listeCompte = new Compte ($titulaire3, "livret A", 22900,"Euros");
// $listeCompte = new Compte ($titulaire3, "PEL", 61000,"Euros");
// $listeCompte = new Compte ($titulaire3, "Paradis fiscaux", 432521523865852,"Euros");


// Liste des transation du titulaire 
echo $titulaire1;
echo "<br>******** Transations ********<br>";
echo $listeCompte1 -> crediter(500);

echo $listeCompte1 -> debiter(200);

echo $listeCompte1;
echo $listeCompte3;

$listeCompte1 -> virement($listeCompte3, 350);

echo $listeCompte1;
echo $listeCompte3;



?>