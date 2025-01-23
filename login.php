<html>
<head>
    <title>Account Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
        }
        .login-container h2 {
            margin: 0 0 10px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .login-container p {
            margin: 0 0 20px;
            color: #666;
        }
        .login-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f0f4ff;
        }
        .login-container a {
            color: #007bff;
            text-decoration: none;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .login-container .login-button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container .login-button:hover {
            background-color: #0056b3;
        }
        .login-container .signup-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <center>
        <h2>Account Login</h2>
        <p>Please enter your login details and password!</p>
        </center>
        <form>
            <label for="username">Username*</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password*</label>
            <input type="password" id="password" name="password" required>
            <a href="#">Forgot password?</a>
            <button type="submit" class="login-button">Log in</button>
        </form>
        <div class="signup-link">
            <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>