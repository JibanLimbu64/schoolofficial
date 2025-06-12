<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Apps</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4e6bff;
            --secondary-color: #2c3e50;
            --accent-color: #ff6b6b;
            --light-bg: #f8f9fa;
        }
        
        body {
            font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
            background-color: #f5f7ff;
        }
        
        .app-header {
            background: linear-gradient(135deg, var(--primary-color), #6c5ce7);
            color: white;
            padding: 5rem 0;
            margin-bottom: 3rem;
            text-align: center;
        }
        
        .app-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease;
        }
        
        .app-subtitle {
            font-size: 1.5rem;
            opacity: 0.9;
            margin-bottom: 2rem;
            animation: fadeIn 1.5s ease;
        }
        
        .app-card {
            border: none;
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            overflow: hidden;
            background: white;
        }
        
        .app-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .app-card .card-img-top {
            border-radius: 12px 12px 0 0;
            height: 180px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .app-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .app-card .card-body {
            padding: 1.5rem;
        }
        
        .app-card .card-title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--secondary-color);
        }
        
        .app-card .card-text {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.95rem;
        }
        
        .app-card .app-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary-color);
            color: white;
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 20px;
            z-index: 2;
        }
        
        .app-card .app-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
            color: #777;
            font-size: 0.85rem;
        }
        
        .app-card .app-rating {
            color: #ffc107;
            font-weight: 600;
        }
        
        .app-card .app-price {
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .app-card .btn-download {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .app-card .btn-download:hover {
            background-color: #3a56f0;
            transform: translateY(-2px);
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
        
        .category-filter {
            margin-bottom: 2rem;
        }
        
        .category-filter .btn {
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .category-filter .btn.active {
            background-color: var(--primary-color);
            color: white;
        }
        
        .app-featured {
            background: linear-gradient(135deg, var(--primary-color), #6c5ce7);
            color: white;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 3rem;
        }
        
        .featured-app {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .featured-app-img {
            border-radius: 12px;
            height: 300px;
            object-fit: cover;
            width: 100%;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
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
    <!-- Apps Header -->
    <header class="app-header">
        <div class="container">
            <h1 class="app-title">Discover Amazing Apps</h1>
            <p class="app-subtitle">Explore the latest and greatest mobile applications</p>
            <div class="row justify-content-center animate__animated animate__fadeIn">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Search apps...">
                        <button class="btn btn-light btn-lg" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <!-- Featured App -->
        <div class="app-featured animate__animated animate__fadeIn">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="featured-app">
                        <img src="https://source.unsplash.com/random/600x400/?app,featured" alt="Featured App" class="featured-app-img">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-white mb-3">App of the Week</h2>
                    <h3 class="text-white mb-3">PhotoArt Pro</h3>
                    <p class="text-white-50 mb-4">Transform your photos into stunning artworks with AI-powered filters and editing tools.</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-4">
                            <span class="text-warning"><i class="fas fa-star"></i> 4.9</span>
                            <span class="text-white-50 ms-1">(12.4K reviews)</span>
                        </div>
                        <div>
                            <span class="text-white"><i class="fas fa-download"></i> 1M+ downloads</span>
                        </div>
                    </div>
                    <button class="btn btn-light btn-lg me-2"><i class="fas fa-download me-2"></i>Download Now</button>
                    <button class="btn btn-outline-light btn-lg"><i class="fas fa-share-alt me-2"></i>Share</button>
                </div>
            </div>
        </div>
        
        <!-- Category Filter -->
        <div class="category-filter animate__animated animate__fadeIn">
            <h3 class="section-title">Categories</h3>
            <div>
                <button class="btn btn-outline-primary active" data-category="all">All Apps</button>
                <button class="btn btn-outline-primary" data-category="productivity">Productivity</button>
                <button class="btn btn-outline-primary" data-category="social">Social</button>
                <button class="btn btn-outline-primary" data-category="games">Games</button>
                <button class="btn btn-outline-primary" data-category="photo">Photo & Video</button>
                <button class="btn btn-outline-primary" data-category="finance">Finance</button>
                <button class="btn btn-outline-primary" data-category="health">Health</button>
                <button class="btn btn-outline-primary" data-category="education">Education</button>
            </div>
        </div>
        
        <!-- Apps Grid -->
        <h3 class="section-title animate__animated animate__fadeIn">Popular Apps</h3>
        <div class="row" id="appsContainer">
            <!-- App cards will be loaded here -->
        </div>
        
        <!-- Load More Button -->
        <div class="text-center my-5">
            <button class="btn btn-primary btn-lg px-4" id="loadMoreBtn">
                <i class="fas fa-redo me-2"></i>Load More Apps
            </button>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Apps Data and Dynamic Loading Script -->
    <script>
        // Sample apps data
        const appsData = [
            {
                id: 1,
                name: "TaskMaster Pro",
                description: "The ultimate productivity app with smart task management and team collaboration features.",
                category: "productivity",
                image: "https://source.unsplash.com/random/600x400/?productivity,app",
                rating: 4.8,
                downloads: "500K+",
                price: "Free",
                featured: true
            },
            {
                id: 2,
                name: "SocialSphere",
                description: "Connect with friends and share moments with our all-in-one social networking app.",
                category: "social",
                image: "https://source.unsplash.com/random/600x400/?social,app",
                rating: 4.5,
                downloads: "1M+",
                price: "Free",
                featured: false
            },
            {
                id: 3,
                name: "PixelQuest",
                description: "Adventure game with stunning graphics and immersive gameplay experience.",
                category: "games",
                image: "https://source.unsplash.com/random/600x400/?game,adventure",
                rating: 4.9,
                downloads: "250K+",
                price: "$4.99",
                featured: true
            },
            {
                id: 4,
                name: "PhotoLab AI",
                description: "Edit photos like a pro with AI-powered tools and hundreds of filters.",
                category: "photo",
                image: "https://source.unsplash.com/random/600x400/?photo,editing",
                rating: 4.7,
                downloads: "800K+",
                price: "Free",
                featured: false
            },
            {
                id: 5,
                name: "BudgetTracker",
                description: "Manage your finances and track expenses with intuitive charts and reports.",
                category: "finance",
                image: "https://source.unsplash.com/random/600x400/?finance,app",
                rating: 4.6,
                downloads: "300K+",
                price: "Free",
                featured: false
            },
            {
                id: 6,
                name: "YogaMind",
                description: "Daily yoga and meditation routines for mental and physical wellbeing.",
                category: "health",
                image: "https://source.unsplash.com/random/600x400/?yoga,meditation",
                rating: 4.9,
                downloads: "150K+",
                price: "$2.99",
                featured: true
            },
            {
                id: 7,
                name: "LanguageFlow",
                description: "Learn new languages with interactive lessons and native speaker audio.",
                category: "education",
                image: "https://source.unsplash.com/random/600x400/?language,learning",
                rating: 4.8,
                downloads: "700K+",
                price: "Free",
                featured: false
            },
            {
                id: 8,
                name: "Chef's Companion",
                description: "Recipe app with step-by-step instructions and meal planning tools.",
                category: "lifestyle",
                image: "https://source.unsplash.com/random/600x400/?cooking,app",
                rating: 4.7,
                downloads: "400K+",
                price: "Free",
                featured: false
            }
        ];

        // DOM elements
        const appsContainer = document.getElementById('appsContainer');
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        const categoryButtons = document.querySelectorAll('.category-filter .btn');

        // Current state
        let visibleAppsCount = 6;
        let currentCategory = 'all';

        // Display apps with animation
        function displayApps() {
            // Filter apps by category
            const filteredApps = currentCategory === 'all' 
                ? appsData 
                : appsData.filter(app => app.category === currentCategory);
            
            // Clear existing apps
            appsContainer.innerHTML = '';
            
            // Display apps up to visibleAppsCount
            const appsToDisplay = filteredApps.slice(0, visibleAppsCount);
            
            appsToDisplay.forEach((app, index) => {
                const appCard = createAppCard(app, index);
                appsContainer.appendChild(appCard);
            });
            
            // Update load more button visibility
            loadMoreBtn.style.display = visibleAppsCount >= filteredApps.length ? 'none' : 'block';
        }

        // Create an app card element
        function createAppCard(app, index) {
            const col = document.createElement('div');
            col.className = `col-md-4 mb-4 animate__animated animate__fadeIn animate-delay-${index % 3}`;
            
            col.innerHTML = `
                <div class="card app-card h-100">
                    ${app.featured ? '<span class="app-badge">Featured</span>' : ''}
                    <img src="${app.image}" class="card-img-top" alt="${app.name}">
                    <div class="card-body">
                        <h5 class="card-title">${app.name}</h5>
                        <p class="card-text">${app.description}</p>
                        <div class="app-meta">
                            <span class="app-rating"><i class="fas fa-star"></i> ${app.rating}</span>
                            <span class="app-price">${app.price}</span>
                        </div>
                        <button class="btn-download w-100 mt-2">
                            <i class="fas fa-download me-2"></i>Download
                        </button>
                    </div>
                </div>
            `;
            
            return col;
        }

        // Event listeners
        loadMoreBtn.addEventListener('click', () => {
            visibleAppsCount += 3;
            displayApps();
            
            // Animate the load more button
            loadMoreBtn.classList.add('animate__animated', 'animate__pulse');
            setTimeout(() => {
                loadMoreBtn.classList.remove('animate__animated', 'animate__pulse');
            }, 1000);
        });

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active state
                categoryButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Filter apps
                currentCategory = button.dataset.category;
                visibleAppsCount = 6;
                displayApps();
            });
        });

        // Initialize the page
        displayApps();
    </script>
</body>
</html>