<?php
require_once '../../Model/TravelOffer.php';

class TravelOfferController
{
    public function showTravelOffer(OffreDeVoyage $offer)
    {
        echo '<table border="1">
        <tr>
            <th>Title</th>
            <th>Destination</th>
            <th>Departure Date</th>     
            <th>Return Date</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>' . htmlspecialchars($offer->getTitre()) . '</td>
            <td>' . htmlspecialchars($offer->getDestination()) . '</td> 
            <td>' . htmlspecialchars($offer->getDate_d()->format('Y-m-d')) . '</td>
            <td>' . htmlspecialchars($offer->getDate_r()->format('Y-m-d')) . '</td>
            <td>' . number_format($offer->getPrix(), 2) . ' €</td>
            <td>' . ($offer->getDisponibilite() ? "Available" : "Not Available") . '</td>
            <td>' . htmlspecialchars($offer->getCategorie()) . '</td>
        </tr>
      </table>';
    }
}
?>
