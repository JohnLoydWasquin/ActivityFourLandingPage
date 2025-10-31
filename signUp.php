<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Sign Up</h1>
            <p>Welcome let's create your account</p>
        </div>
        
        <form action="" id="registerForm">
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="reg_password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
        </div>
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms" class="terms">
                I agree to the <a href="#" target="_blank">Terms & Conditions</a>
            </label><br><br>
            <button type="submit" class="login-button">Sign Up</button>
    </form>
        <div class="divider">
            <span>or continue with</span>
        </div>
        <div class="socia-login">
            <button class="socia-button">Google</button>
            <button class="socia-button">Github</button>
        </div>
        <div class="signup-link">
            Already have an account <a href="login.php">Sign In</a>
        </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Validation Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script src="script.js"></script>
</body>
</html>