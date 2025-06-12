<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaxy Academy</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Navigation Bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-galaxy fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/galaxy.jpg" alt="Galaxy Academy" class="school-logo">
           <span>Galaxy Academy</span> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-primary w-100" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="News.php">News</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown">Programs</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Nursery</a></li>
                <li><a class="dropdown-item" href="#">Primary (1-5)</a></li>
                <li><a class="dropdown-item" href="#">Secondary (6-10)</a></li>
                <li><a class="dropdown-item" href="Teachers.php">Teachers</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li>
            <li class="nav-item"><a class="nav-link" href="Image.php">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown">Join Us</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="authentication/Login.php"><i class="fa-solid fa-right-to-bracket"></i> Log In</a></li>
                <li><a class="dropdown-item" href="authentication/Singup.php"> <i class="fa-solid fa-user-plus"></i> Create an account</a></li>
                <!-- <i class="fa-solid fa-user-plus"></i> -->
                <!-- <li><a class="dropdown-item" href="#">Secondary (6-10)</a></li> -->
                <!-- <li><a class="dropdown-item" href="Teachers.php">Teachers</a></li> -->
              </ul>
            </li>
          </ul>
        </div>
      </div>
         <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <!-- <li class="nav-item"><a class="nav-link active" href="#">Home</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="About.php">About</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="#">Contact</a></li> -->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
      <div id="schoolCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://via.placeholder.com/1920x600/4A148C/FFFFFF?text=Galaxy+Academy" class="d-block w-100" alt="Galaxy Academy Building">
            <div class="carousel-caption">
              <h1>Welcome to Galaxy Academy</h1>
              <p class="lead">Nursery to Class 10 | Letang-3, Morang</p>
              <a href="#" class="btn btn-gold">Admission Open</a>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Unique Galaxy Carousel -->
