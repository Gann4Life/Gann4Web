<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <?php include "templates/general-imports.php" ?>
    <title>Contact</title>
</head>
<body>
    <?php include "templates/header.php"; ?>
    <div class="content centered">
        <h1 class="content-title">Contact</h1>
        <p>If for some reason you want to send me a message, you can do it right here.</p>
        <p>Just make sure to provide your email, otherwise i will not be able to contact you.</p>
        <form action="email-sent.php" method="POST">
            <input type="email" name="email" id="email" placeholder="youremail@example.com" required>
            <input type="text" name="subject" id="subject" placeholder="Subject">
            <textarea autofocus="true" name="message" id="message" placeholder="Please, type your message here."></textarea>
            <input type="submit" value="Send">
        </form>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>