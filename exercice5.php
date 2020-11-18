<?php
$departements = [
    02 => 'Aisne',
    59 => 'Nord',
    60 => 'Oise',
    62 => 'Pas-de-Calais',
    80 => 'Somme',
];
include 'header.php';
?>
<p class="text-center h2"><?php
        foreach($departements as $elements){
            echo $elements , ' ';
        }
    ?></p>

<?php include 'footer.php';