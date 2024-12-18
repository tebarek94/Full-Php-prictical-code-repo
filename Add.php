<?php 
// Initialize the error array
$error = array('email' => '', 'title' => '', 'ingredients' => '');

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Sanitize inputs
    $email = htmlspecialchars($_POST["email"]);
    $title = htmlspecialchars($_POST["title"]);
    $ingredients = htmlspecialchars($_POST["ingredients"]); 

    // Validate email
    if (empty($email)) {
        $error['email'] = "An email is required <br>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "You must enter a valid email address!! <br>";
        }
    }

    // Validate title (only letters and spaces allowed)
    if (empty($title)) {
        $error['title'] = "A title is required <br>";
    } else {
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $error['title'] = "Title must only contain letters and spaces <br>";
        }
    }

    // Validate ingredients
    if (empty($ingredients)) {
        $error['ingredients'] = "Ingredients are required <br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebarek Pizza</title>
</head>
<body>
    <?php include("templates/Header.php") ?>
    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="Add.php" method="POST">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email">
            <div class="red-text"><?php echo $error['email']?></div>
            
            <label for="title">Pizza Title</label>
            <input type="text" name="title" id="title">
            <div class="red-text"><?php echo $error["title"] ?></div>
            
            <label for="ingredients">Ingredients (Comma separated)</label>
            <input type="text" name="ingredients" id="ingredients">
            <div class="red-text"><?php echo $error["ingredients"]?></div>
            
            <div class="center">
                <input type="submit" name="submit" value="Submit" class="btn brand">
            </div>

        </form>
    </section>
    <?php include("templates/Footer.php") ?>
</body>
</html>
