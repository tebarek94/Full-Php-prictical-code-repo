<?php 
// Connect to the database
$con = mysqli_connect("localhost", "tebarek", "Mahi_1993", "tebarek_pizza");
if(!$con){
    echo "Database connection error: " . mysqli_connect_error();
    exit();  // Added exit() to stop execution if the connection fails
}

// Write a query for all pizzas
$sql = "SELECT id, title, ingredients FROM pizzas ORDER BY created_at";
$result = mysqli_query($con, $sql);

// Fetch the result rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Close the database connection after fetching the results
mysqli_close($con);
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
    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">
           <?php 
           foreach($pizzas as $pizza) { ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>
    <?php include("templates/Footer.php") ?>
</body>
</html>
