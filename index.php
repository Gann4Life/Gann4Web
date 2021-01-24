<?php 
    $json_file = file_get_contents("data.json");
    $json_data = json_decode($json_file, true);
    $site_data = $json_data["websites"]["gann4life"];
    $site_data_maintenance = $site_data["maintenance"];

    if ($site_data_maintenance == "true"){
        header("Location: /maintenance.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php include "templates/general-imports.php" ?>

    <title>Home</title>
</head>
<body>
    <?php
        include "templates/header.php";
    ?>

    <div class="content centered">
        <h1>Welcome to my small website, i'm Gann4Life. :)</h1>

        <p>I'm Gann4Life, and i love making art, music and programming.</p>
        <p>I was born on September 20, 2002.</p>
        <p>To be honest, i don't have anything to talk about, but i have a lot to show!</p>


    </div>

    <?php 
        include "templates/footer.php";
    ?>
</body>
</html>