<!-- TASK 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
        // declare & initialise array
        $marks = array (85, 85, 95); 
        // modify 2nd element
        $mark[1] = 90;
        // Compute Average
        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
        if ($ave >= 50)
            $status = "PASSED";
        else
            $status = "FAILED";
        echo "<p>The average score is $ave. You $status.</p>";
    ?>
    
</body>
</html>

