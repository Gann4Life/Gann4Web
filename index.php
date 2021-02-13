<?php 
    $json_file = file_get_contents("json/data.json");
    $json_data = json_decode($json_file, true);
    $site_data = $json_data["websites"]["gann4life"];
    $site_data_maintenance = $site_data["maintenance"];

    if ($site_data_maintenance == "true"){
        header("Location: sites/maintenance.php");
    } else {
        header("Location: sites/home.php");
    }
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting...</title>
</head>
<body>
    <p>Checking for maintenance...</p>
    <p>If you keep seeing this, something went wrong.</p>
</body>
</html>