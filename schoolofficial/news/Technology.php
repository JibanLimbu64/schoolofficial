<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology News</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #00a67c;
            --secondary-color: #2c3e50;
            --accent-color: #ff5722;
            --light-bg: #f8f9fa;
            --dark-bg: #212529;
        }
        
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: #f5f7fa;
        }
        
        .tech-news-header {
            background: linear-gradient(135deg, #2c3e50, #4ca1af);
            color: white;
            padding: 4rem 0;
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }
        
        .tech-news-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://source.unsplash.com/random/1600x900/?technology,circuits') center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .tech-news-header .container {
            position: relative;
            z-index: 1;
        }
        
        .typewriter-text {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            border-right: 3px solid white;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
        }
        
        .header-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .news-card {
            border: none;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }
        
        .news-card .card-img-top {
            border-radius: 10px 10px 0 0;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .news-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .news-card .card-body {
            padding: 1.5rem;
        }
        
        .news-card .card-title {
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
            color: var(--secondary-color);
        }
        
        .news-card .card-text {
            color: #666;
            margin-bottom: 1rem;
        }
        
        .news-card .category-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 20px;
            z-index: 2;
        }
        
        .news-card .meta-info {
            display: flex;
            align-items: center;
            margin-top: 1rem;
            color: #777;
            font-size: 0.85rem;
        }
        
        .news-card .meta-info i {
            margin-right: 5px;
            color: var(--primary-color);
        }
        
        .news-card .meta-info span {
            margin-right: 15px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: 0.5rem;
            font-weight: 700;
            color: var(--secondary-color);
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }
        
        .trending-tech {
            background: linear-gradient(135deg, #f5f7fa, #e4e8eb);
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .trending-list {
            list-style-type: none;
            padding: 0;
        }
        
        .trending-list li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
            transition: all 0.3s ease;
        }
        
        .trending-list li:hover {
            transform: translateX(5px);
        }
        
        .trending-list li:last-child {
            border-bottom: none;
        }
        
        .trending-list a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
        }
        
        .trending-list a:hover {
            color: var(--primary-color);
        }
        
        .trending-list .trending-number {
            background-color: var(--primary-color);
            color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .newsletter-tech {
            background: linear-gradient(135deg, var(--primary-color), #4ca1af);
            padding: 2rem;
            border-radius: 10px;
            color: white;
            margin-bottom: 2rem;
        }
        
        .newsletter-tech h4 {
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .newsletter-tech .form-control {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            margin-bottom: 1rem;
        }
        
        .newsletter-tech .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .newsletter-tech .btn {
            background-color: white;
            color: var(--primary-color);
            font-weight: 600;
            border: none;
        }
        
        .newsletter-tech .btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
        }
        
        @media (max-width: 768px) {
            .typewriter-text {
                font-size: 2.5rem;
            }
            
            .header-subtitle {
                font-size: 1.2rem;
            }
        }
        
        /* Animation classes */
        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        
        .animate-slide-up {
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Technology News Header with Typewriter Animation -->
    <header class="tech-news-header">
        <div class="container text-center">
            <div class="typewriter-text" id="typewriter"></div>
            <p class="header-subtitle animate__animated animate__fadeIn">Stay ahead with the latest breakthroughs and innovations</p>
            <div class="d-flex justify-content-center animate__animated animate__fadeInUp">
                <div class="input-group" style="max-width: 500px;">
                    <input class="form-control form-control-lg" type="search" placeholder="Search tech news...">
                    <button class="btn btn-light btn-lg" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main News Column -->
            <div class="col-lg-8">
                <h3 class="section-title animate__animated animate__fadeIn">Latest Technology News</h3>
                
                <div class="row" id="newsContainer">
                    <!-- News cards will be added dynamically with animation -->
                </div>
                
                <!-- Load More Button -->
                <div class="text-center mb-5 animate__animated animate__fadeIn">
                    <button class="btn btn-primary btn-lg px-4" id="loadMoreBtn">
                        <i class="fas fa-sync-alt me-2"></i>Load More News
                    </button>
                </div>
            </div>
            
            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <!-- Trending Now Section -->
                <div class="trending-tech animate__animated animate__fadeIn">
                    <h4><i class="fas fa-bolt me-2"></i>Trending in Tech</h4>
                    <ul class="trending-list" id="trendingNewsList">
                        <!-- Trending news will be added dynamically -->
                    </ul>
                </div>
                
                <!-- Newsletter Signup -->
                <!-- <div class="newsletter-tech animate__animated animate__fadeIn"> -->
                    <!-- <h4><i class="fas fa-paper-plane me-2"></i>Tech Newsletter</h4> -->
                    <!-- <p>Get the latest tech news delivered to your inbox daily.</p> -->
                    <!-- <form> -->
                        <!-- <input type="email" class="form-control mb-3" placeholder="Your email address"> -->
                        <!-- <button type="submit" class="btn w-100">Subscribe Now</button> -->
                    <!-- </form> -->
                <!-- </div> -->
                
                <!-- Tech Categories -->
                <!-- <div class="card mb-4 animate__animated animate__fadeIn"> -->
                    <!-- <div class="card-body"> -->
                        <!-- <h5 class="card-title"><i class="fas fa-tags me-2"></i>Tech Categories</h5> -->
                        <!-- <div class="d-flex flex-wrap"> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">AI</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">Gadgets</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">Cybersecurity</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">Blockchain</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">Cloud</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">IoT</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">VR/AR</a> -->
                            <!-- <a href="#" class="btn btn-sm btn-outline-primary m-1">Startups</a> -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- News Data and Dynamic Loading Script -->
    <script>
        // Sample tech news data
        const techNewsData = [
            {
                id: 1,
                title: "OpenAI unveils GPT-5 with human-like reasoning capabilities",
                excerpt: "The next-generation AI model demonstrates unprecedented performance in complex problem-solving tasks.",
                category: "AI",
                image: "images/Profile.jpg",
                author: "Dr. Emily Chen",
                date: "2 hours ago",
                location: "San Francisco, CA",
                trending: true
            },
            {
                id: 2,
                title: "Quantum computer breaks encryption record, achieves 'quantum supremacy'",
                excerpt: "Researchers demonstrate a calculation that would take classical computers 10,000 years to complete.",
                category: "Quantum",
                image: "images/news.jpg",
                author: "Prof. Michael Zhang",
                date: "5 hours ago",
                location: "Zurich, Switzerland",
                trending: true
            },
            {
                id: 3,
                title: "Apple's Vision Pro 2 leaks reveal holographic display technology",
                excerpt: "Next-gen mixed reality headset may project 3D images directly into the user's environment.",
                category: "Gadgets",
                image: "images/news.jpg",
                author: "Sarah Johnson",
                date: "8 hours ago",
                location: "Cupertino, CA",
                trending: true
            },
            {
                id: 4,
                title: "Global internet outage caused by solar storm, experts warn of more disruptions",
                excerpt: "Unprecedented solar activity knocks out satellites and undersea cables simultaneously.",
                category: "Cybersecurity",
                image: "images/news.jpg",
                author: "David Wilson",
                date: "1 day ago",
                location: "Global",
                trending: false
            },
            {
                id: 5,
                title: "Neuralink's first human trial shows promising results for paralysis treatment",
                excerpt: "Patient able to control computer and robotic arm with thoughts alone after brain implant.",
                category: "Biotech",
                image: "images/news.jpg",
                author: "Dr. Lisa Park",
                date: "1 day ago",
                location: "Austin, TX",
                trending: false
            },
            {
                id: 6,
                title: "Tesla unveils fully autonomous robotaxi with no steering wheel",
                excerpt: "Musk claims the new vehicle will revolutionize urban transportation by 2025.",
                category: "Autonomous Vehicles",
                image: "images/news.jpg",
                author: "Robert Kim",
                date: "2 days ago",
                location: "Palo Alto, CA",
                trending: false
            },
            {
                id: 7,
                title: "Microsoft's new AI assistant can attend meetings for you",
                excerpt: "Copilot Pro takes notes, answers questions, and even makes decisions on your behalf.",
                category: "AI",
                image: "images/news.jpg",
                author: "James Wilson",
                date: "2 days ago",
                location: "Redmond, WA",
                trending: false
            },
            {
                id: 8,
                title: "Breakthrough in nuclear fusion achieves net energy gain for 24 hours",
                excerpt: "Scientists overcome key hurdle in making fusion power commercially viable.",
                category: "Energy",
                image: "images/news.jpg",
                author: "Dr. Emma Thompson",
                date: "3 days ago",
                location: "Oxford, UK",
                trending: false
            }
        ];

        // DOM elements
        const newsContainer = document.getElementById('newsContainer');
        const trendingNewsList = document.getElementById('trendingNewsList');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const typewriterElement = document.getElementById('typewriter');

        // Current state
        let visibleNewsCount = 4;

        // Typewriter animation
        function typeWriter(text, i, callback) {
            if (i < text.length) {
                typewriterElement.innerHTML = text.substring(0, i + 1);
                setTimeout(() => typeWriter(text, i + 1, callback), 100);
            } else if (typeof callback == 'function') {
                setTimeout(callback, 1000);
            }
        }

        // Start the typewriter animation
        function startTypewriter() {
            const text = "Technology News";
            typeWriter(text, 0, function() {
                // Animation complete - keep cursor blinking
                setInterval(() => {
                    typewriterElement.style.borderRightColor = 
                        typewriterElement.style.borderRightColor === 'transparent' ? 'white' : 'transparent';
                }, 500);
            });
        }

        // Display news with animation
        function displayNews() {
            // Clear existing news
            newsContainer.innerHTML = '';
            
            // Display news up to visibleNewsCount
            const newsToDisplay = techNewsData.slice(0, visibleNewsCount);
            
            newsToDisplay.forEach((news, index) => {
                const newsCard = createNewsCard(news, index);
                newsContainer.appendChild(newsCard);
                
                // Add animation with delay based on index
                setTimeout(() => {
                    newsCard.classList.add('animate-fade-in');
                }, index * 150);
            });
            
            // Update load more button visibility
            loadMoreBtn.style.display = visibleNewsCount >= techNewsData.length ? 'none' : 'block';
        }

        // Display trending news
        function displayTrendingNews() {
            trendingNewsList.innerHTML = '';
            
            const trendingNews = techNewsData.filter(news => news.trending);
            
            trendingNews.forEach((news, index) => {
                const listItem = document.createElement('li');
                listItem.classList.add('animate-slide-up');
                listItem.style.animationDelay = `${index * 0.1}s`;
                listItem.innerHTML = `
                    <a href="#">
                        <span class="trending-number">${index + 1}</span>
                        ${news.title}
                    </a>
                `;
                trendingNewsList.appendChild(listItem);
            });
        }

        // Create a news card element
        function createNewsCard(news, index) {
            const col = document.createElement('div');
            col.className = 'col-md-6 mb-4';
            
            col.innerHTML = `
                <div class="card news-card h-100">
                    <span class="category-badge">${news.category}</span>
                    <img src="${news.image}" class="card-img-top" alt="${news.title}">
                    <div class="card-body">
                        <h5 class="card-title">${news.title}</h5>
                        <p class="card-text">${news.excerpt}</p>
                        <div class="meta-info">
                            <span><i class="fas fa-user"></i> ${news.author}</span>
                            <span><i class="fas fa-clock"></i> ${news.date}</span>
                            <span><i class="fas fa-map-marker-alt"></i> ${news.location}</span>
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
            
            // Animate the load more button
            loadMoreBtn.classList.add('animate__animated', 'animate__pulse');
            setTimeout(() => {
                loadMoreBtn.classList.remove('animate__animated', 'animate__pulse');
            }, 1000);
        });

        // Initialize the page
        window.addEventListener('load', () => {
            startTypewriter();
            setTimeout(() => {
                displayNews();
                displayTrendingNews();
            }, 1500); // Wait for typewriter to complete
        });
    </script>
</body>
</html>