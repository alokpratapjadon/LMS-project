<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page with Password Check</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(180deg, #000428, #200122); /* Matching gradient */
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
        }

        /* Navbar styles */
        nav {
            background-color: rgba(0, 0, 0, 0.9); /* Dark transparent background */
            width: 100%;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 0;
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: 'Poppins', sans-serif; /* Match the font style */
        }

        nav ul li a {
            text-decoration: none;
            font-size: 1rem;
            color: #ffffff;
            padding: 10px 20px;
            transition: 0.3s ease;
            border-radius: 30px; /* More rounded corners */
            font-family: 'Poppins', sans-serif; /* Same font as the logo */
        }

        /* Hover effect for navbar links */
        nav ul li a:hover {
            background-color: #8e44ad; /* Purple gradient color on hover */
            color: #ffffff;
        }

        /* Button style for 'Get Started' */
        .get-started-btn {
            background-color: #9a10d5;
            padding: 10px 25px;
            color: white;
            border: none;
            border-radius: 50px; /* More rounded corners */
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .get-started-btn:hover {
            background-color: #ba5be0;
        }

        /* Login form styles */
        .login-container {
            background-color: rgba(0, 0, 0, 0.8); /* Dark background matching navbar */
            padding:20px;
            border-radius: 30px; /* Larger rounded corners */
            max-width: 350px; /* Smaller poster for mobile */
            width: 100%;
            margin: 30px auto;
            margin-top: 100px;
            text-align: center;
            position: relative;
            transition: all 0.3s ease;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3); /* Default shadow */
        }

        /* Hover effect for the login container */
        .login-container:hover {
            box-shadow: 0 0 60px rgba(142, 68, 173, 0.7); /* Purple light shadow on hover */
            transform: translateY(-10px); /* Slight upward movement */
        }

        .login-container h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 1.6rem;
            margin-bottom: 20px;
        }

        .login-container p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.7); /* Lighter text */
        }

        .login-container input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border-radius: 15px; /* More rounded input fields */
            border: none;
            background-color: #222;
            color: white;
            outline: none;
        }

        .login-container button {
            width: 100%;
            padding: 15px;
            background-color: #9a10d5;
            border: none;
            border-radius: 50px; /* Larger rounded button */
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-container button:hover {
            background-color: #ba5be0;
        }

        .login-container .social-login {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .login-container .social-login a {
            width: 48%;
            padding: 10px;
            background-color: #333;
            border: none;
            border-radius: 50px; /* More rounded social login buttons */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .login-container .social-login a img {
            width: 24px;
            height: 24px;
        }

        .login-container .social-login a:hover {
            background-color: #444;
        }

        .login-container a {
            text-decoration: none; /* Remove underline from links */
            color: #8e44ad;
            font-weight: bold;
        }

        .login-container a:hover {
            color: #9b59b6; /* Hover effect for links */
        }
        .or{
                margin-top: 20px;
            }
            .forget{
                margin-top: 15px;
            }
        .strong-password-alert {
            color: #ff6961;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 768px) {
            nav {
                padding: 15px;
            }

            nav ul {
                display: none; /* Hide menu links on smaller screens */
            }

            .get-started-btn {
                padding: 8px 20px;
                font-size: 0.9rem;
            }

            .login-container {
                padding: 20px;
                border-radius: 20px; /* Reduce corner radius on small screens */
            }

            .login-container h2 {
                font-size: 1.4rem;
            }

            .login-container p {
                font-size: 1 rem;
            }

            .login-container input {
                padding: 12px;
                border-radius: 12px; /* Smaller radius for mobile */
            }

            .login-container button {
                padding: 12px;
                border-radius: 40px; /* Slightly smaller buttons */
            }
            .or{
                margin-top: 20px;
            }
            .forget{
                margin-top: 15px;
            }
            .social-login a {
                text-align: center;
                color: aliceblue;
                font-weight: 300;
                font-family: Arial, Helvetica, sans-serif;
                padding:08px;
                border-radius: 50px; /* Consistent with login button */
            }
        }
    </style>
</head>
<body>

    <!-- Navbar section -->
    <nav>
        <!-- Left side: logo -->
        <div class="logo">Gla Library</div>

        <!-- Right side: get started button -->
        <button class="get-started-btn">Get Started</button>
    </nav>

    <!-- Login form section -->
    <div class="login-container">
        <h2>Login</h2>
        <p>Sign in to access your account</p>

        <!-- Email input -->
        <input type="email" placeholder="Email or Username" required>

        <!-- Password input -->
        <input type="password" id="password" placeholder="Password" required>
        <p class="strong-password-alert" id="passwordAlert" style="display:none;">Your password is too common!</p>

        <!-- Login button -->
        <button id="loginButton">Login</button>

        <p class="or">or</p>

        <!-- Social login buttons -->
     

        <p class="forget"><a href="#">Forgot password?</a></p>
        <p>Need a new account? <a href="#">Sign up</a></p>
    </div>

    <script>
        // List of common passwords
        const commonPasswords = ['123456', 'password', '123456789', 'qwerty', 'abc123'];

        // Password input and alert elements
        const passwordInput = document.getElementById('password');
        const passwordAlert = document.getElementById('passwordAlert');

        // Add event listener to password input to check for common passwords
        passwordInput.addEventListener('input', function() {
            const password = passwordInput.value;

            // Check if password is in the list of common passwords
            if (commonPasswords.includes(password)) {
                passwordAlert.style.display = 'block'; // Show alert
            } else {
                passwordAlert.style.display
