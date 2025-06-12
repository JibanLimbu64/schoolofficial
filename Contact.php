<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #2e59d9;
            --accent-color: #f8f9fc;
            --text-color: #5a5c69;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            color: var(--text-color);
            background-color: #f8f9fa;
        }
        
        .contact-section {
            background: linear-gradient(135deg, var(--accent-color) 0%, #ffffff 100%);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            margin: 2rem auto;
            max-width: 1200px;
        }
        
        .contact-section:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }
        
        .contact-info {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 3rem;
            height: 100%;
        }
        
        .contact-info-item {
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }
        
        .contact-info-item:hover {
            transform: translateX(10px);
        }
        
        .contact-info-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .contact-form {
            padding: 3rem;
            background-color: white;
        }
        
        .form-control {
            border: none;
            border-bottom: 2px solid #e3e6f0;
            border-radius: 0;
            padding-left: 0;
            padding-right: 0;
            transition: all 0.3s;
            background-color: transparent;
        }
        
        .form-control:focus {
            box-shadow: none;
            border-bottom-color: var(--primary-color);
        }
        
        .form-floating label {
            color: #6c757d;
            transition: all 0.3s;
        }
        
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label {
            color: var(--primary-color);
            transform: scale(0.85) translateY(-1.5rem) translateX(0);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(78, 115, 223, 0.3);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(78, 115, 223, 0.4);
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .contact-info {
                padding: 2rem;
            }
            .contact-form {
                padding: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .contact-section {
                margin: 1rem;
            }
            .contact-info, .contact-form {
                padding: 1.5rem;
            }
        }
        
        /* Animation classes */
        .animate-delay-1 {
            animation-delay: 0.2s;
        }
        
        .animate-delay-2 {
            animation-delay: 0.4s;
        }
        
        .animate-delay-3 {
            animation-delay: 0.6s;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="contact-section animate__animated animate__fadeIn">
            <div class="row g-0">
                <!-- Contact Info Column -->
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2 class="animate__animated animate__fadeInDown mb-4">Get in Touch</h2>
                        <p class="animate__animated animate__fadeIn animate-delay-1 mb-5">
                        Galaxy Academy is a primary school located in Letang-3, Morang.
It was established around 2053 B.S. (1996 A.D.).
The school offers classes from Nursery to primary levels.
It provides both day and boarding facilities.
Students are learning well in this school.
The school has good teachers and learning materials.
There are computer labs, science labs, and a dance hall.
Students also get help with their studies after school.
The school runs extra classes for weak students.
It gives scholarships to poor and talented students.
Galaxy Academy also organizes sports, music, and competitions.
The environment of the school is friendly and peaceful.
Many parents trust this school for their children’s education.
                        </p>
                        
                        <div class="contact-info-item animate__animated animate__fadeInLeft animate-delay-1">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Our Location</h5>
                            <p>Letang-3 Morang<br>Koshi Nepal</p>
                        </div>
                        
                        <div class="contact-info-item animate__animated animate__fadeInLeft animate-delay-2">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Email Us</h5>
                            <p>galaxyacademy@gmail.com<br>support@galaxyacademy.com</p>
                        </div>
                        
                        <div class="contact-info-item animate__animated animate__fadeInLeft animate-delay-3">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5>Call Us</h5>
                            <p>+1 (555) 123-4567<br>Mon-Fri, 9am-5pm</p>
                        </div>
                        
                        <div class="social-links mt-5 animate__animated animate__fadeInUp animate-delay-3">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form Column -->
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2 class="animate__animated animate__fadeInDown mb-4">Send Us a Message</h2>
                        
                        <form class="animate__animated animate__fadeIn animate-delay-1">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" placeholder="Your Message" style="height: 150px"></textarea>
                                        <label for="message">Your Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary animate__animated animate__pulse animate__infinite animate__slower">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leadership Contact Cards -->
<div class="row mt-5 animate__animated animate__fadeIn">
  <h3 class="text-center mb-4">Leadership Team</h3>
  
  <!-- Principal Card -->
  <div class="col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInLeft">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/Profile.jpg" class="img-fluid rounded-start h-100" alt="Principal" style="object-fit: cover;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Dr. Sarah Johnson</h5>
            <p class="text-muted mb-2"><small>Principal</small></p>
            
            <ul class="list-unstyled mt-3">
              <li class="mb-2">
                <i class="fas fa-phone-alt text-primary me-2"></i>
                <a href="tel:+15551234567">+977 97XXXXXXXX</a>
              </li>
              <li class="mb-2">
                <i class="fas fa-envelope text-primary me-2"></i>
                <a href="mailto:principal@example.com">principal@example.com</a>
              </li>
              <li class="mb-2">
                <i class="fas fa-clock text-primary me-2"></i>
                Available: Mon-Fri, 9AM-4PM
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Vice Principal Card -->
  <div class="col-md-6 mb-4">
    <div class="card h-100 border-0 shadow-sm animate__animated animate__fadeInRight">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="images/Profile.jpg" class="img-fluid rounded-start h-100" alt="Vice Principal" style="object-fit: cover;">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Mr. David Chen</h5>
            <p class="text-muted mb-2"><small>Vice Principal</small></p>
            
            <ul class="list-unstyled mt-3">
              <li class="mb-2">
                <i class="fas fa-phone-alt text-primary me-2"></i>
                <a href="tel:+15559876543">+977 97XXXXXXXX</a>
              </li>
              <li class="mb-2">
                <i class="fas fa-envelope text-primary me-2"></i>
                <a href="mailto:viceprincipal@example.com">viceprincipal@example.com</a>
              </li>
              <li class="mb-2">
                <i class="fas fa-clock text-primary me-2"></i>
                Available: Mon-Thu, 10AM-3PM
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- Add this modal HTML right before the closing </body> tag -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center p-5">
        <div class="text-success mb-4">
          <i class="fas fa-check-circle fa-5x"></i>
        </div>
        <h3 class="mb-3">Message Sent!</h3>
        <p>Thank you for contacting us. We've received your message and will get back to you soon.</p>
        <button type="button" class="btn btn-primary mt-3" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Update the form element to include onSubmit handler -->
<form class="animate__animated animate__fadeIn animate-delay-1" onsubmit="submitForm(event)">

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for animations -->
    <script>
        // Add animation classes when scrolling into view
        document.addEventListener('DOMContentLoaded', function() {
            const contactSection = document.querySelector('.contact-section');
            
            // Simple way to ensure animations play when page loads
            setTimeout(() => {
                contactSection.classList.add('animate__fadeIn');
            }, 100);
            
            // For a more sophisticated approach, you could use IntersectionObserver
            // to trigger animations when the element comes into view
        });
    //  <!-- Add this JavaScript to handle form submission -->
     function submitForm(e) {
     e.preventDefault();
     
     // Here you would normally send the form data to your server
     // For demo purposes, we'll just show the success modal
     
     const successModal = new bootstrap.Modal(document.getElementById('successModal'));
     successModal.show();
     
     // Reset form after submission
     e.target.reset();
     
     // Optional: Actually submit the form after showing modal
      setTimeout(() => { e.target.submit(); }, 1500);
  }

</body>
</html>