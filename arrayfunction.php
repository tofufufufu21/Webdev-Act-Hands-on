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
    <h1> Array Functions </h1>

    <h3>Array change key case</h3>
    <?php
    $age=array("student1"=>"90", "student2"=>"87", "student3"=>"93"); 
    print_r(array_change_key_case ($age, CASE_UPPER));
    ?>

    <h3>Array chunk function</h3>
    <?php
    $cars = array("Volvo", "BMW", "Toyota","Honda", "Mercedes","Opel"); 
    print_r(array_chunk($cars,2));
    ?>

    <h3>Array column</h3>
    <?php 
    $a = array( 
        array( 
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin', ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith', )
    );
    $last_names = array_column($a, 'last_name'); 
    print_r($last_names);
    ?>

    <h3>Array combine</h3>
    <?php
    $fname=array("Peter","Ben","Joe"); 
    $age=array("35","37","43");
    $c=array_combine($fname, $age);
    print_r($c);
    ?>

    <h3>Array count</h3>
    <?php
    $a=array("A","Cat","Dog","A", "Dog");
    print_r(array_count_values($a));
    ?>

    <h3>Array diff</h3>
    <?php
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    $result=array_diff($a1,$a2);
    print_r($result);
    ?>

    <h3>Array intersect</h3>
    <?php
    $al=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");
    $result=array_intersect($al,$a2);
    print_r($result);
    ?>

    <h3>Array key</h3>
    <?php
    $a=array("Volvo"=>"XC90","BMW"=>"X5");
    if (array_key_exists("Volvo",$a))
    { 
        echo "Key exists!";
    }
    else
    {
        echo "Key does not exist!"; 
    } 
    ?>

    <h3>Array map</h3>
    <?php
    function myfunction($v)
    {
        return($v*$v);
    }
    $a=array(1,2,3,4,5);
    print_r(array_map("myfunction",$a));
    ?>

    <h3>Array merge</h3>
    <?php
    $al=array("red","green"); 
    $a2=array("blue","yellow"); 
    print_r(array_merge($al,$a2));
    ?>

    <h3>Array multisort</h3>
    <?php
    $a=array("Dog","Cat", "Horse", "Bear","Zebra");
    array_multisort($a);
    print_r($a);
    ?>

    <h1>Sort Functions</h1>

    <h3>sort()</h3>
    <?php
    $letters = array("W", "A", "C");
    sort($letters);
    print_r($letters);
    ?>

    <h3>sort()</h3>
    <?php
    $numbers = array(86, 75, 66, 98, 78);
    sort($numbers);
    print_r($numbers);
    ?>

    <h3>Display as Text</h3>
    <?php
    $fruits = array("Apple", "Grapes", "Mango");
    foreach ($fruits as $fruit) {
        echo "• " . $fruit . "<br>";
    }
    ?>

    <br>
    <br>
    <br>
    <center>
    <a href="index.php">Back to Main Page</a>
    </center>

    <footer>
        <p>&copy;  Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>
