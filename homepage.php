<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            flex-direction: column;
        }

        /* Main content container */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #555;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        input[type="submit"]:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .message {
            margin-top: 15px;
            font-size: 14px;
            color: #e74c3c;
            text-align: center;
        }

        .attempts {
            margin-top: 10px;
            font-size: 14px;
            color: #555;
            text-align: center;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <?php
                // Start session to store attempt count
                session_start();

                // Automatically reset attempt counter when the page is refreshed (GET request)
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $_SESSION['attempts'] = 0;
                }

                // Set the maximum number of attempts allowed
                $maxAttempts = 3;

                // Check if the form has been submitted (POST request)
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    // Ensure both fields are provided
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {

                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        // Define correct username and password for verification
                        $correctUsername = 'user123';
                        $correctPassword = 'password123';

                        // Increment the attempt count
                        $_SESSION['attempts']++;

                        // Check if the provided credentials are correct
                        if($username === $correctUsername && $password === $correctPassword) {
                            // Reset attempts on successful login
                            $_SESSION['attempts'] = 0; 
                            
                            echo "<p class='message'>Username and Password are correct. Redirecting...</p>";

                            // Redirect to welcome.php upon successful login
                            header('Location: welcome.php');
                            exit;
                        } else {
                            echo "<p class='message'><strong>Login Error:</strong> Incorrect username or password.</p>";
                        }
                    } else {
                        echo "<p class='message'><strong>Login Error:</strong> Both username and password must be provided.</p>";
                    }
                }

                // Determine whether to disable the form
                $disableForm = ($_SESSION['attempts'] >= $maxAttempts);
                
                // Redirect to index.php if maximum attempts are reached
                if ($disableForm) {
                    echo "<p class='message'>You have reached the maximum number of attempts. Redirecting to index.php...</p>";
                    header('refresh:0;url=index.php');
                    exit;
                }
            ?>

            <form method="post" class="login">
                <h1>Login</h1>
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required <?php echo $disableForm ? 'disabled' : ''; ?>>
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required <?php echo $disableForm ? 'disabled' : ''; ?>>
                <input type="submit" value="Login" <?php echo $disableForm ? 'disabled' : ''; ?>>
            </form>

            <?php
                // Display the current number of attempts
                echo "<p class='attempts'><strong>Attempts:</strong> {$_SESSION['attempts']}</p>";
            ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>