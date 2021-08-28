<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "templates/general-imports.php" ?>

    <title>Unknown page</title>
</head>
<body class="bg-dark text-white">
    <?php include "templates/header.php" ?>

    <div class="container-fluid">
        <div class="container text-center">
            <h1 class="my-5 text-danger">Error 404: Page not found</h1>
            <p>This page doesn't exists! <br>
            Consider to contact me and report this issue if you're not able to find what you're looking for :)</p>
            <br>

            <a class="btn btn-primary my-5" href="../home">Go back</a>
        </div>
    </div>

    <?php include "templates/footer.php" ?>
</body>
</html>