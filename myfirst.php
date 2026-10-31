<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First PHP Script</title>
</head>
<body>
    <h1>PHP Variables and Arrays</h1>
    <?php
        // Step 1: Declare and initialize the array
        $marks = array(85, 85, 95);

        // Step 2: Modify the second element (index 1) to 90
        $marks[1] = 90;

        // Step 3: Calculate the average
        $sum = array_sum($marks);
        $count = count($marks);
        $ave = $sum / $count;

        // Step 4: Determine the status based on the average
        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }

        // Step 5: Display the results
        echo "<p>The average mark is: <strong>" . number_format($ave, 2) . "</strong></p>";
        echo "<p>Status: <strong>" . $status . "</strong></p>";
    ?>
</body>
</html>
