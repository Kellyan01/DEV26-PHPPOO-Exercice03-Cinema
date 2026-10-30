<?php
//Import des ressources
require_once 'Seance.php';
require_once 'BilletPleinTarif.php';
require_once 'BilletEnfant.php';
require_once 'BilletReduit.php';

//Test de Seance
$seance = new Seance("2026-12-16","20H30","Dunesday");

// Modification des attributs de l'objet
// Chaînage de méthode
// Apprécié des Développeur expérimenté
// Condition : chaque setter doit retourner l'objet lui même
$seance->setDate("2026-12-23")
    ->setHeure("15h30")
    ->setFilm("Dune partie 3");

//Test BilletPleinTarif
$billetPlein = new BilletPleinTarif(12,23.5,$seance);

echo($billetPlein->calculerPrix());
$billetPlein->imprimerDetail();

//Test BilletReduit
$billetReduit = new BilletReduit(42,23.5,$seance,"Carte étudiante");

echo($billetReduit->calculerPrix());
$billetReduit->imprimerDetail();

//Test BilletEnfant
$billetEnfant = new BilletEnfant(11,5,$seance,9);

echo($billetEnfant->calculerPrix());
$billetEnfant->imprimerDetail();