<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Flexbox layout for full-height footer at the bottom */
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"], textarea, input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .link-back {
            margin-top: 20px;
            display: block;
        }

        .output-container {
            margin-top: 40px;
            padding: 10px;
            border-top: 1px solid #ccc;
            background-color: #eef;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            font-size: 14px;
            margin-top: auto; /* Pushes the footer to the bottom */
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
        <h2>About Me</h2>
        <form action="Welcome.php" method="POST">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>

            <label for="about">Tell something about yourself:</label>
            <textarea id="about" name="about" rows="4" required></textarea>

            <label for="dob">Enter your date of birth:</label>
            <input type="date" id="dob" name="dob" required>

            <input type="submit" value="Submit">
        </form>

        <a href="index.php" class="link-back">Go back to index</a>
    </div>

    <?php
    // Function to calculate zodiac sign based on month and day
    function getZodiacSign($month, $day) {
        if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return 'Aquarius';
        if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return 'Pisces';
        if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return 'Aries';
        if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return 'Taurus';
        if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return 'Gemini';
        if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return 'Cancer';
        if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return 'Leo';
        if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return 'Virgo';
        if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return 'Libra';
        if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return 'Scorpio';
        if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return 'Sagittarius';
        if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) return 'Capricorn';
        return 'Unknown';
    }

    // Function to get the day of the week
    function getDayOfWeek($dob) {
        return date('l', strtotime($dob));
    }

    // PHP code to handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = strtoupper(htmlspecialchars($_POST['name']));  // Convert name to uppercase
        $about = htmlspecialchars($_POST['about']);
        $dob = htmlspecialchars($_POST['dob']);
        $words_count = str_word_count($about);  // Count number of words in "About" section
        $day_of_week = getDayOfWeek($dob);  // Get the day of the week

        // Get the month and day for zodiac sign calculation
        $month = date('m', strtotime($dob));
        $day = date('d', strtotime($dob));
        $zodiac_sign = getZodiacSign($month, $day);

        // Display the submitted data in the bottom section
        echo '<div class="container output-container">';
        echo "<h3>Submitted Information:</h3>";
        echo "<p><strong>Your Name in Capital Letters:</strong> " . $name . "</p>";
        echo "<p><strong>You said:</strong> " . $about . "</p>";
        echo "<p><strong>Number of Words:</strong> " . $words_count . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . date('Y-m-d', strtotime($dob)) . "</p>";
        echo "<p><strong>Day of the Week for Date of Birth:</strong> " . $day_of_week . "</p>";
        echo "<p><strong>Your Zodiac Sign:</strong> " . $zodiac_sign . "</p>";
        echo '</div>';
    }
    ?>

    <footer>
        <p>&copy; 2024 Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>