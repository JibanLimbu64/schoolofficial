<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Image Grid Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gallery-section {
            padding: 3rem 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        }
        
        .gallery-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }
        
        .gallery-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%);
            border-radius: 2px;
        }
        
        .gallery-subtitle {
            color: #6c757d;
            margin-bottom: 3rem;
            font-size: 1.1rem;
        }
        
        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 250px;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
            color: white;
        }
        
        .gallery-item:hover .image-overlay {
            opacity: 1;
        }
        
        .overlay-content h5 {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .overlay-content p {
            font-size: 0.9rem;
            margin-bottom: 0;
            opacity: 0.9;
        }
        
        .view-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255,255,255,0.9);
            color: #333;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            opacity: 0;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .gallery-item:hover .view-btn {
            opacity: 1;
            top: 50%;
        }
        
        .fullscreen-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.95);
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .fullscreen-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        .fullscreen-image {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            transform: scale(0.9);
            transition: transform 0.3s ease;
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }
        
        .fullscreen-overlay.active .fullscreen-image {
            transform: scale(1);
        }
        
        .close-btn {
            position: absolute;
            top: 30px;
            right: 30px;
            color: white;
            font-size: 2rem;
            cursor: pointer;
            background: rgba(255,255,255,0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .close-btn:hover {
            background: rgba(255,255,255,0.3);
            transform: rotate(90deg);
        }
        
        @media (max-width: 767.98px) {
            .gallery-item {
                height: 200px;
            }
        }
        
        @media (min-width: 768px) and (max-width: 991.98px) {
            .gallery-item {
                height: 180px;
            }
        }
           
        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #2c3e50 0%, #1a2530 100%);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
        }
        
        .footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%);
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            display: inline-block;
            background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .footer-about p {
            color: #b3b3b3;
            margin-bottom: 1.5rem;
        }
        
        .footer-links h5, .footer-contact h5 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-links h5:after, .footer-contact h5:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #b3b3b3;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .contact-info {
            color: #b3b3b3;
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-info i {
            margin-right: 10px;
            margin-top: 3px;
            color: #3a7bd5;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            text-align: center;
            color: #b3b3b3;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 767.98px) {
            .gallery-item {
                height: 200px;
            }
            
            .footer {
                text-align: center;
            }
            
            .footer-links h5, .footer-contact h5 {
                margin-top: 2rem;
            }
            
            .footer-links h5:after, .footer-contact h5:after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                justify-content: center;
            }
        }
        
        @media (min-width: 768px) and (max-width: 991.98px) {
            .gallery-item {
                height: 180px;
            }
        }
    </style>
</head>
<body>

<section class="gallery-section">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="gallery-title">Our School Gallery</h2>
                <p class="gallery-subtitle">Explore our stunning collection of images that will captivate your imagination</p>
            </div>
        </div>
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Nature">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Beautiful Nature</h5>
                            <p>Explore the wonders of the natural world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Architecture">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Modern Architecture</h5>
                            <p>Stunning designs that inspire</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/tech.jpg" alt="Technology">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Cutting-edge Tech</h5>
                            <p>Innovation at its finest</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Travel">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Exotic Locations</h5>
                            <p>Discover new horizons</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Food">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Gourmet Delights</h5>
                            <p>Taste the flavors of the world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/art.jpg" alt="Art">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Creative Art</h5>
                            <p>Expressions of imagination</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12 text-center">
                <!-- <button class="btn btn-primary btn-lg px-4 py-2" style=" -->
                    <!-- /* background: linear-gradient(90deg, #3a7bd5 0%, #00d2ff 100%); */
                    /* border: none; */
                    /* border-radius: 50px; */
                    /* font-weight: 600; */
                    /* box-shadow: 0 5px 15px rgba(58, 123, 213, 0.4); */
                /* "> */ -->
                    <!-- View More Galleries -->
                <!-- </button> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <!-- <h2 class="gallery-title">Our School Gallery</h2> -->
             <!-- <p class="gallery-subtitle">Explore our stunning collection of images that will captivate your imagination</p> -->
            </div>
        </div>
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Nature">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Beautiful Nature</h5>
                            <p>Explore the wonders of the natural world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Architecture">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Modern Architecture</h5>
                            <p>Stunning designs that inspire</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/tech.jpg" alt="Technology">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Cutting-edge Tech</h5>
                            <p>Innovation at its finest</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Travel">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Exotic Locations</h5>
                            <p>Discover new horizons</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Food">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Gourmet Delights</h5>
                            <p>Taste the flavors of the world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/art.jpg" alt="Art">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Creative Art</h5>
                            <p>Expressions of imagination</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <!-- <h2 class="gallery-title">Our School Gallery</h2> -->
                <!-- <p class="gallery-subtitle">Explore our stunning collection of images that will captivate your imagination</p> -->
            </div>
        </div>
        <div class="row">
            <!-- Column 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Nature">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Beautiful Nature</h5>
                            <p>Explore the wonders of the natural world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Architecture">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Modern Architecture</h5>
                            <p>Stunning designs that inspire</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/tech.jpg" alt="Technology">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Cutting-edge Tech</h5>
                            <p>Innovation at its finest</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Travel">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Exotic Locations</h5>
                            <p>Discover new horizons</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
            
            <!-- Column 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="gallery-item">
                    <img src="images/nature.jpg" alt="Food">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Gourmet Delights</h5>
                            <p>Taste the flavors of the world</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
                
                <div class="gallery-item">
                    <img src="images/art.jpg" alt="Art">
                    <div class="image-overlay">
                        <div class="overlay-content">
                            <h5>Creative Art</h5>
                            <p>Expressions of imagination</p>
                        </div>
                    </div>
                    <button class="view-btn">View Full</button>
                </div>
            </div>
        </div>
