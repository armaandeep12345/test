<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Font+Name:wght@weight&display=swap" rel="stylesheet">  
  <!-- Favicons -->
  <link href="assets/images/channels4_profile.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .table-container {
            max-width: 100%; /* Full width on portrait */
            margin: 20px auto;
            background: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow-x: auto; /* Ensures horizontal scrolling */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead {
            background: #4CAF50;
            color: white;
        }
        thead th {
            padding: 15px;
            text-align: left;
            font-size: 16px;
        }
        tbody tr:nth-child(odd) {
            background: #f2f2f2;
        }
        tbody tr:hover {
            background: #d7f3e5;
        }
        tbody td {
            padding: 12px;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
        }
        .no-records {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            color: #666;
        }

        /* Portrait design */
@media (max-width: 768px) {
    .table-container {
        margin: 10px; /* Adjusting margin for better spacing on mobile */
        overflow-x: auto; /* Ensures horizontal scrolling */
    }
    table {
        width: 100%; /* Full width for responsive table */
    }
    thead th {
        font-size: 14px; /* Adjust font size for smaller screens */
        padding: 10px; /* Adjust padding for smaller screens */
    }
    tbody td {
        font-size: 12px; /* Adjust font size for readability */
        padding: 8px; /* Adjust padding for better mobile readability */
    }
    tbody tr:hover {
        background: #d7f3e5; /* Slightly brighter hover effect */
    }
    th, td {
        display: block;
        width: 100%;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        text-align: left;
    }
    tbody tr {
        border-top: 1px solid #ddd;
    }
    tbody td {
        border-bottom: none; /* No bottom border to separate rows */
    }
    .no-records {
        font-size: 16px; /* Adjust font size for better readability on small screens */
    }
}

    </style>
</head>
<body> <br> <br> <br> <br>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
  <!-- Image logo -->
  <img src="assets/images/Black Gold Modern Minimalist Auto Garage Logo.png" alt="GP Logo" class="logo-img">
  <!-- Text logo -->
  <h1 class="sitename">luxurydreamcar Begowal</h1>

</a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Booking-details</a></li>
          <li><a href="contactdetail.php">contact-details</a></li>
          <li><a href="uploadpic.php">uploadpic</a></li>
        </ul> 
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  

    </div>
  </header>
<?php
// Database connection
$cn = mysqli_connect("localhost", "root", "", "caradmin");

// Fetch records from the database
$q_fetch = "SELECT * FROM bookings";
$result = mysqli_query($cn, $q_fetch);
?>

<div class="table-container">
    <h3 class="text-center my-4">Booking Details</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>event_date</th>
                <th>event_type</th>
                <th>cars_required</th>
                <th>car_model</th>
                <th>pickup_location</th>
                <th>dropoff_location	</th>
                <th>created_at</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['event_date'] . "</td>";
                    echo "<td>" . $row['event_type'] . "</td>";
                    echo "<td>" . $row['cars_required'] . "</td>";
                    echo "<td>" . $row['car_model'] . "</td>";
                    echo "<td>" . $row['pickup_location'] . "</td>";
                    echo "<td>" . $row['dropoff_location'] . "</td>";
                    echo "<td>" . $row['created_at'] . "</td>";
                    echo "<td><a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10' class='no-records'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
