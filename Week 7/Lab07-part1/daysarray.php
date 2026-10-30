<!-- TASK 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experimenting with Arrays</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
        // the array in English
        $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        echo "<p>The days of the week in English are:</p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p><br>";

        $days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
        echo "<p>The days of the week in French are:</p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";
    ?>
</body>
</html>