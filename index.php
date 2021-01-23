<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gann4Life: Home</title>
</head>
<body>
    <h1>Welcome.</h1>

    <p>Site list:</p>
    <ul>
        <li>
            <a href="thirdym.php">Thirdym outdated site</a>
        </li>
        <li>
            <a href="digitalart.php">Art page</a>
        </li>
    </ul>

    <p>This website is currently in a WIP (Work in progress) status.</p>

    <p>I have some data around too...</p>
    <?php 
        echo file_get_contents("data.json");
    ?>
</body>
</html>