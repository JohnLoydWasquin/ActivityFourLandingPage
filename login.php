<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Login</h1>
            <p>Sign in to your account to continue</p>
        </div>
        
        <form action="" id="loginForm">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        <button type="submit" class="login-button">Sign In</button>
    </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <div class="socia-login">
            <button class="socia-button">Google</button>
            <button class="socia-button">Github</button>
        </div>
        <div class="signup-link">
            Don't have an account? <a href="signUp.php">Sign Up</a>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>