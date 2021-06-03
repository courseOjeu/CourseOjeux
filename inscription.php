<?php
$bdd = new PDO('mysql:host=localhost;dbname=courseojeux',
    'root',
    'root');

if (isset($_POST['forminscription']))
{
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    if (!empty($_POST['prenom']) AND
        !empty($_POST['nom']) AND
        !empty($_POST['mail']) AND
        !empty($_POST['mdp']) AND
        !empty($_POST['mdp2']))
    {

        if($mdp == $mdp2)
        {
            $insertmbr = $bdd->prepare
            ("INSERT INTO `utilisateur` (`prenom`, `mot_de_passe`, `adresse_mail`, `nom`) VALUES (?, ?, ?, ?)");
            $insertmbr->execute(array($prenom, $mdp, $mail, $nom));
            $erreur = "Votre compte a bien été créé.";
        }
        else
        {
            $erreur = "Vos mots de passes ne correspondent pas.";
        }

    }
    else
    {
        $erreur = "Tous les champs doivent être complétés.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Inscription</title>
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
    <img src="img/fj_g.svg" alt="Fond" id="gauche">
    <img src="img/fj_d.svg" alt="Fond" id="droit">
</div>

<div align="center">
    <h2>S'inscrire</h2>
    <br>
    <form method="post" action="">
        <table>
            <tr>

                <td>
                    <input type="text" placeholder="Prenom" id="prenom" name="prenom" value="<?php if (isset($prenom)){ echo $prenom;}?>">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" placeholder="Nom" id="nom" name="nom" value="<?php if (isset($nom)){ echo $nom;}?>">
                </td>
            </tr>

            <tr>

                <td>
                    <input type="email" placeholder="Adresse mail" id="mail" name="mail" value="<?php if (isset($mail)){ echo $mail;}?>">
                </td>
            </tr>

            <tr>

                <td>
                    <input type="password" placeholder="Mot de passe" id="mdp" name="mdp">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" placeholder="Confirmez le mot de passe" id="mdp2" name="mdp2">
                </td>
            </tr>

            <tr>
                <td align="center">
                    <br>
                    <input type="submit" id="forminscription" name="forminscription" value="S'inscrire">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($erreur)){
        echo '<font face="Josefin Sans" color="#153053">' .$erreur."</font>";
    }
    ?>
</div>



</body>
</html>