</section>
<!-- Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="footer-about">
                    <h3 class="footer-logo">Galaxy Academy</h3>
                    <p>We showcase the world's most stunning visuals through our carefully curated collections. Our mission is to inspire creativity and appreciation for visual art.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Collections</a></li>
                        <li><a href="#">Artists</a></li>
                        <li><a href="#">Exhibitions</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                <div class="footer-links">
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="#">Nature</a></li>
                        <li><a href="#">Architecture</a></li>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Food</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-12">
                <div class="footer-contact">
                    <h5>Contact Us</h5>
                    <div class="contact-info">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Letang-3 Morang, Koshi Nepal</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-phone-alt"></i>
                        <span>+1 (555) 123-4567</span>
                    </div>
                    <div class="contact-info">
                        <i class="fas fa-envelope"></i>
                        <span>info@galaxy.com</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <p>&copy; 2023 Galaxy Academy. All Rights Reserved. | Designed with passion for visual excellence</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Fullscreen Overlay -->
<div class="fullscreen-overlay" id="fullscreenOverlay">
    <img src="" alt="" class="fullscreen-image" id="fullscreenImage">
    <div class="close-btn" id="closeBtn">
        <i class="fas fa-times"></i>
    </div>
</div>


<!-- Fullscreen Overlay -->
<div class="fullscreen-overlay" id="fullscreenOverlay">
    <img src="" alt="" class="fullscreen-image" id="fullscreenImage">
    <div class="close-btn" id="closeBtn">
        <i class="fas fa-times"></i>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryItems = document.querySelectorAll('.gallery-item');
        const fullscreenOverlay = document.getElementById('fullscreenOverlay');
        const fullscreenImage = document.getElementById('fullscreenImage');
        const closeBtn = document.getElementById('closeBtn');
        const viewButtons = document.querySelectorAll('.view-btn');
        
        // Click on gallery item or view button to open fullscreen
        galleryItems.forEach(item => {
            item.addEventListener('click', function(e) {
                // Don't trigger if clicking the view button
                if (!e.target.classList.contains('view-btn')) {
                    const imgSrc = item.querySelector('img').src;
                    fullscreenImage.src = imgSrc;
                    fullscreenOverlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                }
            });
        });
        
        // Click view button to open fullscreen
        viewButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const imgSrc = this.parentElement.querySelector('img').src;
                fullscreenImage.src = imgSrc;
                fullscreenOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });
        
        // Close fullscreen
        closeBtn.addEventListener('click', function() {
            fullscreenOverlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Close when clicking outside image
        fullscreenOverlay.addEventListener('click', function(e) {
            if (e.target === fullscreenOverlay) {
                fullscreenOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
        
        // Keyboard escape to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && fullscreenOverlay.classList.contains('active')) {
                fullscreenOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });
    });
</script>
</body>
</html>