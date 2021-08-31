<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thirdym by Gann4Life</title>
    
    <?php include "../templates/general-imports.php" ?>
    <link rel="stylesheet" href="../css/thirdym.css">
</head>
<body class="bg-dark text-white">
    <?php include "../templates/header.php" ?>

    <div class="container-fluid">
        <img class="shadow-lg" style="max-width: 100vw" src="https://m.gjcdn.net/game-header/1900/261475-crop0_188_2500_813-jdracjsv-v4.webp" alt="">
        <div class="row">
            <div class="col container">
                <div class="text-center">
                    <!-- Title -->
                    <div class="my-5">
                        <h1>Thirdym</h1>
                        <p class="text-muted"> v<?php 
                            $json_file = file_get_contents("../json/data.json");
                            $jsondata = json_decode($json_file, true);
                            echo $jsondata["games"]["thirdym"]["version"];
                        ?>
                        </p>
                        
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                            <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                            <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                            </svg>    
                            <a class="text-white" href="https://gamejolt.com/games/thirdym/261475">View GameJolt site and devlogs.</a>
                        </p>
                    </div>
                    
                    <!-- Description section -->
                    <p>Thirdym is a third person shooter game with active ragdoll physics based on Eric Gurt's Plazma Burst series.<br>
                    It tries to transform the 2D visuals from Plazma Burst series into a new 3D world, to be as interactable as possible for you to experiment and play in any way you want.</p>

                    <p class="text-warning">
                        The project is still unfinished, you're not going to experience as much as i'd like to share. <br>
                        There is no campaign or story content yet, expect bugs and mistakes. <br>
                        Make sure to report bugs after you play, to help the game improve!
                    </p>
                    <!-- Download section -->

                    <a href="/download" type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                        <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                        </svg>
                        <br>
                        Download
                    </a>
                    <p class="text-danger d-lg-none">Only for Windows.</p>
                </div>
            </div>
            <div class="col-lg container text-center">
                <h1 class="my-5">Screenshots & art</h1>

                <div class="row">
                    <img style="max-width: 50%; border-radius: 5%" class="col my-2" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a69cd076-4094-4504-aa20-cf2c5e9226b7/decvmuc-ba4d5baf-bc85-4877-a2d8-d29b77c3daea.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2E2OWNkMDc2LTQwOTQtNDUwNC1hYTIwLWNmMmM1ZTkyMjZiN1wvZGVjdm11Yy1iYTRkNWJhZi1iYzg1LTQ4NzctYTJkOC1kMjliNzdjM2RhZWEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.QWf5vIjlDNjKhHn4zxEv8Bi_WUWK9l4EIt015X7C4aQ" alt="">
                    <img style="max-width: 50%; border-radius: 5%" class="col my-2" src="https://m.gjcdn.net/game-screenshot/1100/8301338-itnz6a3a-v4.webp" alt="">
                    <img style="max-width: 50%; border-radius: 5%" class="col my-2" src="https://m.gjcdn.net/game-screenshot/1100/8301334-atxbgxqe-v4.webp" alt="">
                    <img style="max-width: 50%; border-radius: 5%" class="col my-2" src="https://m.gjcdn.net/game-screenshot/1100/8301333-smjiznbn-v4.webp" alt="">

                </div>
            </div>
        </div>
    </div>

    <?php include "../templates/footer.php" ?>
</body>
</html>