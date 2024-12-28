<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Dream Car Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            margin-top: 50px;
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control, .btn {
            border-radius: 5px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-section {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['insert'])) {
    // Database connection
    $cn = mysqli_connect("localhost", "root", "", "caradmin");
    
    // Check connection
    if ($cn) {
        // Sanitize input data to prevent SQL injection
        $name = mysqli_real_escape_string($cn, $_POST['name']);
        $email = mysqli_real_escape_string($cn, $_POST['email']);
        $phone = mysqli_real_escape_string($cn, $_POST['phone']);
        $car_model = mysqli_real_escape_string($cn, $_POST['car_model']);
        $wedding_date = mysqli_real_escape_string($cn, $_POST['wedding_date']);
        $pickup_location = mysqli_real_escape_string($cn, $_POST['pickup_location']);
        $dropoff_location = mysqli_real_escape_string($cn, $_POST['dropoff_location']);
        $additional_requests = mysqli_real_escape_string($cn, $_POST['additional_requests']);
        
        // Insert query
        $q = "INSERT INTO bookings (name, email, phone, car_model, wedding_date, pickup_location, dropoff_location, additional_requests) 
              VALUES ('$name', '$email', '$phone', '$car_model', '$wedding_date', '$pickup_location', '$dropoff_location', '$additional_requests')";
        
        // Execute query and check for success
        $a = mysqli_query($cn, $q);
        if ($a) {
            echo "<script>alert('Record inserted successfully');</script>";
        } else {
            echo "<script>alert('Error inserting record');</script>";
        }
        
        // Close the database connection
        mysqli_close($cn);
    } else {
        echo "<script>alert('Database connection failed');</script>";
    }
}
?>


<div class="container form-container">
    <div class="form-section">
        <h2 class="form-header">Luxury Dream Car Booking</h2>
        
        <form action="" method="POST">
            <!-- Customer Details -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <!-- Car Selection -->
            <div class="form-group">
                <label for="car-model">Select Car Model</label>
                <select class="form-control" id="car-model" name="car_model" required>
                    <option value="" disabled selected>Select a car</option>
                    <option value="luxury-sedan">Luxury Sedan</option>
                    <option value="sports-car">Sports Car</option>
                    <option value="convertible">Convertible</option>
                </select>
            </div>

            <!-- Booking Details -->
            <div class="form-group">
                <label for="wedding-date">Event Date</label>
                <input type="date" class="form-control" id="wedding-date" name="wedding_date" required>
            </div>

            <div class="form-group">
                <label for="pickup-location">Pickup Location</label>
                <input type="text" class="form-control" id="pickup-location" name="pickup_location" placeholder="Enter pickup location" required>
            </div>

            <div class="form-group">
                <label for="dropoff-location">Drop-off Location</label>
                <input type="text" class="form-control" id="dropoff-location" name="dropoff_location" placeholder="Enter drop-off location" required>
            </div>

        

            <div class="form-group">
                <label for="additional-requests">Additional Requests</label>
                <textarea class="form-control" id="additional-requests" name="additional_requests" placeholder="Any additional requests or preferences?"></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit"  name="insert" class="btn btn-custom btn-block">Book Now</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
