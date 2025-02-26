<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Travel Offer</title>
    <style>
       .error {
    color: red !important;
    font-size: 14px !important;
    font-weight: bold;
    display: block !important; 
    margin-top: 5px;
}
.valid {
    color: green !important;
    font-size: 14px;
    font-weight: bold;
    display: block;
    margin-top: 5px;
}
    </style>
    
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add a Travel Offer!</h1>
                            </div>
                            <form class="user" id="form" action="verification.php" method="POST">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control form-control-user" id="title" name="title" required>
                                    <span id="titleError" class="error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="destination">Destination</label>
                                    <input type="text" class="form-control form-control-user" id="destination" name="destination" required>
                                    <span id="destinationError" class="error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="departureDate">Departure Date</label>
                                    <input type="date" class="form-control form-control-user" id="departureDate" name="departureDate" required>
                                    <span id="departureDateError" class="error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="returnDate">Return Date</label>
                                    <input type="date" class="form-control form-control-user" id="returnDate" name="returnDate" required>
                                    <span id="returnDateError" class="error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" class="form-control form-control-user" id="price" name="price" required>
                                    <span id="priceError" class="error" style="color: red; font-size: 14px; font-weight: bold;"></span>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="availability" name="availability" value="yes" required>
                                        <label class="form-check-label" for="availability">Availability</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" name="category" required>
                                        <option value="" disabled selected>Category</option>
                                        <option value="av">Adventure</option>
                                        <option value="sp">Sports</option>
                                        <option value="ft">Family</option>
                                        <option value="ct">Couples</option>
                                        <option value="ot">Others</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Add Offer</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="index.html">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="addTravelOffer.js"></script>

</body>
</html>';
?>
