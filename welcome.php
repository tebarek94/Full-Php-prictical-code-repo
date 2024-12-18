<?php
if (isset($_POST["submit"])) {
    // Sanitize inputs
    $email = htmlspecialchars($_POST["email"]);
    $title = htmlspecialchars($_POST["title"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]); // Fixed typo here

    // Validate email
    if (empty($email)) {
        echo "An email is required <br>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "You must enter a valid email address!! <br>";
        }
    }

    // Validate title (only letters and spaces allowed)
    if (empty($title)) {
        echo "A title is required <br>";
    } else {
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            echo "Title must only contain letters and spaces <br>";
        } else {
            echo "Title: " . $title . "<br>";
        }
    }

    // Validate ingredients
    if (empty($ingredients)) {
        echo "Ingredients are required <br>";
    } else {
        echo "Ingredients: " . $ingredients . "<br>";
    }
}
?>
