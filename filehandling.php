<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm Lessons - Form Handling</title>
    <meta name="description" content="this is for WBDV112 midterm">
    <meta name="keywords" content="HTML, functions, methods, string">
    <meta name="author" content="Dela Cruz Jhonrick">
    <link rel="stylesheet" href>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        hr {
            border: 1px solid #ccc;
            margin: 10px 0;
            width: 300px;
        }

        form {
            margin-bottom: 20px;
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
        <p>Form Handling Example</p>
        <h1>User Registration Form Using <b>POST</b></h1>
        <form action="form-handling-process-post.php" method="POST">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your name" required><br><br>
            <hr>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br><br>
            <hr>
            <label for="mname">Middle name:</label>
            <input type="text" id="mname" name="mname" placeholder="Enter your middle name" required><br><br>
            <hr>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required><br><br>
            <label for="course">Course:</label>
            <select name="course" id="course" required>
                <option value="" disabled selected>Select a course</option>
                <option value="bsit">BSIT</option>
                <option value="bscs">BSCS</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>

        <h1>User Registration Form Using <b>GET</b></h1>
        <form action="GET.php" method="GET">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your name" required><br><br>
            <hr>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name" required><br><br>
            <hr>
            <label for="mname">Middle name:</label>
            <input type="text" id="mname" name="mname" placeholder="Enter your middle name" required><br><br>
            <hr>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required><br><br>
            <label for="course">Course:</label>
            <select name="course" id="course" required>
                <option value="" disabled selected>Select a course</option>
                <option value="bsit">BSIT</option>
                <option value="bscs">BSCS</option>
            </select>
            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>

        <br>
        <a href="index.php">Back to Main Page</a>
    </div>

    <footer>
        <p>&copy; Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>
