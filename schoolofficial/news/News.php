<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCL News - Tech News Platform</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00a67c;
            --secondary-color: #333;
            --accent-color: #ff5722;
            --light-bg: #f8f9fa;
            --dark-bg: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.8rem;
        }
        
        .nav-link {
            font-weight: 500;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/random/1200x600/?technology');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 5rem 0;
            margin-bottom: 2rem;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
        }
        
        .category-dropdown .dropdown-menu {
            border-radius: 0;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .category-dropdown .dropdown-item {
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        
        .category-dropdown .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .news-card {
            border: none;
            border-radius: 0;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .news-card .card-img-top {
            border-radius: 0;
            height: 200px;
            object-fit: cover;
        }
        
        .news-card .card-title {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
        }
        
        .news-card .card-text {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .news-card .category-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .news-card .author-info {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }
        
        .news-card .author-avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        
        .news-card .author-name {
            font-size: 0.85rem;
            font-weight: 500;
            margin-right: 10px;
        }
        
        .news-card .publish-date {
            font-size: 0.75rem;
            color: #999;
        }
        
        .featured-news {
            border-left: 4px solid var(--primary-color);
            padding-left: 1rem;
            margin-bottom: 2rem;
        }
        
        .trending-news {
            background-color: var(--light-bg);
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .trending-list {
            list-style-type: none;
            padding: 0;
        }
        
        .trending-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .trending-list li:last-child {
            border-bottom: none;
        }
        
        .trending-list a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            transition: color 0.2s ease;
        }
        
        .trending-list a:hover {
            color: var(--primary-color);
        }
        
        .trending-list .trending-badge {
            background-color: var(--accent-color);
            color: white;
            padding: 0.2rem 0.5rem;
            font-size: 0.7rem;
            border-radius: 3px;
            margin-right: 0.5rem;
        }
        
        .newsletter-section {
            background-color: var(--dark-bg);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }
        
        .footer {
            background-color: var(--secondary-color);
            color: white;
            padding: 3rem 0;
        }
        
        .footer-links h5 {
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        
        .footer-links ul {
            list-style-type: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #aaa;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin-right: 1rem;
            transition: color 0.2s ease;
        }
        
        .social-icons a:hover {
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Galaxy School News</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown category-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="#" data-category="all">All News</a></li> -->
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="Technology.php" data-category="technology">Technology</a></li>
                            <!-- <li><a class="dropdown-item" href="#" data-category="startups">Startups</a></li> -->
                            <li><a class="dropdown-item" href="#" data-category="ai">Artificial Intelligence</a></li>
                            <li><a class="dropdown-item" href="#" data-category="cybersecurity">Cybersecurity</a></li>
                            <li><a class="dropdown-item" href="#" data-category="gadgets">Gadgets</a></li>
                            <li><a class="dropdown-item" href="app.php" data-category="apps">Apps</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search news..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section bg-white">
        <div class="container text-center">
            <h1 class="hero-title">Stay Updated with Galaxy News</h1>
            <p class="hero-subtitle">The latest in technology, startups, and innovation</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main News Column -->
            <div class="col-lg-8">
                <div class="featured-news">
                    <h2><i class="fas fa-bolt me-2 text-primary"></i>Breaking News</h2>
                </div>
                
                <!-- Featured News (will be dynamically loaded) -->
                <div id="featuredNewsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Carousel items will be added dynamically -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#featuredNewsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#featuredNewsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
                <!-- Latest News Section -->
                <div class="mb-4">
                    <h3 class="d-flex justify-content-between align-items-center">
                        <span><i class="fas fa-newspaper me-2 text-primary"></i>Latest News</span>
                        <small class="text-muted"><a href="#" class="text-decoration-none">View All</a></small>
                    </h3>
                    <div class="row" id="latestNewsContainer">
                        <!-- News cards will be added dynamically -->
                    </div>
                </div>
                
                <!-- Load More Button -->
                <div class="text-center mb-5">
                    <button class="btn btn-outline-primary" id="loadMoreBtn">Load More News</button>
                </div>
            </div>
            
            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <!-- Trending Now Section -->
                <div class="trending-news">
                    <h4><i class="fas fa-fire me-2 text-danger"></i>Trending Now</h4>
                    <ul class="trending-list" id="trendingNewsList">
                        <!-- Trending news will be added dynamically -->
                    </ul>
                </div>
                
                <!-- Newsletter Signup -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Subscribe to Newsletter</h5>
                        <p class="card-text">Get the latest tech news delivered to your inbox daily.</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your email address">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <div class="d-flex flex-wrap">
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="technology">Technology</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="startups">Startups</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="ai">AI</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="cybersecurity">Security</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="gadgets">Gadgets</a>
                            <a href="#" class="btn btn-sm btn-outline-secondary m-1" data-category="apps">Apps</a>
                        </div>
                    </div>
                </div>
                
                <!-- Popular Tags -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Popular Tags</h5>
                        <div class="d-flex flex-wrap">
                            <a href="#" class="btn btn-sm btn-light m-1">#Tech</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#Innovation</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#Funding</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#Mobile</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#Cloud</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#Blockchain</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#VR</a>
                            <a href="#" class="btn btn-sm btn-light m-1">#IoT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <!-- <div class="newsletter-section"> -->
        <!-- <div class="container text-center"> -->
            <!-- <h2 class="mb-4">Never Miss a Tech Update</h2> -->
            <!-- <p class="mb-4">Join over 50,000 subscribers who get the latest tech news, trends, and analysis.</p> -->
            <!-- <form class="row g-2 justify-content-center"> -->
                <!-- <div class="col-md-6 col-lg-4"> -->
                    <!-- <input type="email" class="form-control form-control-lg" placeholder="Your email address"> -->
                <!-- </div> -->
                <!-- <div class="col-md-2"> -->
                    <!-- <button type="submit" class="btn btn-primary btn-lg w-100">Subscribe</button> -->
                <!-- </div> -->
            <!-- </form> -->
        <!-- </div> -->
    <!-- </div> -->
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4">
                    <h5 class="text-white">SCL News</h5>
                    <p class="text-muted">Bringing you the latest in technology, startups, and innovation since 2023.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Categories</h5>
                    <ul>
                        <li><a href="#">Technology</a></li>
                        <li><a href="#">Startups</a></li>
                        <li><a href="#">Artificial Intelligence</a></li>
                        <li><a href="#">Cybersecurity</a></li>
                        <li><a href="#">Gadgets</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5>Contact</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt me-2"></i> 123 Tech Street, Silicon Valley</li>
                        <li><i class="fas fa-phone me-2"></i> +1 (555) 123-4567</li>
                        <li><i class="fas fa-envelope me-2"></i> info@sclnews.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: #444;">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-muted mb-0">© 2023 SCL News. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="text-muted mb-0">Designed with <i class="fas fa-heart text-danger"></i> for tech enthusiasts</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- News Data and Dynamic Loading Script -->
    <script>
        // Sample news data (in a real app, this would come from an API)
        const newsData = [
            {
                id: 1,
                title: "OpenAI announces GPT-5 with revolutionary capabilities",
                excerpt: "The new model shows significant improvements in reasoning, accuracy, and multimodal understanding.",
                category: "ai",
                image: "images/tech.jpg",
                author: "Jane Smith",
                authorAvatar: "https://randomuser.me/api/portraits/women/44.jpg",
                date: "2 hours ago",
                trending: true
            },
            {
                id: 2,
                title: "Apple unveils Vision Pro mixed reality headset",
                excerpt: "The $3,499 device blends digital content with the physical world and is controlled by eyes, hands, and voice.",
                category: "gadgets",
                image: "images/tech.jpg",
                author: "Mike Johnson",
                authorAvatar: "https://randomuser.me/api/portraits/men/32.jpg",
                date: "5 hours ago",
                trending: true
            },
            {
                id: 3,
                title: "Tesla's humanoid robot Optimus now in production",
                excerpt: "Elon Musk claims the robot will revolutionize manufacturing and household tasks.",
                category: "technology",
                image: "images/tech.jpg",
                author: "Sarah Williams",
                authorAvatar: "https://randomuser.me/api/portraits/women/68.jpg",
                date: "8 hours ago",
                trending: true
            },
            {
                id: 4,
                title: "Microsoft acquires AI startup for $2 billion",
                excerpt: "The acquisition aims to bolster Microsoft's position in the enterprise AI market.",
                category: "startups",
                image: "images/tech.jpg",
                author: "David Chen",
                authorAvatar: "https://randomuser.me/api/portraits/men/75.jpg",
                date: "1 day ago",
                trending: false
            },
            {
                id: 5,
                title: "New quantum computing breakthrough promises commercial viability",
                excerpt: "Researchers achieve error correction milestone that could make quantum computers practical within 5 years.",
                category: "technology",
                image: "images/tech.jpg",
                author: "Emily Rodriguez",
                authorAvatar: "https://randomuser.me/api/portraits/women/63.jpg",
                date: "1 day ago",
                trending: false
            },
            {
                id: 6,
                title: "Major security flaw discovered in popular VPN services",
                excerpt: "Millions of users at risk as researchers reveal vulnerability that exposes real IP addresses.",
                category: "cybersecurity",
                image: "images/tech.jpg",
                author: "Robert Kim",
                authorAvatar: "https://randomuser.me/api/portraits/men/81.jpg",
                date: "2 days ago",
                trending: true
            },
            {
                id: 7,
                title: "Google's new AI-powered search experience rolls out globally",
                excerpt: "The revamped search uses generative AI to provide more comprehensive answers to complex queries.",
                category: "ai",
                image: "images/tech.jpg",
                author: "Lisa Wong",
                authorAvatar: "https://randomuser.me/api/portraits/women/28.jpg",
                date: "2 days ago",
                trending: false
            },
            {
                id: 8,
                title: "Foldable smartphone shipments expected to double in 2024",
                excerpt: "Industry analysts predict rapid adoption as prices drop and durability improves.",
                category: "gadgets",
                image: "images/tech.jpg",
                author: "James Wilson",
                authorAvatar: "https://randomuser.me/api/portraits/men/45.jpg",
                date: "3 days ago",
                trending: false
            }
        ];

        // DOM elements
        const latestNewsContainer = document.getElementById('latestNewsContainer');
        const trendingNewsList = document.getElementById('trendingNewsList');
        const featuredNewsCarousel = document.querySelector('#featuredNewsCarousel .carousel-inner');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const categoryLinks = document.querySelectorAll('[data-category]');

        // Current state
        let visibleNewsCount = 4;
        let currentCategory = 'all';

        // Initialize the news display
        function displayNews() {
            // Filter news by category
            const filteredNews = currentCategory === 'all' 
                ? newsData 
                : newsData.filter(news => news.category === currentCategory);

            // Clear existing news
            latestNewsContainer.innerHTML = '';
            
            // Display news up to visibleNewsCount
            const newsToDisplay = filteredNews.slice(0, visibleNewsCount);
            
            newsToDisplay.forEach((news, index) => {
                if (index < 3) return; // Skip first 3 as they'll be in featured carousel
                
                const newsCard = createNewsCard(news);
                latestNewsContainer.appendChild(newsCard);
            });
            
            // Update load more button visibility
            loadMoreBtn.style.display = visibleNewsCount >= filteredNews.length ? 'none' : 'block';
        }

        // Display trending news
        function displayTrendingNews() {
            trendingNewsList.innerHTML = '';
            
            const trendingNews = newsData.filter(news => news.trending);
            
            trendingNews.forEach((news, index) => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    <a href="#">
                        <span class="trending-badge">${index + 1}</span>
                        ${news.title}
                    </a>
                `;
                trendingNewsList.appendChild(listItem);
            });
        }

        // Display featured news carousel
        function displayFeaturedNews() {
            featuredNewsCarousel.innerHTML = '';
            
            const featuredNews = newsData.slice(0, 3);
            
            featuredNews.forEach((news, index) => {
                const carouselItem = document.createElement('div');
                carouselItem.className = `carousel-item ${index === 0 ? 'active' : ''}`;
                carouselItem.innerHTML = `
                    <div class="card news-card">
                        <span class="category-badge">${news.category.toUpperCase()}</span>
                        <img src="${news.image}" class="card-img-top" alt="${news.title}">
                        <div class="card-body">
                            <h5 class="card-title">${news.title}</h5>
                            <p class="card-text">${news.excerpt}</p>
                            <div class="author-info">
                                <img src="${news.authorAvatar}" class="author-avatar" alt="${news.author}">
                                <span class="author-name">${news.author}</span>
                                <span class="publish-date">${news.date}</span>
                            </div>
                        </div>
                    </div>
                `;
                featuredNewsCarousel.appendChild(carouselItem);
            });
        }

        // Create a news card element
        function createNewsCard(news) {
            const col = document.createElement('div');
            col.className = 'col-md-6';
            
            col.innerHTML = `
                <div class="card news-card h-100">
                    <span class="category-badge">${news.category.toUpperCase()}</span>
                    <img src="${news.image}" class="card-img-top" alt="${news.title}">
                    <div class="card-body">
                        <h5 class="card-title">${news.title}</h5>
                        <p class="card-text">${news.excerpt}</p>
                        <div class="author-info">
                            <img src="${news.authorAvatar}" class="author-avatar" alt="${news.author}">
                            <span class="author-name">${news.author}</span>
                            <span class="publish-date">${news.date}</span>
                        </div>
                    </div>
                </div>
            `;
            
            return col;
        }

        // Event listeners
        loadMoreBtn.addEventListener('click', () => {
            visibleNewsCount += 4;
            displayNews();
        });

        categoryLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                currentCategory = link.dataset.category;
                visibleNewsCount = 4;
                displayNews();
                
                // Update active state
                categoryLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

        // Initialize the page
        displayFeaturedNews();
        displayNews();
        displayTrendingNews();
    </script>
</body>
</html>