<?php
    //echo "<pre>";
    //print_r($_POST);
    //echo "</pre>";
    $user_email = $_POST["email"];
    $user_subject = $_POST["subject"];
    $user_message = $_POST["message"];

    $owner = "santiago_ariel_mansilla";
    $owner .= "@hotmail.com";

    $owner_body = "";
    $owner_body .= "From: $user_email\r\n";
    $owner_body .= "$user_message\r\n";

    mail($owner, $user_subject, $owner_body);

    $user_body = "";
    $user_body .= "An email has been sent to $owner!\n";
    $user_body .= "All you have to do is wait for a direct answer. :)\r\n";
    $user_body .= "Message preview: \n$owner_body";

    mail($user_email, "Gann4Life.ga: Email sent!", $user_body);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email sent</title>
    <?php include "templates/general-imports.php" ?>
</head>
<body>
    <?php include "templates/header.php" ?>
    <div class="content centered">
        <h1 class="content-title">Email sent!</h1>
        <p>Your email was sent!</p>
        <p>If that's the case, check your unwanted messages inbox, a message should appear, confirming said action.</p>
    </div>
    <?php include "templates/footer.php" ?>
</body>
</html>