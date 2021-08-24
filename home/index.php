<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../templates/general-imports.php" ?>
    <title>Home</title>
</head>
<body class="bg-dark text-white">
    <?php include "../templates/header.php" ?>

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center">Welcome to Gann4Life.ga!</h1>
            
            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-light" href="../about">Know about me!</button>
            </div>

            <h2>Explore</h2>
            <div class="border-bottom card bg-dark" style="width: 18rem;">
                <a href="../thirdym">
                    <img src="https://m.gjcdn.net/game-thumbnail/500/261475-2fu4affy-v4.webp" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Thirdym</h5>
                    <p class="card-text">Thirdym is a third person shooter game based on Eric Gurt's Plazma Burst series.</p>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-light card-link" href="https://gamejolt.com/games/thirdym/261475">GameJolt</button>
                    <button type="button" class="btn btn-light card-link" href="../thirdym/download">Download</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/footer.php" ?>
</body>
</html>