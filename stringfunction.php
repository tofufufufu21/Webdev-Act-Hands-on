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
<h1> String function Example </h1>
    <?php
   
    echo "<h1>addcslashes ()<br></h1>";
    $str = "Hello, my name is Kai Jim."; 
    echo $str."<br />";
    echo addcslashes($str,'m')."<br />";
    echo addcslashes($str, 'K')."<br />";

    echo "<h1>addslashes ()<br></h1>";
    $str = "Who's is Juan C'ruz.";
    echo addslashes($str). " This is safe is a database query.";

    echo "<h1>bin2hex()<br></h1>";
    $str = "a";
    echo bin2hex($str) . "<br>"; //61 
    echo pack("H*", '61'). "<br>";

    
    echo "<h1>chr()<br></h1>"; 
    echo chr(52). "<br>";//4
    echo chr(052). "<br>"; //*
    echo chr(0x52). "<br>"; //R

    echo "<h1>chunk_split()<br></h1>"; 
    $str = "Hello World";
    echo chunk_split($str,2,"-"); //He-11-o -


    echo "<h1>convert_cyr_string() <b>DEPRECATED/REMOVED </b> <br></h1>";

    echo "<h1>convert_uudecode()<br></h1>"; //unit-to-unix
    $str_encoded = convert_uuencode("Hello World"); // Encode "Hello World" first
    echo convert_uudecode($str_encoded) . "<br>";

    echo "<br>";

    echo "<h1>convert_uuencode()<br></h1>"; //unit-to-unix
    $str = "Hello World";
    echo convert_uuencode($str);




    echo "<h1>crc32()<br></h1>"; // cyclic redundancy checksum
    $str = crc32("Hello World!");
    
    echo "without %u:" . $str . "<br>";
    echo "with %u:";
    printf("%u", $str);

    echo "<h1>echo()<br></h1>";
    

    echo "<h1>fprintf()<br></h1>"; 
    $str = "Hello";
    $number = 123;
    $file = fopen("test.txt", "w");
    echo fprintf($file, "%s world. Day number %u", $str, $number);

    echo "<h1>get_html_translation_table() <br></h1>"; print_r(get_html_translation_table()); //readable
    echo "<br>";
    print_r(get_html_translation_table (HTML_ENTITIES));


    echo "<h1>hebrev()<br></h1>";
    echo hebrev("á cùải äuuña ná cùải äuuña"); 
    echo "<br> á củai\n äúuña";


    echo "<h1>html_entity_decode()<br></h1>";
    $str = "Jane &amp; &#039; Tarzan&#039;"; //&quot; &lt; &gt;
    echo html_entity_decode($str);
    echo "<br>";
    echo html_entity_decode($str, ENT_QUOTES);//Encodes double quote and single
    echo "<br>";
    echo html_entity_decode($str, ENT_NOQUOTES);//does not display quotes

    echo "<h1>htmlentities()<br></h1>";
    $str = "Jane & 'Tarzan'";
    echo htmlentities($str, ENT_COMPAT); echo "<br />";
    echo htmlentities($str, ENT_QUOTES); echo "<br />";
    echo htmlentities($str, ENT_NOQUOTES); 

    echo "<h1>htmlspecialcharacs()<br></h1>";
    $str = "Jane & 'Tarzan'";
    echo htmlspecialchars($str, ENT_COMPAT); echo "<br />";
    echo htmlspecialchars($str, ENT_QUOTES); echo "<br />";
    echo htmlspecialchars($str, ENT_NOQUOTES); 

    echo "<h1>implode()<br></h1>";
    $arr = array('Hello', 'World!', 'Beautiful', 'Day!'); 
    echo implode("*", $arr); //Hello*World

    echo "<h1>levenshtein()<br></h1>";
    echo levenshtein("Hello World", "ello Wor") . "<br>";
    echo levenshtein("Hello World", "ello Wox", 10, 20, 30);


    echo "<h1>localeconv()<br></h1>"; 
    setlocale(LC_ALL, "US");
    $locale_info = localeconv(); 
    print_r($locale_info);

    echo "<h1>ltrim()<br></h1>";
    $str = "Hello World!";
    echo $str. "<br>";
    echo ltrim($str, "Hello");


    echo "<h1>md5()<br></h1>";
    $str = "Hello";
    echo md5($str); //message digest

    echo "<h1>md5_file()<br></h1>"; 
    $filename = "test.txt";
    $md5file = md5_file($filename); 
    echo $md5file;


    echo "<h1>metaphone ()<br></h1>";
    $str = "Assistance";
    $str2 = "Assistants";

    echo metaphone($str); //ASSTNT
    echo "<br>";
    echo metaphone($str2);


    echo "<h1>money_format() <b>DEPRECATED </b><br></h1>"; $number = 1234.56;
    echo "The price is " . number_format($number, 2,);

    echo "<h1>number_format()<br></h1>"; 
    echo number_format("1000000")."<br>"; 
    echo number_format("1000000",2)."<br>"; 
    echo number_format("1000000",2,);


    echo "<h1>ord()<br></h1>"; 
    echo ord("h")."<br>";
    echo ord("hello")."<br>";

    echo "<h1>print()<br></h1>";
    print "Hello world!";

    echo "<h1>printf()<br></h1>";
    $number = 9;
    $str = "Beijing";
    printf("There are %u million bicycles in %s.", $number, $str);


    echo "<h1>setlocale()<br></h1>";
    echo setlocale (LC_ALL, "US"); 
    echo "<br>";
    echo setlocale(LC_ALL, NULL);

    echo "<h1>sha1()<br></h1>"; 
    $str = "Hello";
    echo sha1($str);

    echo "<h1>sha1_file()<br></h1>"; 
    $filename = "test.txt";
    $sha1file = sha1_file($filename); 
    echo $sha1file;


    echo "<h1>soundex()<br></h1>";
    $str ="Assistance";
    $str2 = "Assistants";
    echo soundex($str);
    echo "<br>";
    echo soundex($str2);



    echo "<h1>sprintf()<br></h1>";
    $number = 9; 
    $str ="Beijing";
    $txt = sprintf("There are %u million bicycles in %s.", $number, $str);
    echo $txt;
    

    echo "<h1>sscanf()<br></h1>";
    $str = "age: 30 weight: 60kg";
    sscanf($str, "age: %d weight: %dkg", $age, $weight); // show types and values
    var_dump($age, $weight);

    echo "<h1>strlen()</h1>";
    $str = "Hello, world!";
    $length = strlen($str);
    echo "The length of the string is: $length";

    echo "<h1>strtoupper()</h1>";
    $str = "hello, world!";
    $uppercase_str = strtoupper($str);
    echo "Uppercase string: $uppercase_str";

    
    echo "<h1>strtolower()</h1>"; 
    $str = "Hello, World!";
    $lowercase_str = strtolower($str); 
    echo "Lowercase string: $lowercase_str";

    echo "<h1>strrev()</h1>";
    $str = "hello";
    $reversed_str = strrev($str);
    echo "Reversed string: $reversed_str";

    echo "<h1>str_word_count()</h1>";
    $text = "This is a simple example."; 
    $wordCount = str_word_count($text);
    echo "Number of words: $wordCount";

    echo "<h1>substr()</h1>";
    $str = "Hello, world!";
    $extracted_str = substr($str, 0, 5);
    echo "Extracted string: $extracted_str";


    ?>

    <br>
    <br>
    <br>
    <center>
    <a href="index.php">Back to Main Page</a>

    <footer>
        <p>&copy;  Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5. </a></p>
    </footer>
</body>
</html>