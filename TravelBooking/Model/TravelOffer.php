<?php 
class OffreDeVoyage {
    private int $id;
    private string $titre;
    private string $destination;
    private DateTime $date_d;  
    private DateTime $date_r;
    private float $prix;
    private bool $disponibilite;
    private string $categorie;

    /*
    public int $id;
    public string $titre;
    public string $destination;
    public DateTime $date_d;  
    public DateTime $date_r;
    public float $prix;
    public bool $disponibilite;
    public string $categorie;
    */

    public function __construct(
        int $id, 
        string $titre, 
        string $destination, 
        DateTime $date_d, 
        DateTime $date_r, 
        float $prix, 
        bool $disponibilite, 
        string $categorie
    ) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_d = $date_d;
        $this->date_r = $date_r;
        $this->prix = $prix;
        $this->disponibilite = $disponibilite;
        $this->categorie = $categorie;

      
    }

    public function getId(): int { return $this->id; }
    public function getTitre(): string { return $this->titre; }
    public function getDestination(): string { return $this->destination; }
    public function getDate_d(): DateTime { return $this->date_d; }
    public function getDate_r(): DateTime { return $this->date_r; }
    public function getPrix(): float { return $this->prix; }
    public function getDisponibilite(): bool { return $this->disponibilite; }
    public function getCategorie(): string { return $this->categorie; }

    public function setDate_d(string $date_d): void {
        $this->date_d = new DateTime($date_d);
    }

    public function setDate_r(string $date_r): void {
        $this->date_r = new DateTime($date_r);
    }

    // Méthode show() pour les variables privées
    public function show(): void {
        echo '<h3>Affichage avec variables privées</h3>';
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
                    <td>' . htmlspecialchars($this->getTitre()) . '</td>
                    <td>' . htmlspecialchars($this->getDestination()) . '</td> 
                    <td>' . htmlspecialchars($this->getDate_d()->format('Y-m-d')) . '</td>
                    <td>' . htmlspecialchars($this->getDate_r()->format('Y-m-d')) . '</td>
                    <td>' . number_format($this->getPrix(), 2) . ' €</td>
                    <td>' . ($this->getDisponibilite() ? "Available" : "Not Available") . '</td>
                    <td>' . htmlspecialchars($this->getCategorie()) . '</td>
                </tr>
              </table>';
    }

    /*
    public function showPublic(): void {
        echo '<h3>Affichage avec variables publiques</h3>';
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
                    <td>' . htmlspecialchars($this->titre) . '</td>
                    <td>' . htmlspecialchars($this->destination) . '</td> 
                    <td>' . htmlspecialchars($this->date_d->format('Y-m-d')) . '</td>
                    <td>' . htmlspecialchars($this->date_r->format('Y-m-d')) . '</td>
                    <td>' . number_format($this->prix, 2) . ' €</td>
                    <td>' . ($this->disponibilite ? "Available" : "Not Available") . '</td>
                    <td>' . htmlspecialchars($this->categorie) . '</td>
                </tr>
              </table>';
    }
    */
}
?>
