<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tebarek pizza</title>
</head>
<body>
    <?php include("templates/Header.php") ?>
    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="welcome.php" method="POST">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email">
             <label for="title">Pizza title</label>
            <input type="text" name="title" id="title">
             <label for="ingredients">Ingridents (Comma separated)</label>
            <input type="text" name="ingredients" id="ingredients">
            <div class="center">
                <input type="submit" name="submit" value="submit" class="btn brand ">
            </div>

        </form>
    </section>
    <?php include("templates/Footer.php") ?>
</body>
</html>