<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Faculty Team</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .teachers-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        
        .section-title {
            position: relative;
            margin-bottom: 60px;
            text-align: center;
            color: var(--secondary-color);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .teacher-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            margin-bottom: 30px;
            background: white;
            height: 100%;
        }
        
        .teacher-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .teacher-img {
            height: 250px;
            object-fit: cover;
            transition: all 0.4s ease;
        }
        
        .teacher-card:hover .teacher-img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 25px;
            position: relative;
        }
        
        .teacher-name {
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .teacher-subject {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .teacher-info {
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: #555;
        }
        
        .teacher-info i {
            color: var(--accent-color);
            margin-right: 8px;
            width: 20px;
            text-align: center;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: var(--light-color);
            color: var(--secondary-color);
            margin: 0 5px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .teacher-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background: var(--accent-color);
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(231, 76, 60, 0.3);
        }
        
        .department-filter {
            margin-bottom: 40px;
            text-align: center;
        }
        
        .department-filter .btn {
            margin: 5px;
            border-radius: 20px;
        }
        
        @media (max-width: 767px) {
            .teacher-card {
                max-width: 350px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <section class="teachers-section">
        <div class="container">
            <h2 class="section-title animate__animated animate__fadeInDown">Meet Our Faculty</h2>
            
            <!-- Department Filter -->
            <div class="department-filter animate__animated animate__fadeIn">
                <button class="btn btn-outline-primary active" data-filter="all">All Departments</button>
                <button class="btn btn-outline-primary" data-filter="science">Science</button>
                <button class="btn btn-outline-primary" data-filter="arts">Arts</button>
                <button class="btn btn-outline-primary" data-filter="engineering">Engineering</button>
                <button class="btn btn-outline-primary" data-filter="business">Business</button>
            </div>
            
            <div class="row">
                <!-- Teacher 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="science">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">Head of Department</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. Sarah Johnson">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. Sarah Johnson</h5>
                            <span class="teacher-subject">Professor of Computer Science</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 123 University Ave, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> sjohnson@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0123</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Computer Science, MIT</p>
                            </div>
                            <p class="card-text">Specializes in Artificial Intelligence and Machine Learning with 15 years of teaching experience.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-scholar"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="science">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Prof. Michael Chen">
                        <div class="card-body">
                            <h5 class="teacher-name">Prof. Michael Chen</h5>
                            <span class="teacher-subject">Associate Professor of Mathematics</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 456 College St, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> mchen@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0456</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Applied Mathematics, Stanford</p>
                            </div>
                            <p class="card-text">Expert in Applied Mathematics and Statistics with numerous published research papers.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-researchgate"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="science">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">New Faculty</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. Emily Rodriguez">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. Emily Rodriguez</h5>
                            <span class="teacher-subject">Assistant Professor of Biology</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 789 Campus Rd, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> erodriguez@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0789</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Molecular Biology, Harvard</p>
                            </div>
                            <p class="card-text">Research focuses on genetic engineering and biotechnology with several patents to her name.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-orcid"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Teacher 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="engineering">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">Senior Professor</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. Robert Williams">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. Robert Williams</h5>
                            <span class="teacher-subject">Professor of Mechanical Engineering</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 321 Tech Park, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> rwilliams@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0321</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Mechanical Engineering, Caltech</p>
                            </div>
                            <p class="card-text">Specializes in robotics and automation with over 20 years of industry and academic experience.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-scholar"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 5 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="engineering">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Prof. Lisa Zhang">
                        <div class="card-body">
                            <h5 class="teacher-name">Prof. Lisa Zhang</h5>
                            <span class="teacher-subject">Associate Professor of Electrical Engineering</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 654 Circuit Lane, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> lzhang@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0654</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Electrical Engineering, MIT</p>
                            </div>
                            <p class="card-text">Expert in power systems and renewable energy technologies with multiple industry collaborations.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-researchgate"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 6 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="arts">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">Visiting Professor</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. David Wilson">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. David Wilson</h5>
                            <span class="teacher-subject">Professor of English Literature</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 987 Humanities Hall, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> dwilson@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0987</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in English, Oxford</p>
                            </div>
                            <p class="card-text">Specialist in Victorian literature and critical theory with several acclaimed publications.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-book-open"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 7 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="arts">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Prof. Maria Garcia">
                        <div class="card-body">
                            <h5 class="teacher-name">Prof. Maria Garcia</h5>
                            <span class="teacher-subject">Associate Professor of Fine Arts</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 753 Art Center, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> mgarcia@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0753</p>
                                <p><i class="fas fa-graduation-cap"></i> MFA in Painting, RISD</p>
                            </div>
                            <p class="card-text">Contemporary artist with exhibitions worldwide and expertise in modern art techniques.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-palette"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 8 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="business">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">Dean</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. James Peterson">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. James Peterson</h5>
                            <span class="teacher-subject">Professor of Business Administration</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 159 Business School, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> jpeterson@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0159</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Management, Wharton</p>
                            </div>
                            <p class="card-text">Former Fortune 500 executive with expertise in strategic management and organizational behavior.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-briefcase"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <!-- Teacher 9 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="business">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Prof. Anita Desai">
                        <div class="card-body">
                            <h5 class="teacher-name">Prof. Anita Desai</h5>
                            <span class="teacher-subject">Associate Professor of Finance</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 357 Finance Bldg, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> adesai@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0357</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Financial Economics, Chicago</p>
                            </div>
                            <p class="card-text">Expert in corporate finance and investment strategies with Wall Street experience.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-chart-line"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 10 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="science">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. Thomas Brown">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. Thomas Brown</h5>
                            <span class="teacher-subject">Professor of Physics</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 246 Science Center, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> tbrown@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0246</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Quantum Physics, Cambridge</p>
                            </div>
                            <p class="card-text">Theoretical physicist specializing in quantum mechanics and cosmology.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-google-scholar"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Teacher 11 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="engineering">
                    <div class="teacher-card">
                        <!-- <div class="teacher-badge">Lab Director</div> -->
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Dr. Rachel Kim">
                        <div class="card-body">
                            <h5 class="teacher-name">Dr. Rachel Kim</h5>
                            <span class="teacher-subject">Assistant Professor of Chemical Engineering</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 864 Engineering Quad, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> rkim@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0864</p>
                                <p><i class="fas fa-graduation-cap"></i> PhD in Chemical Engineering, Berkeley</p>
                            </div>
                            <p class="card-text">Specializes in nanomaterials and sustainable engineering solutions.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-flask"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <!-- Teacher 12 -->
                <div class="col-xl-3 col-lg-4 col-md-6 animate__animated animate__fadeInUp" data-department="arts">
                    <div class="teacher-card">
                        <img src="images/Profile.jpg" class="card-img-top teacher-img" alt="Prof. Daniel Lee">
                        <div class="card-body">
                            <h5 class="teacher-name">Prof. Daniel Lee</h5>
                            <span class="teacher-subject">Associate Professor of Music</span>
                            <div class="teacher-info">
                                <p><i class="fas fa-map-marker-alt"></i> 951 Music Hall, Boston, MA</p>
                                <p><i class="fas fa-envelope"></i> dlee@university.edu</p>
                                <p><i class="fas fa-phone"></i> (617) 555-0951</p>
                                <p><i class="fas fa-graduation-cap"></i> DMA in Composition, Juilliard</p>
                            </div>
                            <p class="card-text">Award-winning composer and conductor with orchestral works performed internationally.</p>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fas fa-music"></i></a>
                                <a href="#"><i class="fas fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for additional animations and filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation on scroll
            const teacherCards = document.querySelectorAll('.teacher-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            teacherCards.forEach(card => {
                observer.observe(card);
            });
            
            // Department filter functionality
            const filterButtons = document.querySelectorAll('.department-filter .btn');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    const teacherCards = document.querySelectorAll('.teacher-card');
                    
                    teacherCards.forEach(card => {
                        const cardDepartment = card.parentElement.getAttribute('data-department');
                        
                        if (filterValue === 'all' || filterValue === cardDepartment) {
                            card.parentElement.style.display = 'block';
                        } else {
                            card.parentElement.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>