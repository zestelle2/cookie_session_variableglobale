
<?php

    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
        $mdp = $_POST['mdp'] ;
        
        setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true); // permet de modifier la valeur de mon cookie
        
        setcookie('mdp', $mdp, time() + 365*24*3600, null, null, false, true); 

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>modification mdp ou nom d'utilisateur</title>
    </head>

    <body>

    <p> Tu as oublié ton mot de passe ou ton pseudo. Ecrit tes modifications dans les cases : </p>
        
        <form  method="post" action="modification_cookies.php">
            <section class="container" >
            
                <label for="pseudo"><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo" name="pseudo" autofocus required>
                <br>
                <label for="mdp"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mdp" name="mdp" required>
                <br>
                <button type="submit" name="submit">Valider</button>
            </section>
         </form> 

        
        <?php 
        // modification du cookie 
        if (isset($_POST['submit'])){
            header('location: modification_cookies.php'); //un cookie à une requête HTTP de retard, la redirection permet d'eviter cette erreur
        }
       
            echo "Ton pseudo est maintenant: " . ($_COOKIE['pseudo']) . "<br>" . 
                 " Ton mdp est maintenant: " .($_COOKIE['mdp']);
        
        ?>

    

    </body>

</html>