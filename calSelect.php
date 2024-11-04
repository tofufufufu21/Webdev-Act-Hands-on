<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Longares Sean Michael">
	<title>Calculator(Select) Lab-act#1 Midterm</title>
    <style>
        * {
    box-sizing: border-box; /* Ensure padding doesn't affect width */
    margin: 0;
    padding: 0;
}

body {
    display: flex;
    flex-direction: column; 
    min-height: 100vh; 
    font-family: Arial, sans-serif; 
}

form {
    flex: 1; 
    padding: 20px; 
}

footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
    position: relative; 
    bottom: 0;
}



    </style>
</head>
<body>
    <form method="post" action="">
        <p>Lab Activity #1</p>
        <br>
		<h1>Simple Calculator</h1>
        <label for="number1">Number 1:</label>
        <input type="number" class="textarea2" id="number1" name="number1" required><br><br>
        
        <label for="number2">Number 2:</label>
        <input type="number" class="textarea2" id="number2" name="number2" required><br><br>
        
        <label for="operation">Select an operation:</label>
        <select id="operation" name="operation" class="textarea2">
            <option value="sum">+</option>
			<option value="subtraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
        </select><br><br>
        
        <button type="submit" name="calculate">Calculate</button>

<?php
    $num1 = filter_input(INPUT_POST, 'number1', FILTER_VALIDATE_FLOAT);
    $num2 = filter_input(INPUT_POST, 'number2', FILTER_VALIDATE_FLOAT);
    $operation = $_POST['operation'] ?? 'sum';

    $result = 0;

    if ($num1 !== null && $num2 !== null) {
        if ($operation === 'sum') {
            $result = $num1 + $num2;
        } elseif ($operation === 'division' && $num2 != 0) {
            $result = $num1 / $num2;
        } elseif ($operation === 'multiplication') {
            $result = $num1 * $num2;
        } elseif ($operation === 'subtraction') {
            $result = $num1 - $num2;
        } else {
            $result = "Invalid operation";
        }
    }

    echo "<p>Result: $result</p>";
	
?>
	    <br><a href="index.php">Back to Index Page</a>
	</form>
	<footer>
        <p>&copy; 2024 Midterm Lessons and Activities. Dela Cruz, Jhonrick P. / BSIT 2-Y1-5.</p>
    </footer>
</body>
</html>