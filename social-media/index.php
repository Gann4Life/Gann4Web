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
            
            <!-- Tabs -->
            <div style="max-width: 50rem" class="mx-auto">
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
            </div>
            <!-- Tabs tutorial https://www.youtube.com/watch?v=IMM93WydBSw -->

            <div class="text-center my-5">
                <a type="button" class="btn btn-secondary" href="../discord"> 
                    <p>
                        <br>
                        <b>
                            Gann4Art
                        </b>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                    <path d="M6.552 6.712c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888.008-.488-.36-.888-.816-.888zm2.92 0c-.456 0-.816.4-.816.888s.368.888.816.888c.456 0 .816-.4.816-.888s-.36-.888-.816-.888z"/>
                    <path d="M13.36 0H2.64C1.736 0 1 .736 1 1.648v10.816c0 .912.736 1.648 1.64 1.648h9.072l-.424-1.48 1.024.952.968.896L15 16V1.648C15 .736 14.264 0 13.36 0zm-3.088 10.448s-.288-.344-.528-.648c1.048-.296 1.448-.952 1.448-.952-.328.216-.64.368-.92.472-.4.168-.784.28-1.16.344a5.604 5.604 0 0 1-2.072-.008 6.716 6.716 0 0 1-1.176-.344 4.688 4.688 0 0 1-.584-.272c-.024-.016-.048-.024-.072-.04-.016-.008-.024-.016-.032-.024-.144-.08-.224-.136-.224-.136s.384.64 1.4.944c-.24.304-.536.664-.536.664-1.768-.056-2.44-1.216-2.44-1.216 0-2.576 1.152-4.664 1.152-4.664 1.152-.864 2.248-.84 2.248-.84l.08.096c-1.44.416-2.104 1.048-2.104 1.048s.176-.096.472-.232c.856-.376 1.536-.48 1.816-.504.048-.008.088-.016.136-.016a6.521 6.521 0 0 1 4.024.752s-.632-.6-1.992-1.016l.112-.128s1.096-.024 2.248.84c0 0 1.152 2.088 1.152 4.664 0 0-.68 1.16-2.448 1.216z"/>
                    </svg>
                    <p>
                        Join to my discord server!
                        <br>
                    </p>
                </a>
            </div>
        </div> 
    </div>
    <?php include "../templates/footer.php"?> 
</body>
</html>