
<?php 

$listePersonne = array(
    'Moi',
    'Toi',
    'Lui'
);

foreach($listePersonne as $personne){
    direBonjour($personne);
}

function direBonjour(string $personne){
    echo 'Bonjour '.$personne; 
}