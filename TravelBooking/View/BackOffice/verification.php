<?php 
require_once "../../Model/TravelOffer.php";
require_once "../../Controller/TravelOfferController.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" 
    && isset($_POST["title"], $_POST["destination"], $_POST["departureDate"], 
              $_POST["returnDate"], $_POST["price"], $_POST["availability"], $_POST["category"])) {
    
    $title = htmlspecialchars($_POST["title"]);
    $destination = htmlspecialchars($_POST["destination"]);
    
  
        $departureDate = new DateTime($_POST["departureDate"]);
        $returnDate = new DateTime($_POST["returnDate"]);
    

    $price = floatval($_POST["price"]);
    $availability = filter_var($_POST["availability"], FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    $category = htmlspecialchars($_POST["category"]);

    if ($availability === null) {
        $availability = false; 
    }

    $id = rand(1000, 9999); 

    $offer = new OffreDeVoyage($id, $title, $destination, $departureDate, $returnDate, $price, $availability, $category);
var_dump($offer);
    $controller = new TravelOfferController();
    $controller->showTravelOffer($offer);
} else {
    echo 'All fields are required';
}
?>
