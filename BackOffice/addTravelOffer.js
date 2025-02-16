/*------------partie 1:
function validerFormulaire() {   
    let title = document.getElementById("title").value.trim();
let destination = document.getElementById("destination").value.trim();
let dateDepart = new Date(document.getElementById("departureDate").value);
let dateRetour = new Date(document.getElementById("returnDate").value);
let prix=document.getElementById("price").value;
if (title.length < 3) {
        alert("Le titre doit contenir au moins 3 caractères.");
        return false;
    }
    let regex = /^[A-Za-zÀ-ÖØ-öø-ÿ\s]{3,}$/;

    if (!regex.test(destination)) {
        alert("La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.");
        return false;
    }
    
    if (isNaN(dateDepart) || isNaN(dateRetour)) {
        alert("Veuillez entrer des dates valides.");
        return false;
    }

    if (dateRetour <= dateDepart) {
        alert("La date de retour doit être ultérieure à la date de départ.");
        return false;
    }
    if(prix<0){
        alert("Le prix doit être positif");
        return false;
    }
    return true;
}*/
//------------partie 2 avec partie 3:
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form");

    // Function to validate Title in real-time
    function validateTitle() {
        let title = document.getElementById("title").value.trim();
        let titleError = document.getElementById("titleError");

        if (title.length < 3) {
            titleError.textContent = "The title must contain at least 3 characters.";
            titleError.classList.add("error");
            titleError.classList.remove("valid");
            return false;
        } else {
            titleError.textContent = "✔ Correct";
            titleError.classList.add("valid");
            titleError.classList.remove("error");
            return true;
        }
    }

    // Function to validate Destination in real-time
    function validateDestination() {
        let destination = document.getElementById("destination").value.trim();
        let destinationError = document.getElementById("destinationError");

        if (!/^[A-Za-zÀ-ÖØ-öø-ÿ\s]{3,}$/.test(destination)) {
            destinationError.textContent = "The destination must contain only letters and at least 3 characters.";
            destinationError.classList.add("error");
            destinationError.classList.remove("valid");
            return false;
        } else {
            destinationError.textContent = "✔ Correct";
            destinationError.classList.add("valid");
            destinationError.classList.remove("error");
            return true;
        }
    }

    document.getElementById("title").addEventListener("keyup", validateTitle);
    document.getElementById("destination").addEventListener("keyup", validateDestination);

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent form submission if there are errors
        let valid = true;

        document.querySelectorAll(".error, .valid").forEach(el => {
            el.textContent = "";
            el.classList.remove("valid", "error");
        });

        let departureDate = document.getElementById("departureDate").value;
        let returnDate = document.getElementById("returnDate").value;
        let price = document.getElementById("price").value.trim();

        if (!validateTitle()) valid = false;
        if (!validateDestination()) valid = false;

        let departureDateError = document.getElementById("departureDateError");
        let returnDateError = document.getElementById("returnDateError");
        let dateDepart = new Date(departureDate);
        let dateRetour = new Date(returnDate);

        if (!departureDate) {
            departureDateError.textContent = "Please select a valid departure date.";
            departureDateError.classList.add("error");
            valid = false;
        } else {
            departureDateError.textContent = "✔ Correct";
            departureDateError.classList.add("valid");
        }

        if (!returnDate) {
            returnDateError.textContent = "Please select a valid return date.";
            returnDateError.classList.add("error");
            valid = false;
        } else if (dateRetour <= dateDepart) {
            returnDateError.textContent = "Return date must be after departure date.";
            returnDateError.classList.add("error");
            valid = false;
        } else {
            returnDateError.textContent = "✔ Correct";
            returnDateError.classList.add("valid");
        }

        let priceError = document.getElementById("priceError");
        if (!/^\d+(\.\d{1,2})?$/.test(price) || parseFloat(price) <= 0) {
            priceError.textContent = "The price must be a positive number.";
            priceError.classList.add("error");
            valid = false;
        } else {
            priceError.textContent = "✔ Correct";
            priceError.classList.add("valid");
        }

        if (valid) {
            console.log("Form submitted successfully!");
            this.submit();
        }
    });
});


