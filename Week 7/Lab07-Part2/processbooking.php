<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // 1. First name
            if (isset($_POST["firstname"])) {$firstname = clean_input($_POST["firstname"]);} 
            else {$firstname = "";}
            
            // 2. Last name
            if (isset($_POST["lastname"])) {$lastname = clean_input($_POST["lastname"]);} 
            else {$lastname = "";}

            // 3. Age
            if (isset($_POST["age"])) {$age = clean_input($_POST["age"]);}
            else {$age = "";}

            // 4. Species
            if (isset($_POST["species"])) {$species = clean_input($_POST["species"]);}
            else {$species = "";}

            // 5. Food 
            if (isset($_POST["food"])) {$food = clean_input($_POST["food"]);} 
            else {$food = "";}

            // 6. Bookday
            if (isset($_POST["bookday"])) {$bookday = clean_input($_POST["bookday"]);}   
            else {$bookday = "";}

            // 7. Party size
            if (isset($_POST["partysize"])) {$partysize = clean_input($_POST["partysize"]);}
            else {$partysize = "";}
                

            // Check some required fields are empty
            if (empty($firstname)) {
                echo "First name is required.<br>";
            }

            if (empty($lastname)) {
                echo "Last name is required.<br>";
            }

            // Convert code like M, D, E, H into fullname
            $speciesNames = array (
                "M" => "Human",
                "D" => "Dwarf",
                "E" => "Elf",
                "H" => "Hobbit"
            );

            $speciesCode = $_POST["species"];

            if (isset($speciesNames[$speciesCode])) {
                $species = $speciesNames[$speciesCode];
            } else {
                $species = "Unknown";}

            // Display the results
            echo "<p>Welcome $lastname $firstname!</p>";
            // Check the booking (Accomodation, 4 day tour and 10 day tour)
            $booking = [];
            if (empty($_POST["accom"]) && 
                empty($_POST["4day"]) && 
                empty($_POST["10day"])) {
                echo "<p>No booking</p>";
            } else {
                if (isset($_POST["accom"])) {
                    $booking[]= "Accommodation";
                }
                if (isset($_POST["4day"])) {
                    $booking[]= "4 Day Tour"; 
                }
                if (isset($_POST["10day"])) {
                    $booking[]= "10 Day Tour";
                }

                $bookingText = implode(", ", $booking);
                echo "<p>Your booking selected includes: $bookingText</p>";
            }
    
            echo "<p>Age: $age</p>";
            echo "<p>Species: $species</p>";
            echo "<p>Menu preferences: $food</p>";
            echo "<p>Travelers: $partysize</p>";

        } else {
            echo "<p>Submit the booking</p>";
        }

        // Function to clean user input
        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>