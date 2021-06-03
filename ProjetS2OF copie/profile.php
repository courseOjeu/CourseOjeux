<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=courseojeux', 'root', 'root');

if (isset($_GET['id_utilisateur']) AND $_GET['id_utilisateur'] > 0) {
    $getid = intval($_GET['id_utilisateur']);
    $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE id_utilisateur = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
}
?>

<html>

    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/Profile.css">
    </head>

    <body>

        <div >
            <img src="img/photo%20de%20couverture.png" alt="Photo de couverture" id="couverture">

            <div class="photo-profil">
                <img src="img/pp%20mon%20compte.png" alt="Photo de profil">
            </div>
            <div class="edit">
            <h2>Profile de <?php echo $userinfo['prenom']; ?></h2>
            </div>
        </div>

        <div class="glo">
            <div class="badges">
                <h3>Mes Badges</h3>
                <div>
                    <img src="img/Badge1.svg" alt="">
                    <img src="img/Basge2.svg" alt="">
                    <img src="img/Badge3.svg" alt="">
                    <img src="img/Badge4.svg" alt="">
                    <img src="img/Badge4.svg" alt="">
                    <img src="img/Badge4.svg" alt="">
                </div>
            </div>
            <div class="jeux">
                <h3>Mes jeux préférés</h3>

                <div>
                    <img src="img/photo%20domino.png" alt="">
                    <p>Dominos</p>
                </div>

                <div>
                    <img src="img/photo%20scrabble.png" alt="">
                    <p>Scrable</p>
                </div>

                <div>
                    <img src="img/photo%20monopoly.png" alt="">
                    <p>Monopoly</p>
                </div>

            </div>
        </div>

        <div align="center">
            <br>
            Nom = <?php echo $userinfo['nom']; ?>/


            Mail = <?php echo $userinfo['adresse_mail'];?>

            <?php
            if(isset($_SESSION['id_utilisateur']) AND $userinfo['id_utilisateur'] == $_SESSION['idutilisateur']) {
            ?>
                <br />
                <a href="../deconnexion.php">Se déconnecter</a>
                <?php
            }

            ?>
        </div>


    </body>
</html>
