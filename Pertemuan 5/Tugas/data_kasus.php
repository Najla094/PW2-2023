<?php 
    require_once 'class_kasus.php';

    $benefits = new BenefitsVegetables("Bayam", "Hijau", "Vitamin A, Vitamin B kompleks, Vitamin C, dan Vitamin E.");
    $leaf = new LeafVegetables("Brokoli", "Hijau", "Sayuran Bunga");

    echo "Info Sayur Bayam:<br>";
    $benefits->getInfo();
    echo "<br>";

    echo "Info Sayur Brokoli:<br>";
    $leaf->getInfo();

?>