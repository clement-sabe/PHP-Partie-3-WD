<?php
$months = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];
//  $months = [
// 'Janvier',
// 'Février',
// 'Mars',
// 'Avril',
// 'Mai',
// 'Juin',
// 'Juillet',
// 'Août',
// 'Septembre',
// 'Octobre',
// 'Novembre',
// 'Décembre'
// ]; sans indexer le mois afficher aurait été JUIN car index commence a zéro
include 'header.php';
?>

  <ul class="h2">
    <?php
    // foreach est une boucle pour les tableaux
    foreach ($months as $element){
       ?>
       <li><?= $element; ?></li>
       <?php } ?>
    </ul>

<?php include 'footer.php';