<?php
require_once 'voiture.php';
require_once 'passager.php';

$uneVoiture=new Voiture(
    'Fiat',
    5,
    array(new Passager('Théo'),new Passager('Elsa',TRUE))
    );

var_dump($uneVoiture);

$uneVoiture->ajouterPassager('Vincent');
$uneVoiture->ajouterPassager('Paul',TRUE);
echo $uneVoiture;
?>


