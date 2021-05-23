<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirdym by Gann4Life</title>
    <?php include "../templates/general-imports.php" ?>
    <style>
        body:before{
            content: '';
            position: fixed;
            width: 100vw;
            height: 100vh;
            background-image: url("img/thirdym-bg.png");
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
    <?php include "../templates/header.php" ?>
    <div class="content centered" id="thirdym-site">
        <h1 class="content-title">Thirdym</h1>
        <hr>
        <div class="art-content">
            <h1>Media</h1>
            <break>
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a69cd076-4094-4504-aa20-cf2c5e9226b7/decvmuc-ba4d5baf-bc85-4877-a2d8-d29b77c3daea.png/v1/fill/w_1192,h_670,q_70,strp/proxy__from_plazma_burst_2___fanart_by_gann4life_decvmuc-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD05MDAiLCJwYXRoIjoiXC9mXC9hNjljZDA3Ni00MDk0LTQ1MDQtYWEyMC1jZjJjNWU5MjI2YjdcL2RlY3ZtdWMtYmE0ZDViYWYtYmM4NS00ODc3LWEyZDgtZDI5Yjc3YzNkYWVhLnBuZyIsIndpZHRoIjoiPD0xNjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.QzhCLQHUJM2gFUasBjPe9IOnPUP5U4nVN3ci5QAG4_w" alt = "" class="art-item">
            <img src="img/proxy_day.png" alt="" class="art-item">
            <img src="img/proxy_fighting.png" alt="" class="art-item">
            <img src="img/proxy_night.png" alt="" class="art-item">
            <img src="img/proxy_shoot.png" alt="" class="art-item">
            <iframe class="art-item" src="https://www.youtube.com/embed/Jp-Gm4IE3y8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class="art-item" src="https://www.youtube.com/embed/uw5LL7QdcYU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <hr>
        <!-- Description -->
        <h1>Highly inspired on Plazma Burst series, by Eric Gurt.</h1>
        <p>You can follow this game <a class="text-url" href="https://gamejolt.com/games/thirdym/261475">here</a> to recieve notifications when a new devlog is available or any other news for you :)</p>
        <h2>What is Thirdym?</h2>
        <p>Thirdym is a third person shooter that uses active ragdolls, which leads to content that's less serious than what it is supposed to be, but has more interaction with the enviroment.</p>
        <p>It tries to transform the 2D visuals from Plazma Burst series into a new 3D world and to be as interactable as possible for you to experiment and play in any way you want.</p>
        <hr>
        <h2>Get early access</h2>
        <p>As the project is unfinished and is barely 5% done (total), you are going to test the mechanics only, there is no campaign/story content yet, expect bugs and mistakes, that's the point of early access: report errors, glitches and mistakes to help the game to improve!</p>
        <p>You can get <i>early access</i> by joining to my discord server and requesting a key to the game developer! <a class="text-url" href="social-media">Find server here</a></p>
        <hr>
        <div id="changelog">
            <?php 
                echo "<p>Current available game version: ";
                $json_file = file_get_contents("../json/data.json");
                $jsondata = json_decode($json_file, true);
                echo $jsondata["games"]["thirdym"]["version"];
                echo "</p>";
            ?>
            <h2>Development activity for the next version</h2>
            <h3>Added</h3>
            <ul>
                <li><p>Training basics scene.</p></li>
                <li><p>Character selection scene.</p></li>
                <li><p>Audio configuration screen.</p></li>
                <li><p>Graphics configuration screen.</p></li>
                <li><p>Cheats screen.</p></li>
                <li><p>Crosshair feedback.</p></li>
                <li><p>Notification system.</p></li>
                <li><p>Underwater camera effects.</p></li>
                <li><p>Underwater audio filter.</p></li>
                <li><p>Controller support.</p></li>
                <li><p>Prototype explosive barrels.</p></li>
                <li><p>Prototype zipline mechanic.</p></li>
                <li><p>Antigravitator AG-51.</p></li>
                <li><p>Noir Lime model.</p></li>
                <li><p>NPC Healthbars.</p></li>
                <li><p>Water & acid particles.</p></li>
                <li><p>Damage indicators.</p></li>
                <li><p>Cinemachine cameras system for main menu.</p></li>
            </ul>
            <h3>Updated</h3>
            <ul>
                <li><p>LootCrates model.</p></li>
                <li><p>Blood particles.</p></li>
                <li><p>Aiming: player should try to aim directly towards the center of the screen.</p></li>
                <li><p>Player input: Input can't be recieved while ingame menu is active.</p></li>
                <li><p>NPCs will not react when ingame menu is active.</p></li>
                <li><p>Load and save system: a json file can be used to view saved data, or modify it. (Modifying it may lead to unexpected errors)</p></li>
                <li><p>Swimming behaviour.</p></li>
                <li><p>You can raise your arms when grabbing objects.</p></li>
            </ul>
            <h3>Fixed</h3>
            <ul>
                <li><p>Blades doesn't hurt yourself anymore.</p></li>
                <li><p>Right arm position when holding swords and aiming at the same time.</p></li>
                <li><p>Overloading slow motion (AKA Skill bar) bar.</p></li>
                <li><p>Guns now display properly in the HUD.</p></li>
            </ul>
            <h3>Removed</h3>
            <ul>
                <li><p>Low poly base mesh.</p></li>
                <li><p>Overhead health particle indicator.</p></li>
                <li><p>Character lost of balance on gunshots and hard collisions.</p></li>
                <li><p>PlayerPrefs save and load system. Replaced with json.</p></li>
            </ul>
            <h3>Work in progress</h3>
            <ul>
                <li><p>In-depth graphics configuration.</p></li>
                <li><p>Sandbox map.</p></li>
                <li><p>Training maps.</p></li>
                <li><p>Teleporters.</p></li>
                <li><p>Cinemachine as third person cameras.</p></li>
                <li><p>Proxy model.</p></li>
            </ul>
        </div>
    </div>
    <?php include "../templates/footer.php" ?>
</body>
</html>