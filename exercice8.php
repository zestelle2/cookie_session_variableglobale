<? 
// On démarre la session AVANT d'écrire du code HTML
session_start();

// variables de session dans $_SESSION pour l'exercice 2
$_SESSION['lastname'] = 'LaTulipe';
$_SESSION['firstname'] = 'Estelle';
$_SESSION['age'] = 17;

// enregistrement du cookies pour l'exercice 3 (AVANT d'écrire du code HTML)
if(isset($_POST['pseudo'])) {
    setcookie('pseudo', $_POST['pseudo'], time()+365*24*3600 );
    setcookie('mdp', $_POST['mdp'], time()+365*24*3600 );
}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <title>exercice 8</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">

        body{
            padding : 20px;
        }
        
    </style>
    </head>
    <body>

<?php
/* fonction pour la mise en page entre les exercices */
function saut_entre_exercice(){
    echo '<br/ >';
    echo '<br/ >';
    echo '<hr/ >';
}; 

saut_entre_exercice();

//Exercice 1
/*Faire une page HTML permettant de donner à l'utilisateur :
    son User Agent (navigator.userAgent&#160;; en JS)
    son adresse ip
    le nom du serveur */

// adresse ip
 echo " l'adresse ip est : " .$_SERVER['REMOTE_ADDR']; 

 // son User Agent :
echo  "<br>" . " user Agent : " .$_SERVER['HTTP_USER_AGENT'] . "\n\n";
// Gecko est un Logiciel de rendu pour afficher les pages web.

// le nom de domaine du serveur
echo " <br>" .
     " le nom de domaine du serveur est : " . $_SERVER['HTTP_HOST'];
// le nom local du serveur :
echo " <br> ".
    "le nom local du serveur est :  " . $_SERVER['SERVER_NAME'];
saut_entre_exercice();

//Exercice 2
/*Sur la page index, faire un liens vers une autre page.
Passer d'une page à l'autre le contenu des variables lastname, firstname 
et age grâce aux sessions. Ces variables auront été définies
directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page. */
?>
    <p>
        <u> liens vers une autre page : </u>
        <a href="je_suis_une_autre_page.php">Lien vers je_suis_une_autre_page.php</a> 

<?php
saut_entre_exercice();
//Exercice 3
/*Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
 A la validation du formulaire, stocker les informations dans un cookie.
*/
?>
    <form action="exercice8.php" method="post">
        <section class="container" >
            <label for="pseudo"><b>Pseudo</b></label>
            <input type="text" placeholder="Entrez votre pseudo" name="pseudo" autofocus required>

            <label for="mdp"><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrez votre mdp" name="mdp" required>

            <button type="submit">Login</button>
        </section>
    </form> 

<?php
saut_entre_exercice();

//Exercice 4
/*Faire une page qui va récupérer les informations du cookie créé
à l'exercice 3 et qui les affiches. */
?>
    <p>
        <u> liens pour voir les cookies enregistrées cookies: </u>
        <a href="page_cookies.php"> page_cookies.php</a> 
    </body>
<?php 
saut_entre_exercice();
//Exercice 5
/*Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. */
?>
    <p>
        <u> modifier les cookies: </u>
        <a href="modification_cookies.php"> modification_cookies.php</a> 
    </body>
</html>