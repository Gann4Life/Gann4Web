<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../templates/general-imports.php" ?>
    <title>Toribash art</title>

    <!-- dA Gallery style -->
    <link rel="stylesheet" type="text/css" href="../css/deviantART-gallery.min.css"/>
    <!-- dA Gallery style -->
</head>
<body style="background-color: #552525" class="text-white">
    <?php include "../templates/header.php" ?>

    <div class="container-fluid">
        <div class="my-5 text-center">
            <h1>Toribash art</h1>
            <p class="text-muted">by Gann4Life</p>
        </div>
        <div class="container d-flex justify-content-center">
            
            <!-- dA Gallery -->
            <div style="height: 50rem; width: 50rem;">
                <div id="deviantART-gallery"></div>
            </div>
            <script src="../js/deviantART-gallery-plugin.min.js"></script>
            <script>
                deviantARTGalleryPlugin('gann4life', '76862697', '4:3');
            </script>
            <!-- dA Gallery -->

            <hr>
            <!-- Credit -->
        </div>
        <a class="text-decoration-none" href="https://github.com/jamesl1001/deviantART-Gallery-Plugin">
            <p class="text-center text-muted">
                deviantART-gallery-plugin by jamesl1001
            </p>
        </a>
    </div>

    <?php include "../templates/footer.php" ?>
</body>
</html>