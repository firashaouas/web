<?php
require_once '../../Model/TravelOffer.php';
$offer=new offreDeVoyage(1,                         
"Discover Paris",     
"Paris, France",      
new DateTime("2025-03-15 14:00:00"), 
new DateTime("2025-03-22 10:00:00"),    
1200,                   
1,                      
"Cultural");
var_dump($offer);
echo '<br>';

$offer->show();

?>