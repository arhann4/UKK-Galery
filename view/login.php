<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>
<body>
    <div class="container" id="container">
        <!-- Sign-Up Form -->
        <div class="sign-up">
            <form>
                <h1>Create Account</h1>
                <div class="icon">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button type="submit">Sign Up</button>
            </form>
        </div>
        
        <!-- Sign-In Form -->
        <div class="sign-in">
            <form onsubmit="validateForm(event)">
                <h1>Sign In</h1>
                <div class="icon">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                </div>
                <span>or use your email to sign in</span>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password" required>
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        
        <!-- Toggle Container -->
        <div class="toogle-container">
            <div class="toogle">
                <!-- Toggle Right Panel -->
                <div class="toogle-panel toogle-right">
                    <h1>Hello, Friend!</h1>
                    <p>If you don't have an account, sign up here!</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
                <div class="toogle-panel toogle-left">
                    <h1>Welcome Back!</h1>
                    <p>If you already have an account, please sign in!</p>
                    <button class="hidden" id="login" >Sign In</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/dark.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/slide.js"></script>
    <script src="../js/login.js"></script>
</body>
</html>
