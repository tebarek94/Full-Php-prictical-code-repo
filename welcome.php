<?php
// Show the error in the form
$error = array('email' => '', "title" => "", "ingredients" => "");

if (isset($_POST["submit"])) {
    
    // Sanitize inputs
    $email = htmlspecialchars($_POST["email"]);
    $title = htmlspecialchars($_POST["title"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]); // Fixed typo here

    // Validate email
    if (empty($email)) {
        $error['email']= "An email is required <br>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "You must enter a valid email address!! <br>"; // Fixed the error here
        }
    }

    // Validate title (only letters and spaces allowed)
    if (empty($title)) {
        $error["title"]= "A title is required <br>";
    } else {
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $error["title"] = "Title must only contain letters and spaces <br>"; // Fixed the error here
        } else {
            echo "Title: " . $title . "<br>";
        }
    }

    // Validate ingredients
    if (empty($ingredients)) {
        $error['ingredients'] = "Ingredients are required <br>"; // Fixed the error here
    } else {
         $error['ingredients']= "Ingredients: " . $ingredients . "<br>";
    }
}
?>
