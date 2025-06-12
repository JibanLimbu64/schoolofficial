<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Galaxy Academy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow-x: hidden;
        }
        
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
            position: relative;
        }
        
        .login-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .login-header h2 {
            font-weight: 700;
            position: relative;
            z-index: 2;
        }
        
        .login-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            animation: pulse 8s infinite linear;
        }
        
        .login-body {
            padding: 2rem;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .btn-login {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .btn-login:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.3);
        }
        
        .btn-login:active {
            transform: translateY(0);
        }
        
        .btn-login::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.1);
            transform: rotate(45deg);
            transition: all 0.3s;
        }
        
        .btn-login:hover::after {
            left: 100%;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }
        
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e9ecef;
        }
        
        .divider-text {
            padding: 0 10px;
            color: #6c757d;
            font-size: 14px;
        }
        
        .btn-google {
            background-color: white;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 10px;
            font-weight: 500;
            color: var(--dark-color);
            width: 100%;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-google:hover {
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }
        
        .btn-google img {
            width: 20px;
            margin-right: 10px;
        }
        
        .app-stores {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .app-store-btn {
            height: 40px;
            transition: transform 0.3s;
        }
        
        .app-store-btn:hover {
            transform: scale(1.05);
        }
        
        .floating-animation {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(76, 201, 240, 0.1);
            animation: float 6s infinite ease-in-out;
        }
        
        .floating-animation:nth-child(1) {
            top: 20%;
            left: 10%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }
        
        .floating-animation:nth-child(2) {
            top: 60%;
            left: 80%;
            width: 120px;
            height: 120px;
            animation-delay: 1s;
        }
        
        .floating-animation:nth-child(3) {
            top: 30%;
            left: 70%;
            width: 60px;
            height: 60px;
            animation-delay: 2s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
            }
            50% {
                transform: translateY(-20px) translateX(10px);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        .input-group-text {
            background-color: transparent;
            border-right: none;
        }
        
        .input-with-icon {
            border-left: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container">
                    <!-- Floating animations -->
                    <div class="floating-animation"></div>
                    <div class="floating-animation"></div>
                    <div class="floating-animation"></div>
                    
                    <!-- Header -->
                    <div class="login-header">
                        <h2>Log In</h2>
                    </div>
                    
                    <!-- Body -->
                    <div class="login-body">
                        <form action="validation.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control input-with-icon" id="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control input-with-icon" id="password" placeholder="Enter your password" required>
                                </div>
                                <div class="text-end mt-2">
                                    <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Forgot password?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-login mb-3">Log In</button>
                            
                            <div class="divider">
                                <span class="divider-text">OR CONTINUE WITH</span>
                            </div>
                            
                            <!-- Google Sign-In Button -->
                            <button type="button" class="btn btn-google mb-3" id="googleSignIn">
                                <!-- <img src="images/Google.jpg" alt="Google logo"> -->
                                Sign in with Google
                            </button>
                            
                            <div class="text-center mt-3">
                                <span>Don't have an account? <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Sign up</a></span>
                            </div>
                            
                            <!-- App Store Badges -->
                            <div class="app-stores">
                                <a href="https://apps.apple.com" target="_blank">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="app-store-btn">
                                </a>
                                <a href="https://play.google.com" target="_blank">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="app-store-btn">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Firebase and Google Auth -->
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
    
    <script>
        // Firebase configuration
        const firebaseConfig = {
            apiKey: "YOUR_API_KEY",
            authDomain: "YOUR_AUTH_DOMAIN",
            projectId: "YOUR_PROJECT_ID",
            storageBucket: "YOUR_STORAGE_BUCKET",
            messagingSenderId: "YOUR_SENDER_ID",
            appId: "YOUR_APP_ID"
        };
        
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        
        // Google Sign-In
        document.getElementById('googleSignIn').addEventListener('click', () => {
            const provider = new firebase.auth.GoogleAuthProvider();
            
            firebase.auth()
                .signInWithPopup(provider)
                .then((result) => {
                    // This gives you a Google Access Token
                    const credential = firebase.auth.GoogleAuthProvider.credentialFromResult(result);
                    const token = credential.accessToken;
                    
                    // The signed-in user info
                    const user = result.user;
                    
                    // Redirect or do something with the user
                    console.log(user);
                    window.location.href = '/dashboard'; // Redirect to dashboard
                })
                .catch((error) => {
                    // Handle Errors here.
                    const errorCode = error.code;
                    const errorMessage = error.message;
                    // The email of the user's account used.
                    const email = error.email;
                    // The AuthCredential type that was used.
                    const credential = firebase.auth.GoogleAuthProvider.credentialFromError(error);
                    
                    console.error(errorMessage);
                    alert(errorMessage);
                });
        });
    </script>
</body>
</html>