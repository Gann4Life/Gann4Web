<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../templates/general-imports.php" ?>
    <title>Social Media</title>
</head>
<body class="bg-dark text-white">

    <?php include "../templates/header.php"?> 
    <div class="container-fluid">
        <div class="container">
            <h1 class="my-5 text-center">Social Media</h1>
                <div class="row">
                    <div class="col">
                        <!-- Tabs -->
                        <nav>
                            <div class="nav nav-tabs bg-gradient" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-development-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-development" type="button" role="tab" aria-controls="nav-development"
                                aria-selected="true">Development</button>
                                
                                <button class="nav-link" id="nav-art-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-art" type="button" role="tab" aria-controls="nav-art"
                                aria-selected="false">Art</button>

                                <button class="nav-link" id="nav-media-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-media" type="button" role="tab" aria-controls="nav-media"
                                aria-selected="true">Media</button>
                                
                                <button class="nav-link" id="nav-gaming-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-gaming" type="button" role="tab" aria-controls="nav-gaming"
                                aria-selected="false">Gaming</button>
                            </div>
                        </nav>
                        <!-- Tabs -->
                        <!-- Tabs content -->
                        <div class="shadow tab-content bg-dark border-bottom" id="nav-tabContent">
                            <div class="tab-pane fade show active p-3" id="nav-development" role="tabpanel" 
                            aria-labelledby="nav-development-tab">
                                <?php include "development-tab.php";?>
                            </div>
            
                            <div class="tab-pane fade show p-3" id="nav-art" role="tabpanel" 
                            aria-labelledby="nav-art-tab">
                                <?php include "art-tab.php" ?>
                            </div>
            
                            <div class="tab-pane fade show p-3" id="nav-media" role="tabpanel" 
                            aria-labelledby="nav-media-tab">
                                <?php include "media-tab.php" ?>
                            </div>
            
                            <div class="tab-pane fade show p-3" id="nav-gaming" role="tabpanel" 
                            aria-labelledby="nav-gaming-tab">
                                <?php include "gaming-tab.php" ?>
                            </div>
                        </div>
                        <!-- Tabs content -->
                        <!-- Tabs tutorial https://www.youtube.com/watch?v=IMM93WydBSw -->
                    </div>
                    <div class="d-flex justify-content-end col">
                        <iframe class="shadow" src="https://discord.com/widget?id=521772451504455680&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
            </div>
        </div> 
    </div>
    <?php include "../templates/footer.php"?> 
</body>
</html>