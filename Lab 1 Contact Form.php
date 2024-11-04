<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Longares Sean Michael">
    <title>Contact Lab-act#1 Midterm</title>
    <style>
        * {
            box-sizing: border-box; /* Ensure padding doesn't affect width */
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column; /* Stack elements vertically */
            min-height: 100vh; /* Full height of the viewport */
            font-family: Arial, sans-serif; /* Optional: Set a font for better readability */
        }

        form {
            flex: 1; /* Allow form to take remaining space */
            padding: 20px; /* Add padding around form */
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }

        table {
            margin-bottom: 20px; /* Space below the table */
        }
    </style>
</head>
<body>
    
<form method="POST">
    <p>Lab Activity #1</p>
    <h1>Contact Form:</h1>
    <table>
        <tr>
            <td><label for="date-format">Choose a date format:</label></td>
            <td>
                <select name="date_format" id="date-format" required>
                    <option value="YYYY-MM-DD">YYYY-MM-DD</option>
                    <option value="MM/DD/YYYY">MM/DD/YYYY</option>
                    <option value="DD-MM-YYYY">DD-MM-YYYY</option>
                    <option value="Day, Month DD, YYYY">Day, Month DD, YYYY</option>
                    <option value="12-hour Time (h:i:s A)">12-hour Time (h:i:s A)</option>
                    <option value="24-Hour Time (H:i:s)">24-Hour Time (H:i:s)</option>
                    <option value="Full Date & time (YYYY-MM-DD H:i:s)">Full Date & time (YYYY-MM-DD H:i:s)</option>
                    <option value="Swatch Internet Time (@B)">Swatch Internet Time (@B)</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="name1">Name:</label></td>
            <td><input type="text" name="name1" id="name1" placeholder="Enter a name" required></td>
        </tr>

        <tr>
            <td><label for="name2">Email:</label></td>
            <td><input type="email" name="name2" id="name2" placeholder="Enter an email" required></td>
        </tr>

        <tr>
            <td><label for="web">Website (optional):</label></td>
            <td><input type="url" name="web" id="web" placeholder="Enter a URL"></td>
        </tr>

        <tr>
            <td><label for="comment">Comments (optional):</label></td>
            <td><textarea id="comment" name="comment" rows="4" cols="40" placeholder="Enter a comment"></textarea></td>
        </tr>
    </table>

    <h3>Gender:</h3>
    <label for="male">
        <input type="radio" name="gender" id="male" value="Male" required> Male
    </label><br>
    <label for="female">
        <input type="radio" name="gender" id="female" value="Female" required> Female
    </label><br>
    <label for="other">
        <input type="radio" name="gender" id="other" value="Other" required> Other
    </label><br><br>
    <button type="submit">Submit</button><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the current date and time
        $dateFormat = $_POST['date_format'];
        $formattedDate = '';

        // Format the date based on user's selection
        switch ($dateFormat) {
            case 'YYYY-MM-DD':
                $formattedDate = date('Y-m-d');
                break;
            case 'MM/DD/YYYY':
                $formattedDate = date('m/d/Y');
                break;
            case 'DD-MM-YYYY':
                $formattedDate = date('d-m-Y');
                break;
            case 'Day, Month DD, YYYY':
                $formattedDate = date('l, F j, Y');
                break;
            case '12-hour Time (h:i:s A)':
                $formattedDate = date('h:i:s A');
                break;
            case '24-Hour Time (H:i:s)':
                $formattedDate = date('H:i:s');
                break;
            case 'Full Date & time (YYYY-MM-DD H:i:s)':
                $formattedDate = date('Y-m-d H:i:s');
                break;
            case 'Swatch Internet Time (@B)':
                $formattedDate = date('B');
                break;
        }

        echo '<h2>WELCOME!</h2>';
        echo '<h2>Formatted Date:</h2>' . "<br>";
        echo $formattedDate . "<br>";
        echo "<br>";
        if (isset($_POST['name1'])) {
            echo "Name: " . htmlspecialchars($_POST['name1']) . "<br>";
        }

        if (isset($_POST['name2'])) {
            echo "Email: " . htmlspecialchars($_POST['name2']) . "<br>";
        }

        if (isset($_POST['web']) && !empty($_POST['web'])) {
            echo "Website: " . htmlspecialchars($_POST['web']) . "<br>";
        } else {
            echo "No Website or Please enter a valid website URL<br>";
        }

        if (isset($_POST['comment']) && !empty($_POST['comment'])) {
            echo "Comment: " . htmlspecialchars($_POST['comment']) . "<br>";
        } else {
            echo "No Comment Provided<br>";
        }

        if (isset($_POST['gender'])) {
            echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
        }
    }
    ?>
     <br><a href="calSelect.php">See the Calculator</a>
     <br><a href="index.php">Back to Index Page</a>
</form>

<footer>
        <p>&copy; 2024 Midterm Lessons and Activities. DelaCruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>

</body>
</html>