<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirdym by Gann4Life</title>
    <?php include "templates/general-imports.php" ?>
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
        <hr>
        <div class="art-content">
            <h1>Media</h1>
            <break>
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a69cd076-4094-4504-aa20-cf2c5e9226b7/decvmuc-ba4d5baf-bc85-4877-a2d8-d29b77c3daea.png/v1/fill/w_1192,h_670,q_70,strp/proxy__from_plazma_burst_2___fanart_by_gann4life_decvmuc-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD05MDAiLCJwYXRoIjoiXC9mXC9hNjljZDA3Ni00MDk0LTQ1MDQtYWEyMC1jZjJjNWU5MjI2YjdcL2RlY3ZtdWMtYmE0ZDViYWYtYmM4NS00ODc3LWEyZDgtZDI5Yjc3YzNkYWVhLnBuZyIsIndpZHRoIjoiPD0xNjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.QzhCLQHUJM2gFUasBjPe9IOnPUP5U4nVN3ci5QAG4_w" alt = "" class="art-item">
            <img src="../img/projects/thirdym/proxy_day.png" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy_fighting.png" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy_night.png" alt="" class="art-item">
            <img src="../img/projects/thirdym/proxy_shoot.png" alt="" class="art-item">
            <iframe class="art-item" src="https://www.youtube.com/embed/Jp-Gm4IE3y8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="art-item" src="https://www.youtube.com/embed/uw5LL7QdcYU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr>
        <!-- Description -->
        <h1>Highly inspired on Plazma Burst series, by Eric Gurt.</h1>
        <p>The project development is stopped by now. But it will continue after some time, as a single game dev i need a lot of time to maintain myself and everything i create.</p>
        <p>You can follow this game <a class="text-url" href="https://gamejolt.com/games/thirdym/261475">here</a> to recieve notifications when a new devlog is available or any other news for you :)</p>
        <h2>What is Thirdym?</h2>
        <p>Thirdym is a third person shooter that uses active ragdolls, which leads to content that's less serious than what it is supposed to be, but has more interaction with the enviroment.</p>
        <p>It tries to transform the 2D visuals from Plazma Burst series into a new 3D world and to be as interactable as possible for you to experiment and play in any way you want.</p>
        <hr>
        <h2>Get early access</h2>
        <p><b>Big warning</b>: As the project is unfinished and is barely 5% done (total), you are going to test the mechanics only, there is no campaign/story content yet, expect bugs and mistakes, that's the point of early access: report errors, glitches and mistakes to help the game to improve!</p>
        <p>You can get <i>early access</i> by joining to my discord server and requesting a key to the game developer! <a class="text-url" href="social-media.php">Find server here</a></p>
        <hr>
        <div id="changelog">
            <?php 
                echo "<p>Current available game version: ";
                $json_file = file_get_contents("../json/data.json");
                $jsondata = json_decode($json_file, true);
                echo $jsondata["games"]["thirdym"]["version"];
                echo "</p>";
            ?>
            <h2>Development activity for Thirdym v0.X.X-alpha</h2>
            <h3>Added</h3>
            <ul>
                <li><p>-</p></li>
            </ul>
            <h3>Updated</h3>
            <ul>
                <li><p>-</p></li>
            </ul>
            <h3>Fixed</h3>
            <ul>
                <li><p>-</p></li>
            </ul>
            <h3>Removed</h3>
            <ul>
                <li><p>-</p></li>
            </ul>
            <h3>Work in progress</h3>
            <ul>
                <li><p>Character selection.</p></li>
                <li><p>Main menu.</p></li>
                <li><p>Sandbox map.</p></li>
                <li><p>Training maps.</p></li>
            </ul>
        </div>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>