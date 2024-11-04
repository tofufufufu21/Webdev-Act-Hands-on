<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        <h1>Array Illustration</h1>

        <h3>Index Array</h3>
        <?php
        $courses = array("BSIT", "BSHRM", "ACT");
        echo "List of courses " . $courses[0] . ", " . $courses[1] . " and " . $courses[2] . ".";
        ?>

        <h3>Index Array with Loop</h3>
        <?php
        $courses = array("BSIT", "BSHRM", "ACT");
        $arrlength = count($courses);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $courses[$x];
            echo "<br>";
        }
        ?>

        <h3><b>Associative Array</b></h3>
        <p><b>First Way</b></p>
        <?php
        $age = array("John" => "25", "Fred" => "27", "Max" => "63");
        echo "Fred is " . $age['Fred'] . " years old.";
        ?>
        <p><b>Second Way</b></p>
        <?php
        $age['John'] = '25';
        $age['Fred'] = '27';
        $age['Max'] = '63';
        echo "Fred is " . $age['Fred'] . " years old.";
        ?>

        <h3>LOOP THROUGH ASSOCIATIVE ARRAYs</h3>
        <?php
        $age = array("John" => "25", "Fred" => "27", "Max" => "63");
        foreach ($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        ?>

        <h3><b>Multidimensional ARRAY</b></h3>
        <?php
        $students = array(
            array("John", 20, "Computer Science"), //0 
            array("Anna", 22, "Mathematics"), // 
            array("Peter", 19, "Physics"),
        );
        echo $students[0][1]; // Outputs: 20
        echo $students[1][0]; //Anna
        echo $students[1][1]; //22
        ?>
        <h3><b>Multidimensional Array with foreach Loop</b></h3>
        <?php
        $students = array(
            array("John", 20, "Computer Science"),
            array("Anna", 22, "Mathematics"),
            array("Peter", 19, "Physics"),
        );

        foreach ($students as $student) {
            echo "Name: " . $student[0] . ", Age: " . $student[1] . ", Field of Study: " . $student[2];
            echo "<br>";
        }
        ?>

        <br>
        <br>
        <br>
        <center>
        <a href="index.php">Back to Main Page</a>
        </center>
    </div>

    <footer>
        <p>&copy;  Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>
