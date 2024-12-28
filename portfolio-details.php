<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <!-- Favicons -->
  <link href="assets/images/channels4_profile.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .gallery-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        img {
            max-width: 100%;
            height: 300px; /* Adjust height */
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .card {
            position: relative;
            overflow: hidden;
        }
        .no-records {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            color: #666;
        }
        .pagination {
            justify-content: center;
            padding: 20px 0;
        }
        .pagination a {
            color: #4CAF50;
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-decoration: none;
            margin: 0 4px;
            border-radius: 5px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .pagination a:hover {
            background-color: #45a049;
            color: white;
        }
    </style>
</head>
<body>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/images/channels4_profile.jpg " alt="Groovin Logo"> <!-- Logo image -->
        <h1 class="sitename ms-2">Luxury Dream Cars</h1> <!-- Site name -->
      </a>
      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="book.php">Register-now</a>

    </div>
  </header>
<?php
// Database connection
$cn = mysqli_connect("localhost", "root", "", "caradmin");

if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pagination settings
$limit = 12; // Images per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch records from the database
$q_fetch = "SELECT * FROM uploads LIMIT $limit OFFSET $offset";
$result = mysqli_query($cn, $q_fetch);

// Count total images for pagination
$total_query = "SELECT COUNT(*) FROM uploads";
$total_result = mysqli_query($cn, $total_query);
$total_images = mysqli_fetch_row($total_result)[0];
$total_pages = ceil($total_images / $limit);
?>

<div class="gallery-container">
    <h3>Image Gallery</h3>
    <div class="row">
        <?php
        if ($result) {
            $count = 0;
            while ($r = mysqli_fetch_assoc($result)) {
                if ($count % 4 == 0 && $count > 0) {
                    echo '</div><div class="row">'; // Break row every 4 images
                }
                echo '<div class="col-md-3 mb-4">';
                echo '<img src="admin/uploads/' . basename($r['image_path']) . '" alt="Image" class="card">';
                echo '</div>';
                $count++;
            }
        } else {
            echo '<p class="no-records">No records found</p>';
        }
        ?>
    </div>
</div>


<footer id="footer" class="footer dark-background"> 

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Luxury Dream Car Begowal</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Tanda Road, Begowal, </p>
            <p>Punjab , India</p>
            <a href="https://wa.me/919915558300" target="_blank" style="text-decoration: none; color: green; font-weight: bold;">
              +91 099155 58300
            </a>
            <p><strong>Email:</strong> <span>info@luxurydreamcarbegowal.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Luxury Car Rental</a></li>
            <li><a href="#">Wedding Car Services</a></li>
            <li><a href="#">Event Transportation</a></li>
            <li><a href="#">Custom Packages</a></li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to receive updates about our exclusive wedding car services and special offers!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email" placeholder="Your Email">
              <input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
  
      </div>
    </div>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Luxury Dream Car Begowal</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
  
      </div>
    </div>
  
  </footer>
  
</body>
</html>
