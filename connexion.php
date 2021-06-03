<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=courseojeux',
    'root',
    'root');

    if (isset($_POST['formconnect'])){
        $mailconnect = htmlspecialchars($_POST['mailconnect']);
        $mdpconnect = sha1($_POST['mdpconnect']);
        if (!empty($mailconnect) AND !empty($mdpconnect)){

            $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE adresse_mail = ? AND mot_de_passe = ?");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexit = $requser->rowCount();
            if ($userexit == 1){
                $userinfo = $requser->fetch();
                $_SESSION['id_utilisateur'] = $userinfo['id_utilisateur'];
                $_SESSION['prenom'] = $userinfo['prenom'];
                $_SESSION['mail'] = $userinfo['adresse_mail'];
                header("Location: profile.php?id=".$_SESSION['id_utilisateur']);
            }else{
                $erreur ="Mauvais mail ou mot de passe";
            }
        }
    else{
            $erreur = "Tous les champs doivent être complété";
        }
    }
?>

<html>

<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleconnect.css">
</head>

<body>

<header>
    <img id="logo" src="img/Logo_CourseOjeux.svg" alt="Logo CourseOJeux">
    <div class="Reseaux">
        <img src="img/Twitter.svg" alt="Logo Twitter">
        <img src="img/Instagram.svg" alt="Logo Instagram">
    </div>
</header>

<div class="Img_fond">
    <img src="img/fb_g.svg" alt="Fond" id="gauche">
    <img src="img/fb_d.svg" alt="Fond" id="droit">
</div>

<div align="center">
    <h2>Connexion</h2>
    <br>
    <form method="post" action="">
        <table>

            <tr>

                <td>
                    <input type="email" placeholder="Votre Email" id="mailconnect" name="mailconnect" value="<?php if (isset($mailconnect)){ echo $mailconnect;}?>">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" placeholder="Votre mot de passe" id="mdpconnect" name="mdpconnect">
                </td>
            </tr>

            <tr>
                <td align="center">
                    <br>
                    <input type="submit" id="connect" name="formconnect" value="Se connecter">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($erreur)){
        echo $erreur;
    }
    ?>
</div>


</body>
</html>
