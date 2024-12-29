
<?php 
$cn = mysqli_connect("localhost", "root", "", "caradmin"); 

if (isset($_POST["file"])) {
    // Sanitize form data
    $image_path = mysqli_real_escape_string($cn, $_POST["image_path"]);
    $title = mysqli_real_escape_string($cn, $_POST["title"]);
    $description = mysqli_real_escape_string($cn, $_POST["description"]);

    // Insert into uploads table
    $query = "INSERT INTO uploads (image_path, title, description) VALUES ('$image_path', '$title', '$description')";
    $res = mysqli_query($cn, $query);
    
    if ($res) {
        echo "<script>alert('Data added successfully');</script>";  // Success alert
    } else {
        echo "<script>alert('Failed to add data');</script>";  // Failure alert
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Luxury Dream Cars</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

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

  <main class="main">

   <!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
      <img src="assets/images/470185346_1730852447693659_2570367717756276562_n.jpg" alt="Luxury Cars for Weddings">
      <div class="carousel-container">
        <h2>Luxury Dream Cars</h2>
        <p>Experience elegance and luxury with our premium wedding car services in Begowal. Make your special day truly unforgettable with our stunning fleet of dream cars.</p>
        <a href="book.php" class="btn-get-started">Explore Now</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="assets/images/311105566_1245981249514117_3081502749682302630_n.jpg" alt="Professional Wedding Cars">
      <div class="carousel-container">
        <h2>Professional Services</h2>
        <p>Our dedicated team ensures your wedding journey is seamless and stylish. Trust us to deliver top-notch service for your grand celebration.</p>
        <a href="book.php" class="btn-get-started">Discover More</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <img src="assets/images/314066564_1267600564018852_8042164695293762510_n.jpg" alt="Exclusive Cars for Your Day">
      <div class="carousel-container">
        <h2>Exquisite Experiences</h2>
        <p>Step into a world of luxury with our exclusive wedding cars. Perfectly tailored to elevate your special moments with unmatched sophistication.</p>
        <a href="book.php" class="btn-get-started">Learn More</a>
      </div>
    </div><!-- End Carousel Item -->

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

    <ol class="carousel-indicators"></ol>

  </div>

</section><!-- /Hero Section -->

  <!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p>Experience luxury and elegance with our premium wedding car services in Begowal. Providing you with exceptional vehicles to make your special day unforgettable.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up">

    <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-6">
        <div class="about-img">
          <img src="assets/images/311105566_1245981249514117_3081502749682302630_n.jpg" class="img-fluid" alt="Luxury Dream Cars">
        </div>
      </div>

      <div class="col-lg-6">
        <h3 class="pt-0 pt-lg-5">Luxury Dream Cars for Unforgettable Begowal Weddings</h3>

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Exquisite Designs</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Premium Service</a></li>
          <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Memorable Moments</a></li>
        </ul><!-- End Tabs -->

        <!-- Tab Content -->
        <div class="tab-content">

          <div class="tab-pane fade show active" id="about-tab1">
            <p class="fst-italic">Our fleet of luxury dream cars features the finest designs, ensuring you arrive in style on your special day.</p>
            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Elegant and Timeless Designs</h4>
            </div>
            <p>Choose from a wide selection of luxurious vehicles, each designed to add sophistication and charm to your wedding day.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Unmatched Comfort and Style</h4>
            </div>
            <p>Our cars offer both comfort and elegance, ensuring a memorable experience for you and your guests.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Premium Quality & Service</h4>
            </div>
            <p>We provide top-notch service and attention to detail, ensuring your wedding day goes off without a hitch.</p>
          </div><!-- End Tab 1 Content -->

          <div class="tab-pane fade" id="about-tab2">
            <p class="fst-italic">At Luxury Dream Car Begowal, we prioritize your satisfaction, offering seamless experiences for your wedding.</p>
            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Professional and Reliable Service</h4>
            </div>
            <p>Our dedicated team ensures prompt and efficient service, leaving no detail overlooked on your special day.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Tailored Packages</h4>
            </div>
            <p>We offer customizable packages to suit your unique preferences and ensure a personalized experience.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>24/7 Customer Support</h4>
            </div>
            <p>Our customer support is available around the clock to address any questions or concerns you may have.</p>
          </div><!-- End Tab 2 Content -->

          <div class="tab-pane fade" id="about-tab3">
            <p class="fst-italic">Create unforgettable memories with our luxury wedding cars, designed to make your day truly special.</p>
            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Memorable Moments</h4>
            </div>
            <p>Capture moments that last a lifetime, with our stunning vehicles making your wedding day even more remarkable.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Elegant Arrival & Departure</h4>
            </div>
            <p>Experience seamless luxury from arrival to departure, creating a perfect ending to your wedding day.</p>

            <div class="d-flex align-items-center mt-4">
              <i class="bi bi-check2"></i>
              <h4>Exceptional Memories</h4>
            </div>
            <p>Let us help you create cherished memories with our exquisite selection of wedding cars in Begowal.</p>
          </div><!-- End Tab 3 Content -->
        </div>

      </div>

    </div>

  </div>

</section><!-- /About Section -->

   <!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-car-front"></i>
          <span data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Luxury Cars</strong> <span>for every special occasion</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-geo-alt"></i>
          <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Locations Covered</strong> <span>across Begowal and nearby areas</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-clock"></i>
          <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Hours of Service</strong> <span>dedicated to your comfort</span></p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item">
          <i class="bi bi-person"></i>
          <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
          <p><strong>Expert Chauffeurs</strong> <span>experienced and reliable drivers</span></p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->
 <br> <br>

   <!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Providing exceptional luxury car rental services for weddings, events, and special occasions in Begowal</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-car-front"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>Luxury Car Rentals</h3>
          </a>
          <p>Providing a wide range of luxury vehicles for weddings and special occasions, ensuring a smooth and stylish experience.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-star"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>Chauffeur Services</h3>
          </a>
          <p>Experienced and professional chauffeurs to ensure a comfortable, safe, and luxurious journey for you and your guests.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-gift"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>Wedding Cars</h3>
          </a>
          <p>Exquisite cars designed for weddings, ensuring elegance, style, and a memorable experience for your big day.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-calendar-check"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>Event Transportation</h3>
          </a>
          <p>Seamless transportation for corporate events, parties, and other occasions, ensuring comfort and luxury for your guests.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-phone"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>24/7 Customer Support</h3>
          </a>
          <p>Reliable 24/7 customer support to assist you with any inquiries, ensuring a hassle-free and smooth service experience.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-trophy"></i>
          </div>
          <a href="service-details.php" class="stretched-link">
            <h3>Luxury Experience</h3>
          </a>
          <p>Delivering unmatched luxury experiences with a touch of class and elegance, creating unforgettable memories for our clients.</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section --> <br> <br>
<section class="video-section">
        <div class="heading">Experience the Elegance of Our Luxury Wedding Cars</div>

        <video controls autoplay muted>
            <source src="assets/videos/videoplayback (4).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <video controls autoplay muted>
            <source src="assets/videos/videoplayback (5).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <video controls autoplay muted>
            <source src="assets/videos/videoplayback (6).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>



   <!-- Why Us Section -->
<section id="why-us" class="why-us section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Why Choose Us</h2>
    <p>Providing unparalleled luxury and reliability for all your wedding and event transportation needs</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <span>01</span>
          <h4><a href="service-details.php" class="stretched-link">Unmatched Fleet</a></h4>
          <p>We offer a wide range of luxury vehicles, meticulously maintained to ensure elegance, comfort, and reliability for your special occasions.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <span>02</span>
          <h4><a href="service-details.php" class="stretched-link">Professional Chauffeurs</a></h4>
          <p>Our experienced chauffeurs provide top-notch service, ensuring a smooth and luxurious journey, making your event unforgettable.</p>
        </div>
      </div><!-- Card Item -->

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <span>03</span>
          <h4><a href="service-details.php" class="stretched-link">Reliable & Punctual</a></h4>
          <p>We value your time and ensure prompt service, so you can relax and enjoy your event without any transportation worries.</p>
        </div>
      </div><!-- Card Item -->

    </div>

  </div>

</section><!-- /Why Us Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Luxury Cars</li>
            <li data-filter=".filter-product">Wedding Cars</li>
            <li data-filter=".filter-branding">Classics</li>
            <li data-filter=".filter-books">SUVs</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/images/310311720_1245977436181165_8313489141409510384_n.jpg" class="img-fluid" alt="">
            
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/images/470185346_1730852447693659_2570367717756276562_n.jpg" class="img-fluid" alt="">
             
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/images/468161550_1718624002249837_1156736412586967971_n.jpg" class="img-fluid" alt="">
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/images/314622848_1267601040685471_84705124225680170_n.jpg" class="img-fluid" alt="">
            
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/images/317782349_1284844678961107_559891332492300933_n.jpg" class="img-fluid" alt="">
            
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/images/314066564_1267600564018852_8042164695293762510_n.jpg" class="img-fluid" alt="">
              
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/images/314472374_1267601044018804_6198851984142435251_n.jpg" class="img-fluid" alt="">
          
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <img src="assets/images/314471549_1267600394018869_1188999974382992896_n.jpg" class="img-fluid" alt="">
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/images/314441048_1267601210685454_3331343315180716680_n.jpg" class="img-fluid" alt="">
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/images/313388349_1267599667352275_3341786751356629047_n.jpg" class="img-fluid" alt="">
              
            </div><!-- End Portfolio Item -->

        </div>

      </div>
      <div class="col-lg-12">
          <div class="text-center mt-4">
            <a href="portfolio-details.php" class="btn  btn-success">More Pictures</a>
          </div>
        </div>
    </section><!-- /Portfolio Section -->
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Luxury Dream Car Begowal Wedding Cars</h2>
        <p>Offering unparalleled luxury for your special day.</p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row g-4 g-lg-0">
    
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Standard Package</h3>
              <h4><sup>Rs</sup>1000<span> / day</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Luxury car of your choice</span></li>
                <li><i class="bi bi-check"></i> <span>Experienced chauffeur</span></li>
                <li><i class="bi bi-check"></i> <span>Red carpet welcome</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Additional hours not included</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>No extra amenities included</span></li>
              </ul>
              <div class="text-center"><a href="book.php" class="buy-btn">Book Now</a></div>
            </div>
          </div><!-- End Pricing Item -->
    
          <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">
              <h3>Premium Package</h3>
              <h4><sup>Rs</sup>2000<span> / day</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Luxury car of your choice</span></li>
                <li><i class="bi bi-check"></i> <span>Experienced chauffeur</span></li>
                <li><i class="bi bi-check"></i> <span>Red carpet welcome</span></li>
                <li><i class="bi bi-check"></i> <span>Custom decorations & VIP service</span></li>
                <li><i class="bi bi-check"></i> <span>Complimentary refreshments</span></li>
              </ul>
              <div class="text-center"><a href="book.php" class="buy-btn">Book Now</a></div>
            </div>
          </div><!-- End Pricing Item -->
    
          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Luxury Package</h3>
              <h4><sup>Rs</sup>1500<span> / day</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Luxury car of your choice</span></li>
                <li><i class="bi bi-check"></i> <span>Experienced chauffeur</span></li>
                <li><i class="bi bi-check"></i> <span>Red carpet welcome</span></li>
                <li><i class="bi bi-check"></i> <span>Custom luxury interiors & decor</span></li>
                <li><i class="bi bi-check"></i> <span>VIP treatment & special amenities</span></li>
              </ul>
              <div class="text-center"><a href="book.php" class="buy-btn">Book Now</a></div>
            </div>
          </div><!-- End Pricing Item -->
    
        </div>
    
      </div>
    
    </section><!-- /Pricing Section -->
    <div class="slider-container">
        <div class="slider">
        <div class="review">
                <h3>Sophia & Raj – "The Perfect Wedding Day Experience"</h3>
                <p>"We chose Luxury Dream Car Begowal for our wedding day, and it was an absolute dream come true. The service was impeccable, and the car we selected – a sleek luxury sedan – added that extra touch of sophistication to our wedding."</p>
                <span>- Sophia & Raj</span>
            </div>

            <div class="review">
                <h3>Anita & Varun – "Top-Notch Luxury & Comfort"</h3>
                <p>"From the moment we booked, the team at Luxury Dream Car Begowal was incredibly helpful. The car was beautifully maintained and offered the perfect blend of luxury and comfort."</p>
                <span>- Anita & Varun</span>
            </div>

            <div class="review">
                <h3>Rohit & Priya – "Flawless Service & Timely Arrival"</h3>
                <p>"We were impressed by the punctuality and attention to detail. The driver was courteous and ensured we arrived on time, making our wedding day stress-free."</p>
                <span>- Rohit & Priya</span>
            </div>

            <!-- Additional reviews -->
            <div class="review">
                <h3>Meera & Arjun – "Outstanding Experience & Luxury"</h3>
                <p>"Luxury Dream Car Begowal provided us with a seamless experience. The car was stunning, the driver was professional, and everything went beyond our expectations. Highly recommended!"</p>
                <span>- Meera & Arjun</span>
            </div>

            <div class="review">
                <h3>Priya & Aakash – "Exceptional Service & Value"</h3>
                <p>"We chose Luxury Dream Car Begowal for our wedding day, and it was an experience to remember. The car was luxurious, and the service was nothing short of exceptional. Highly satisfied!"</p>
                <span>- Priya & Aakash</span>
            </div>

            <div class="review">
                <h3>Karan & Simran – "Reliable & Punctual Service"</h3>
                <p>"From booking to completion, everything was smooth. The driver was professional, and the car was pristine. A perfect choice for anyone looking for a luxury ride."</p>
                <span>- Karan & Simran</span>
            </div>
        </div>
        <div class="slider-nav">
        <button class="nav-btn" id="prev">
    <i class="fas fa-chevron-left"></i> <!-- Left arrow icon -->
</button>
<button class="nav-btn" id="next">
    <i class="fas fa-chevron-right"></i> <!-- Right arrow icon -->
</button>

        </div>
        <div class="dots-container">
            <span class="dot" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
            <span class="dot" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>

    <script>
        const slider = document.querySelector('.slider');
        const reviews = document.querySelectorAll('.review');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;
        const totalReviews = reviews.length;

        const showSlide = (index) => {
            if (index >= totalReviews) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalReviews - 1;
            } else {
                currentIndex = index;
            }
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;

            // Update active dot
            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentIndex].classList.add('active');
        };

        document.getElementById('next').addEventListener('click', () => {
            showSlide(currentIndex + 1);
        });

        document.getElementById('prev').addEventListener('click', () => {
            showSlide(currentIndex - 1);
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.dataset.index);
                showSlide(index);
            });
        });

        // Autoplay functionality
        setInterval(() => {
            showSlide(currentIndex + 1);
        }, 3000); // Change slide every 3 seconds
    </script>


    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Luxury Dream Car Begowal Wedding Cars</h2>
        <p>We’re here to make your wedding day unforgettable. Get in touch with us today!</p>
      </div><!-- End Section Title -->
    
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
    
          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>Luxury Dream Car Begowal, Begowal, Punjab, India</p>
            </div>
          </div><!-- End Info Item -->
    
          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center info-item-borders">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <a href="https://wa.me/919915558300" target="_blank" style="text-decoration: none; color: green; font-weight: bold;">
                +91 099155 58300
              </a>
            </div>
          </div><!-- End Info Item -->
    
          <div class="col-lg-4">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@luxurydreamcarbegowal.com</p>
            </div>
          </div><!-- End Info Item -->
    
        </div>
        <?php
if (isset($_POST['insert'])) {
    $cn = mysqli_connect("localhost", "root", "", "caradmin");
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($cn, $_POST['name']);
    $email = mysqli_real_escape_string($cn, $_POST['email']);
    $message = mysqli_real_escape_string($cn, $_POST['message']);

    $q = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $a = mysqli_query($cn, $q);

    if ($a) {
        echo "<script>alert('Record inserted successfully');</script>";
    } else {
        echo "<script>alert('Error inserting record: " . mysqli_error($cn) . "');</script>";
    }

    mysqli_close($cn);
}
?>

               <div class="p-5 rounded bg-light shadow-sm">
    <form method="POST" action="">
      <div class="mb-4">
        <input type="text" class="form-control border-0 py-3" placeholder="Your Name" name="name" required>
      </div>
      <div class="mb-4">
        <input type="email" class="form-control border-0 py-3" placeholder="Your Email" name="email" required>
      </div>
      <div class="mb-4">
        <textarea class="form-control border-0 py-3" rows="6" placeholder="Your Message" name="message" required></textarea>
      </div>
      <div class="text-center">
      <button class="btn btn-success py-3 px-5" type="submit" name="insert">Send Message</button>
      </div>
    </form>

    
  </main>

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
  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
