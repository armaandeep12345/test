<?php
$servername = "localhost";  // Database server
$username = "root";          // Replace with your database username
$password = "";               // Replace with your database password if any
$dbname = "caradmin";         // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $event_date = $_POST['event_date'];
    $event_type = $_POST['event_type'];
    $cars_required = $_POST['cars_required'];
    $car_model = $_POST['car_model'];
    $pickup_location = $_POST['pickup_location'];
    $dropoff_location = $_POST['dropoff_location'];

    $sql = "INSERT INTO bookings (name, phone, email, event_date, event_type, cars_required, car_model, pickup_location, dropoff_location) 
            VALUES ('$name', '$phone', '$email', '$event_date', '$event_type', '$cars_required', '$car_model', '$pickup_location', '$dropoff_location')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Dream Car Booking Form</title>
    <link href="assets/images/channels4_profile.jpg" rel="icon">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #003366;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #FFD700;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #FFC107;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Book Your Luxury Dream Car</h1>

        <form method="post">
            <div class="form-section">
                <h2>Personal Details</h2>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="form-section">
                <h2>Event Details</h2>
                <div class="form-group">
                    <label for="event-date">Event Date</label>
                    <input type="date" id="event-date" name="event_date" required>
                </div>

                <div class="form-group">
                    <label for="event-type">Event Type</label>
                    <select id="event-type" name="event_type" required>
                        <option value="wedding">Wedding</option>
                        <option value="reception">Reception</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="cars-required">Number of Cars</label>
                    <input type="number" id="cars-required" name="cars_required" required>
                </div>

                <div class="form-group">
                    <label for="car-model">Car Model Preference</label>
                    <select id="car-model" name="car_model" required>
                        <option value="luxury1">Luxury Car 1</option>
                        <option value="luxury2">Luxury Car 2</option>
                        <option value="luxury3">Luxury Car 3</option>
                    </select>
                </div>
            </div>

            <div class="form-section">
                <h2>Pickup & Drop-off</h2>
                <div class="form-group">
                    <label for="pickup-location">Pickup Location</label>
                    <input type="text" id="pickup-location" name="pickup_location" required>
                </div>

                <div class="form-group">
                    <label for="dropoff-location">Drop-off Location</label>
                    <input type="text" id="dropoff-location" name="dropoff_location" required>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" value="Book Now">
            </div>
        </form>
    </div>

</body>
</html>
