<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $title = "Art";
        include "templates\\general-imports.php";
    ?>
</head>
<body>
    <?php
        include "templates\\header.php";
    ?>

    <?php 
        $title = "Art";
        $description = "Here i am supposed to share my art...";
        include "templates\\wip.php"; 
    ?>

    <!-- This file is supposed to use the 'digitalart' folder, for loading pictures, descriptions, or whatever -->
    <?php include "templates\\footer.php"; ?>
</body>
</html>