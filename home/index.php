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
            <h1 class="my-5 mx-5 text-center">Welcome to Gann4Life.ga!</h1>
            

            <h2 class="text-muted text-center">Explore</h2>
            <hr>

            <div class="row">
                <!-- Gann4Art community -->
                <div class="col-lg-4 my-5">
                    <div class="shadow bg-dark card border-bottom mx-auto" style="width: 18rem;">
                        <img src="../img/G4Abgfill.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Gann4Art</h5>
                            <p class="card-text text-muted">Discord Community</p>
                            <hr>
                            <p class="card-text">Do you have content to share? Come and show us your best works!</p>
                            <a href="../discord" class="btn btn-primary">Join Gann4Art!</a>
                        </div>
                    </div>
                </div>
                <!-- Thirdym -->
                <div class="col-lg-4 my-5">
                    <div class="shadow bg-dark card border-top-0 border-end-0 border-start-0 border-danger mx-auto" style="width: 18rem;">
                        <img src="https://m.gjcdn.net/game-screenshot/300/8301331-s6iaph3g-v4.webp" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Thirdym</h5>
                            <p class="card-text text-muted">Game</p>
                            <hr>
                            <p class="card-text">Thirdym is a third person shooter game with active ragdoll physics based on Eric Gurt's Plazma Burst series.</p>
                            <a href="../thirdym/" class="btn btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <!-- Toribash art -->
                <div class="col-lg-4 my-5">
                    <div class="shadow bg-dark card border-bottom mx-auto" style="width: 18rem;">
                        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a69cd076-4094-4504-aa20-cf2c5e9226b7/ded1k11-3122103e-962f-4eb8-8a18-5b486bf5cde6.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2E2OWNkMDc2LTQwOTQtNDUwNC1hYTIwLWNmMmM1ZTkyMjZiN1wvZGVkMWsxMS0zMTIyMTAzZS05NjJmLTRlYjgtOGExOC01YjQ4NmJmNWNkZTYucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Ex5Gt03K0HjrnkZFPVFlgRmfmlQyUaND4sLCZZyZLJw" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Toribash</h5>
                            <p class="card-title text-muted">Commisions</p>
                            <hr>
                            <p class="card-text">I make toribash textures, only TC or USD commisions.</p>
                            <a href="../toribash" class="btn btn-primary">See content</a>
                        </div>
                    </div>    
                </div>
            </div>

            <p class="text-muted text-center" id="home_viewcount">0</p>
            <script src="../js/home_viewcount.js"></script>

        </div>
    </div>

    <?php include "../templates/footer.php" ?>
</body>
</html>