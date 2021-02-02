<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirdym by Gann4Life</title>
    <?php $cssfolder="../css"; include "templates/general-imports.php" ?>

    <style>
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("../img/projects/thirdym/thirdym-bg.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-position: 100% 100%;
            background-size: cover;
            filter: blur(20px);
            z-index: -9;
        }
    </style>
</head>
<body>
    <?php include "templates/header.php" ?>
    <div class="content centered" id="thirdym-site">
        <h1 class="content-title">Thirdym</h1>
        <h2>Images not available yet.</h2>
        <div class="art-content">
            <img src="../img/projects/thirdym/proxy-day" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy-fighting" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy-night" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy-shoot" alt="" class="art-item">
        </div>
        <hr>
        <!-- Description -->
        <p>'Thirdym' is a game that's being developed by Gann4Life, highly inspired on Plazma Burst Series, which was developed by Eric Gurt.</p>
        <p>My target is to make it feel like a Plazma Burst game, trying to keep its realtime physics simulation in a sci-fi world with a tactical shooter gameplay.</p>
        <hr>
        <div id="changelog">
            <h2>**Thirdym v0.0.2 Changelog**</h2>
            <p>**Updated** Game engine to Unity 2020.1.15f1</p>
            <p>**Updated** mobile vehicle functions</p>
            <p>**Updated** mobile vehicle cameras</p>
            <p>**Updated** Hound Walker cameras</p>
            <p>**Updated** Hound Walker animations</p>
            <p>**Updating** sandbox map</p>
            <p>**Updated** Pain SFX has a random chance to be played instead of always being played</p>
            <p>**Adding** Level 1</p>
            <p>**Added** GameJolt API</p>
            <p>**Added** update checker screen</p>
            <p>**Added** a secret</p>
            <p>**Added** acid & water behaviours</p>
            <p>**Added** acid & water shaders</p>
            <p>**Fixed** exaggerated boost jump (Kind of)</p>
            <p>**Fixed** movable objects not playing sounds</p>
            <p>**Fixed** switch buttons not playing sounds</p>
        </div>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>