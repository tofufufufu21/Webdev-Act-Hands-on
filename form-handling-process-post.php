<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form Result</title>
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
        <h1>User Registration Form Using <b>POST</b> Result</h1>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['fname'])) {
                $fname = $_POST['fname'];
                echo "<p><strong>First Name:</strong> " . htmlspecialchars($fname) . "</p>";
            }

            if (isset($_POST['lname'])) {
                $lname = $_POST['lname'];
                echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lname) . "</p>";
            }

            if (isset($_POST['mname'])) {
                $mname = $_POST['mname'];
                echo "<p><strong>Middle Name:</strong> " . htmlspecialchars($mname) . "</p>";
            }

            if (isset($_POST['birthday'])) {
                $birth = $_POST['birthday'];
                echo "<p><strong>Birthday:</strong> " . htmlspecialchars($birth) . "</p>";
            }

            if (isset($_POST['course'])) {
                $course = $_POST['course'];
                echo "<p><strong>Course:</strong> " . htmlspecialchars($course) . "</p>";
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