<section class="galaxy-carousel">
  <div class="stars"></div>
  <div class="stars small"></div>
  <div class="stars tiny"></div>
  
  <div id="galaxyCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#galaxyCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#galaxyCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#galaxyCarousel" data-bs-slide-to="2"></button>
    </div>
    
    <!-- Slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Prize.jpg" class="d-block w-100" alt="School Campus">
        <div class="carousel-caption">
          <div class="caption-wrapper">
            <h2 class="caption-title animate__animated animate__fadeInDown">Welcome to Galaxy Academy</h2>
            <p class="caption-subtitle animate__animated animate__fadeInUp animate__delay-1s">Nursery to Class 10 | Letang-3, Morang</p>
            <div class="btn-glow animate__animated animate__fadeInUp animate__delay-2s">
              <a href="#" class="btn btn-gold">Admission Open</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Prize.jpg" class="d-block w-100" alt="Music Class">
        <div class="carousel-caption">
          <div class="caption-wrapper">
            <h2 class="caption-title animate__animated animate__fadeInDown">Special Music Wednesdays</h2>
            <p class="caption-subtitle animate__animated animate__fadeInUp animate__delay-1s">Discover the rhythm of learning</p>
            <div class="btn-glow animate__animated animate__fadeInUp animate__delay-2s">
              <a href="#" class="btn btn-gold">View Program</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/Prize.jpg" class="d-block w-100" alt="School Facilities">
        <div class="carousel-caption">
          <div class="caption-wrapper">
            <h2 class="caption-title animate__animated animate__fadeInDown">Our Beautiful Campus</h2>
            <p class="caption-subtitle animate__animated animate__fadeInUp animate__delay-1s">An inspiring learning environment</p>
            <div class="btn-glow animate__animated animate__fadeInUp animate__delay-2s">
              <a href="#" class="btn btn-gold">Take a Tour</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#galaxyCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#galaxyCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
    <!-- Weekly Schedule Section -->
    <section class="schedule-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <h2 class="section-title">Our Weekly Rhythm</h2>
            <div class="schedule-calendar">
              <div class="day">Mon</div>
              <div class="day">Tue</div>
              <div class="day music-day">Wed <i class="fas fa-music"></i></div>
              <div class="day">Thu</div>
              <div class="day">Fri</div>
            </div>
            <p class="mt-3 lead">Every Wednesday is our special Music Day at Galaxy Academy!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Programs Section -->
    <section class="programs-section py-5 bg-light">
      <div class="container">
        <h2 class="text-center section-title">Our Programs</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="program-card">
              <div class="program-icon"><i class="fas fa-baby"></i></div>
              <h3>Nursery</h3>
              <p>Early childhood education with play-based learning in a nurturing environment.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="program-card">
              <div class="program-icon"><i class="fas fa-book-open"></i></div>
              <h3>Primary (1-5)</h3>
              <p>Building strong foundations in core subjects with creative teaching methods.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="program-card">
              <div class="program-icon"><i class="fas fa-graduation-cap"></i></div>
              <h3>Secondary (6-10)</h3>
              <p>Comprehensive curriculum preparing students for academic success.</p>
              <a href="#" class="btn btn-outline-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5">
      <div class="container">
        <h2 class="text-center section-title">Why Galaxy Academy?</h2>
        <div class="row">
          <div class="col-md-3">
            <div class="feature-box">
              <i class="fas fa-star"></i>
              <h4>Beautiful Campus</h4>
              <p>An impressive learning environment designed to inspire young minds.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-box">
              <i class="fas fa-music"></i>
              <h4>Music Education</h4>
              <p>Weekly music classes every Wednesday to nurture creativity.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-box">
              <i class="fas fa-chalkboard-teacher"></i>
              <h4>Qualified Teachers</h4>
              <p>Dedicated and experienced faculty passionate about education.</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="feature-box">
              <i class="fas fa-child"></i>
              <h4>Holistic Development</h4>
              <p>Focus on academic excellence and personal growth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Gallery Preview Section -->
    <section class="gallery-section py-5 bg-light">
      <div class="container">
        <h2 class="text-center section-title">Glimpse of Our School</h2>
        <div class="row">
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Classroom" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Playground" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Music Class" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="School Event" class="img-fluid rounded">
          </div>
        </div>
        <div class="text-center mt-3">
          <!-- <a href="#" class="btn btn-gold">View Full Gallery</a> -->
        </div>
      </div>
      <div class="container">
        <!-- <h2 class="text-center section-title">Glimpse of Our School</h2> -->
        <div class="row">
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Classroom" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Playground" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="Music Class" class="img-fluid rounded">
          </div>
          <div class="col-md-3 mb-4">
            <img src="images/Prize.jpg" alt="School Event" class="img-fluid rounded">
          </div>
        </div>
        <div class="text-center mt-3">
          <a href="#" class="btn btn-gold">View Full Gallery</a>
        </div>
      </div>
    </section>

    <!-- Contact Info Section -->
    <section class="contact-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-info">
              <p><i class="fas fa-map-marker-alt me-2"></i> Letang-3, Morang, Nepal</p>
              <p><i class="fas fa-phone me-2"></i> +977 97XXXXXXXX</p>
              <p><i class="fas fa-envelope me-2"></i> info@galaxyacademy.edu.np</p>
              <p><i class="fas fa-clock me-2"></i> Sunday-Friday: 9:45AM - 3:30PM</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.234567890123!2d87.12345678901234!3d26.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjbCsDA3JzI0LjQiTiA4N8KwMDcnMjQuNCJF!5e0!3m2!1sen!2snp!4v1234567890123!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
            <h5>Galaxy Academy</h5>
            <p>A premier educational institution in Letang-3, Morang providing quality education from Nursery to Class 10.</p>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="col-md-2 mb-4">
            <div class="footer-links">
              <h5>Quick Links</h5>
              <a href="#">Home</a>
              <a href="#">About Us</a>
              <a href="#">Programs</a>
              <a href="#">Admissions</a>
              <a href="#">Gallery</a>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="footer-links">
              <h5>Programs</h5>
              <a href="#">Nursery</a>
              <a href="#">Primary (1-5)</a>
              <a href="#">Secondary (6-10)</a>
              <a href="#">Music Program</a>
              <a href="#">Extracurricular</a>
            </div>
          </div>
          <div class="col-md-3 mb-4">
            <div class="footer-links">
              <h5>Contact</h5>
              <a href="#">Location</a>
              <a href="#">Phone</a>
              <a href="#">Email</a>
              <a href="#">School Hours</a>
              <a href="#">Staff Directory</a>
            </div>
          </div>
        </div>
        <hr style="background: #555;">
        <div class="row">
          <div class="col-md-12 text-center">
            <p class="mb-0">&copy; 2023 Galaxy Academy. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Button trigger modal (hidden, will be triggered automatically) -->
<button id="autoOpenModal" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#attractiveModal">
    Launch Modal
</button>

<!-- Modal -->
<div class="modal fade" id="attractiveModal" tabindex="-1" aria-labelledby="attractiveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pulse">
            <div class="modal-header">
                <h5 class="modal-title" id="attractiveModalLabel"><i class="fas fa-gift me-2"></i> Special Offer!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="icon-circle">
                    <i class="fas fa-star"></i>
                </div>
                <h4 class="mb-3">Exclusive Deal Just For You!</h4>
                <p>Get <span class="fw-bold text-primary">20% OFF</span> on your first purchase when you sign up today. Don't miss this limited-time opportunity!</p>
                <div class="countdown mt-4 mb-3">
                    <small class="text-muted">Offer expires in:</small>
                    <div class="fw-bold text-danger" id="countdown">00:05</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn special-btn">
                    <i class="fas fa-check-circle me-2"></i> Claim Your Discount
                </button>
            </div>
        </div>
    </div>
</div>
    <script src="script.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>