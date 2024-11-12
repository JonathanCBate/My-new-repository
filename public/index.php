<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's birth year from the form input
    $birthYear = $_POST['birthYear'];

    // Validate that the input is a number and is in a reasonable range
    if (is_numeric($birthYear) && $birthYear > 1900 && $birthYear <= date("Y")) {
        // Calculate the age
        $currentYear = date("Y");
        $age = $currentYear - $birthYear;
        $message = "You are approximately $age years old.";
    } else {
        // Error message if input is invalid
        $message = "Please enter a valid birth year.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <h1>Age Calculator</h1>

    <form method="POST" action="">
        <label for="birthYear">Enter your birth year:</label>
        <input type="text" id="birthYear" name="birthYear" required>
        <button type="submit">Calculate Age</button>
    </form>

    <?php
    // Display the message if it is set
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
