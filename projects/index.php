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
            <h1 class="my-5 text-center">Projects</h1>

            <!-- Tabs -->
            <nav>
                <div class="nav nav-tabs bg-gradient" id="nav-tab" role="tablist">
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
            <div class="tab-content bg-secondary bg-gradient" id="nav-tabContent">
                <div class="tab-pane fade show active p-3" id="nav-games" role="tabpanel" 
                aria-labelledby="nav-games-tab">
                    <?php include "games-tab.php";?>
                </div>

                <div class="tab-pane fade show p-3" id="nav-software" role="tabpanel" 
                aria-labelledby="nav-software-tab">
                    <?php include "software-tab.php" ?>
                </div>

                <div class="tab-pane fade show p-3" id="nav-art" role="tabpanel" 
                aria-labelledby="nav-art-tab">
                    <?php include "art-tab.php" ?>
                </div>

                <div class="tab-pane fade show p-3" id="nav-music" role="tabpanel" 
                aria-labelledby="nav-music-tab">
                    <?php include "music-tab.php" ?>
                </div>
            </div>
            <!-- Tabs content -->
            <!-- Tabs tutorial https://www.youtube.com/watch?v=IMM93WydBSw -->
        </div>
    </div>
    <hr class="my-5">
    <?php include "../templates/footer.php" ?>
</body>
</html>