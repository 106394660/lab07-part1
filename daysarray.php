<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experimenting with Arrays</title>
</head>
<body>
    <h1>Days of the Week</h1>

    <?php
        // Step 1: Display days in English
        $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
        
        echo "<h3>Days of the week in English:</h3>";
        echo "<p>" . implode(", ", $days) . "</p>";

        // Step 3: Update the array to French days
        $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

        echo "<h3>Days of the week in French:</h3>";
        echo "<p>" . implode(", ", $days) . "</p>";
    ?>
</body>
</html>
