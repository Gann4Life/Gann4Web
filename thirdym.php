<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirdym Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">

</head>
<body>
    <a href="index.php" style="color: white;">Return to Home</a>
    <div class="container">
        <h2 class="title">Thirdym</h2>

        <hr>
        <h3>Description</h3>
        <p>
            'Thirdym' is a game that's being developed by Gann4Life, highly inspired on Plazma Burst Series, which was developed by Eric Gurt.
            My target is to make it feel like a Plazma Burst game, trying to keep its realtime physics simulation in a sci-fi world with a tactical shooter gameplay.
        </p>

        <hr>
        <h3>What is this website for?</h3>
        <p>This website is meant to be used for the game launcher application to notify users about new updates and download it automatically by the users permission.</p>
        
        <hr>
        <h3>Images</h3>
        <!-- <p>>Nothing available yet.</p> -->
        <div id="img_display">
            <img src="img/proxy_day.png" alt="" class="gallery-pic">
            <img src="img/proxy_fighting.png" alt="" class="gallery-pic">
            <img src="img/proxy_night.png" alt="" class="gallery-pic">
            <img src="img/proxy_shoot.png" alt="" class="gallery-pic">
        </div>
        
        <hr>
        <h3>Technical information:</h3>
        <p>Latest game version:</p>
            <p id="gameversion" href="http://www.mediafire.com/file/8jt00ygx9xc38x9/Dev+PB_180820.rar/file">0.0.2</p>
        <p>Latest launcher version:</p>
            <p id="launcherversion" href="http://www.mediafire.com/file/08f06c9ahlq9u9u/Plazma_Launcher.exe/file">dev_0.0.15b</p>
            
        <div style="height: 25px"></div>
        <a id="dl_button">Download</a>
        <p></p>
        <hr>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick" />
            <input type="hidden" name="hosted_button_id" value="QQYT6K5HQPDCA" />
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" border="0" src="https://www.paypal.com/en_AR/i/scr/pixel.gif" width="1" height="1" />
        </form>
        
        <p></p> 
        <hr>
        <div id="changelog">
            <h3>**Thirdym v0.0.2 Changelog**</h3>
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

        <hr>

        <section id="progress_board">
            <h2>Thirdym progress board</h2>
            <iframe src="https://trello.com/b/bjT15xyi.html" frameborder="0" width="1024" height="640"></iframe>
        </section>

    </div>
</body>
</html>