<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discriminant Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            border-radius: 4px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .back-link:hover {
            background-color: #545b62;
        }
    </style>
</head>
<body>
    <h1>Discriminant Calculation Result</h1>
    
    <?php
    // Check if form values are set
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        // Get the values from the form
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);
        
        // Calculate the discriminant using the formula: b² - 4ac
        $discriminant = ($b * $b) - (4 * $a * $c);
        
        // Display the result
        echo "<div class='result'>";
        echo "<h3>Calculation Details:</h3>";
        echo "<p><strong>a</strong> = " . $a . "</p>";
        echo "<p><strong>b</strong> = " . $b . "</p>";
        echo "<p><strong>c</strong> = " . $c . "</p>";
        echo "<hr>";
        echo "<p><strong>Discriminant Formula:</strong> b² - 4ac</p>";
        echo "<p><strong>Calculation:</strong> (" . $b . ")² - 4 × (" . $a . ") × (" . $c . ")</p>";
        echo "<p><strong>Step-by-step:</strong> " . ($b * $b) . " - " . (4 * $a * $c) . "</p>";
        echo "<h3><strong>Discriminant Result: " . $discriminant . "</strong></h3>";
        
        // Interpret the discriminant
        echo "<h3>Interpretation:</h3>";
        if ($discriminant > 0) {
            echo "<p>The quadratic equation has <strong>two distinct real roots</strong>.</p>";
        } elseif ($discriminant == 0) {
            echo "<p>The quadratic equation has <strong>exactly one real root</strong> (a repeated root).</p>";
        } else {
            echo "<p>The quadratic equation has <strong>no real roots</strong> (two complex roots).</p>";
        }
        echo "</div>";
    } else {
        echo "<div class='result' style='background-color: #f8d7da; border-color: #f5c6cb; color: #721c24;'>";
        echo "<p><strong>Error:</strong> Please provide values for a, b, and c.</p>";
        echo "</div>";
    }
    ?>
    
    <a href="index.html" class="back-link">Calculate Another Discriminant</a>
</body>
</html>