<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 40px;
            margin: 20px 0;
        }

        li {
            margin-bottom: 10px;
        }

        .indented {
            margin-left: 20px;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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

        .back-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            border: none;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="content">
        <?php
        var_dump(checkdate(12,31,-400));
        echo "<br>";
        var_dump(checkdate(2,29,2003));
        echo "<br>";
        var_dump(checkdate(2,29,2004));
        
        echo "<br>";
        $date=date_create("2013-03-15");
        date_add($date,date_interval_create_from_date_string("40 days"));
        echo date_format($date,"Y-m-d");

        echo "<br>";
        $date=date_create("2013-03-15");
        echo date_format($date,"Y/m/d");

        echo "<br>";
        date_default_timezone_set("Asia/Manila");
        echo "Current Date and Time in Asia/Manila: " . date("Y-m-d H:i:s");
        echo "<br>";
        echo date_default_timezone_get();

        echo "<br>";
        $date1=date_create("2013-03-15");
        $date2=date_create("2013-12-12");
        $diff=date_diff($date1,$date2);
        echo "Difference: ";
        echo $diff->y . " years, " . $diff->m . " months, " . $diff->d . " days";

        echo date("l")."<br>";

        echo date("i,jS \of F Y h:i:sA");

        echo "<br>";
        print_r(getdate());

        echo "<br>";
        print_r(localtime());
        echo "<br><br>";
        print_r(localtime(time(),true));

        echo "<br>";
        echo idate("B") . "<br>";
        echo idate("d") . "<br>";
        echo idate("h") . "<br>";
        echo idate("H") . "<br>";
        echo idate("i") . "<br>";
        echo idate("I") . "<br>";
        echo idate("L") . "<br>";
        echo idate("m") . "<br>";
        echo idate("s") . "<br>";
        echo idate("t") . "<br>";
        echo idate("U") . "<br>";
        echo idate("w") . "<br>";

        echo "<br>";
        echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));

        echo "<br><br>";
        echo strftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>";
        setlocale(LC_ALL, "hu_HU.UTF8");
        echo strftime("%Y. %B %d. %A. %X %Z");

        echo "<br>";
        echo "<br>";
        $date_string = "2023-10-08 14:30:00";
        $timestamp = strtotime($date_string);

        echo "Timestamp for $date_string: $timestamp";
        ?>
        <br>
        <a href="index.php">Back to Main Page</a>
    </div>

    <footer>
        <p>&copy; Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>
