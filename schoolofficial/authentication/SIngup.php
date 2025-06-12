<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Your App Name</title>
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
            --success-color: #4bb543;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow-x: hidden;
        }
        
        .signup-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
            position: relative;
        }
        
        .signup-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .signup-header h2 {
            font-weight: 700;
            position: relative;
            z-index: 2;
            margin-bottom: 0.5rem;
        }
        
        .signup-header p {
            opacity: 0.9;
            margin-bottom: 0;
            position: relative;
            z-index: 2;
            font-size: 0.9rem;
        }
        
        .signup-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            animation: pulse 8s infinite linear;
        }
        
        .signup-body {
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
        
        .btn-signup {
            background: linear-gradient(135deg, var(--success-color) 0%, #3a9e3a 100%);
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
        
        .btn-signup:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(75, 181, 67, 0.3);
        }
        
        .btn-signup:active {
            transform: translateY(0);
        }
        
        .btn-signup::after {
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
        
        .btn-signup:hover::after {
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
        
        .form-password-strength {
            height: 4px;
            background: #e9ecef;
            border-radius: 2px;
            margin-top: 5px;
            overflow: hidden;
        }
        
        .form-password-strength-bar {
            height: 100%;
            width: 0%;
            background: #dc3545;
            transition: all 0.3s;
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
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="signup-container">
                    <!-- Floating animations -->
                    <div class="floating-animation"></div>
                    <div class="floating-animation"></div>
                    <div class="floating-animation"></div>
                    
                    <!-- Header -->
                    <div class="signup-header">
                        <h2>Create Your Account</h2>
                        <p>Join our community today</p>
                    </div>
                    
                    <!-- Body -->
                    <div class="signup-body">
                        <form id="signupForm" action="validation.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" name="fname" class="form-control input-with-icon" id="firstName" placeholder="First name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control input-with-icon" id="lastName" placeholder="Last name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control input-with-icon" id="email" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control input-with-icon" id="password" placeholder="Create a password" required>
                                </div>
                                <div class="form-password-strength">
                                    <div class="form-password-strength-bar" id="passwordStrengthBar"></div>
                                </div>
                                <div class="form-text">Use 8 or more characters with a mix of letters, numbers & symbols</div>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control input-with-icon" id="confirmPassword" placeholder="Confirm your password" required>
                                </div>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">I agree to the <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Terms of Service</a> and <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Privacy Policy</a></label>
                            </div>
                            <button type="submit" class="btn btn-signup mb-3">Create Account</button>
                            
                            <div class="divider">
                                <span class="divider-text">OR SIGN UP WITH</span>
                            </div>
                            
                            <!-- Google Sign-In Button -->
                            <button type="button" class="btn btn-google mb-3" id="googleSignUp">
                                <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google logo"> -->
                                Sign up with Google
                            </button>
                            
                            <div class="text-center mt-3">
                                <span>Already have an account? <a href="login.html" class="text-decoration-none" style="color: var(--primary-color);">Log in</a></span>
                            </div>
                        </form>
                        
                        <!-- App Store Badges -->
                        <div class="app-stores">
                            <a href="https://apps.apple.com" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" alt="App Store" class="app-store-btn">
                            </a>
                            <a href="https://play.google.com" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" class="app-store-btn">
                            </a>
                        </div>
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
    
    <!-- <script>
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
        
        // Password strength indicator
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('passwordStrengthBar');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Length check
            if (password.length >= 8) strength += 25;
            
            // Contains lowercase
            if (/[a-z]/.test(password)) strength += 25;
            
            // Contains uppercase
            if (/[A-Z]/.test(password)) strength += 25;
            
            // Contains number or special char
            if (/[0-9!@#$%^&*]/.test(password)) strength += 25;
            
            // Update strength bar
            strengthBar.style.width = strength + '%';
            
            // Change color based on strength
            if (strength < 50) {
                strengthBar.style.backgroundColor = '#dc3545'; // Red
            } else if (strength < 75) {
                strengthBar.style.backgroundColor = '#fd7e14'; // Orange
            } else {
                strengthBar.style.backgroundColor = '#28a745'; // Green
            }
        });
        
        // Form submission
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            if (!document.getElementById('termsCheck').checked) {
                alert('You must agree to the terms and conditions');
                return;
            }
            
            // Here you would typically send this to your backend
            console.log('Signup attempt with:', firstName, lastName, email, password);
            
            // For demo purposes, we'll just show an alert
            alert('Account created! In a real app, this would create your account.');
        });
        
        // Google Sign-Up
        document.getElementById('googleSignUp').addEventListener('click', function() {
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
    </script> -->
</body>
</html>