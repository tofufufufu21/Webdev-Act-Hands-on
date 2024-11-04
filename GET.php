<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Display (GET)</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            padding: 20px;
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
    <div class="content">
        <h2>Form Data (GET)</h2>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['fname'])) {
                $fname = htmlspecialchars($_GET['fname']);
                echo "<p><strong>First Name:</strong> $fname</p>";
            }

            if (isset($_GET['lname'])) {
                $lname = htmlspecialchars($_GET['lname']);
                echo "<p><strong>Last Name:</strong> $lname</p>";
            }

            if (isset($_GET['mname'])) {
                $mname = htmlspecialchars($_GET['mname']);
                echo "<p><strong>Middle Name:</strong> $mname</p>";
            }

            if (isset($_GET['birthday'])) {
                $birthday = htmlspecialchars($_GET['birthday']);
                echo "<p><strong>Birthday:</strong> $birthday</p>";
            }

            if (isset($_GET['course'])) {
                $course = htmlspecialchars($_GET['course']);
                echo "<p><strong>Course:</strong> $course</p>";
            }
        }
        ?>
        
        <form action="index.php" method="get">
            <button type="submit">Go Back to Index</button>
        </form>
    </div>

    <footer>
        <p>&copy; Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>
