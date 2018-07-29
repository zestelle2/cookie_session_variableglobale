<?php


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Je suis une autre page</title>
    </head>

    <body>

    <p>
        les informations enregistrées sont  <br> <?php echo "pseudo: " . ($_COOKIE['pseudo']) . "<br>" .
      " mdp : " .($_COOKIE['mdp']); ?> ! <br>
        
    </p>

    </body>

</html>