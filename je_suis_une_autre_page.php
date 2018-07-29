<?php

session_start(); // On démarre la session AVANT toute chose

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Je suis une autre page</title>
    </head>

    <body>

    <p>
        Bonjour <?php echo $_SESSION['lastname'] . " " . $_SESSION['firstname']; ?> ! <br />
        Tu as <?php echo $_SESSION['age']; ?> ans x)
    </p>

    </body>

</html>