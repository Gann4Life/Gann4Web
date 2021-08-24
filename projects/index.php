<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <?php include "../templates/general-imports.php" ?>
</head>
<body class="bg-dark text-white">
    <?php include "../templates/header.php" ?>
    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center">Projects</h1>

            <!-- Tabs -->
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-games-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-games" type="button" role="tab" aria-controls="nav-games"
                    aria-selected="true">Games</button>

                    <button class="nav-link" id="nav-software-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-software" type="button" role="tab" aria-controls="nav-software"
                    aria-selected="true">Software</button>
                    
                    <button class="nav-link" id="nav-art-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-art" type="button" role="tab" aria-controls="nav-art"
                    aria-selected="false">Art</button>
                    
                    <button class="nav-link" id="nav-music-tab" data-bs-toggle="tab"
                    data-bs-target="#nav-music" type="button" role="tab" aria-controls="nav-music"
                    aria-selected="false">Music</button>
                </div>
            </nav>
            <!-- Tabs -->
            <!-- Tabs content -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active p-3" id="nav-games" role="tabpanel" 
                aria-labelledby="nav-games-tab">
                    <h2>Games</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt pariatur fuga id quae atque, quod porro et dolorum itaque accusantium aspernatur voluptates doloremque dignissimos sequi? Deserunt dicta maiores doloremque!</p>
                </div>

                <div class="tab-pane fade show p-3" id="nav-software" role="tabpanel" 
                aria-labelledby="nav-software-tab">
                    <h2>Software</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt pariatur fuga id quae atque, quod porro et dolorum itaque accusantium aspernatur voluptates doloremque dignissimos sequi? Deserunt dicta maiores doloremque!</p>
                </div>

                <div class="tab-pane fade show p-3" id="nav-art" role="tabpanel" 
                aria-labelledby="nav-art-tab">
                    <h2>Art</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt pariatur fuga id quae atque, quod porro et dolorum itaque accusantium aspernatur voluptates doloremque dignissimos sequi? Deserunt dicta maiores doloremque!</p>
                </div>

                <div class="tab-pane fade show p-3" id="nav-music" role="tabpanel" 
                aria-labelledby="nav-music-tab">
                    <h2>Music</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nesciunt pariatur fuga id quae atque, quod porro et dolorum itaque accusantium aspernatur voluptates doloremque dignissimos sequi? Deserunt dicta maiores doloremque!</p>
                </div>
            </div>
            <!-- Tabs content -->
            <!-- Tabs tutorial https://www.youtube.com/watch?v=IMM93WydBSw -->

            <!-- <p>In this section i'll be sharing projects in which i've been working / i am currently working on.</p>
            <p>The project list includes content made with Unity, C#, python, PHP and JavaScript.</p>
            <p>Generally, i create videogames using Unity engine and C#, maybe one day i'll be using Unreal Engine or Godot engine, as well as Cryengine which seems interesting.</p>
            <p>On the other side, to create software, applications or automated commands, i use C#, python, PowerShell and Batch, in which i don't have much public projects.</p>
            <p>Currently i'm learning as much as i can about HTML, CSS, JavaScript and PHP.</p>
            <p>You can contribute to some of them on my <a href="https://github.com/gann4" class="text-url">github page</a>.</p>
            <a href="../thirdym" class="nav-button">Thirdym</a>
            <a href="https://github.com/Gann4/Gann4Web" class="nav-button">Gann4Web</a>
            <a href="https://github.com/Gann4/Store-Manager" class="nav-button">LDP Store Manager</a>
            <a href="https://gann4life.gamejolt.io/distractions/" class="nav-button">Distractions</a>
            <a href="https://gann4life.itch.io/tanks-and-planes" class="nav-button">Tanks & Planes</a> -->
        </div>
    </div>
    <?php include "../templates/footer.php" ?>
</body>
</html>