<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: connexion.php");
?>
Debut de profile :
<?php

session_start();

$bdd = new PDO('mysql:host=localhost:3306;dbname=courseojeux', 'root', 'root');

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
</head>

<body>

<header>

</header>

<div>
    <img src="Images/photo%20de%20couverture.png" alt="Photo de couverture">

    <div class="photo-profil">
        <img src="Images/pp%20mon%20compte.png" alt="Photo de profil">
    </div>
    <h2>Marion Dubois</h2>
</div>

<div align="center">
    <h2>Profile de <?php echo $userinfo['prenom']?></h2>
    <br>
    Nom = <?php echo $userinfo['nom']?>
    <br>
    Mail = <?php echo $userinfo['adresse_mail']?>

    <?php
    if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
        ?>
        <br />
        <a href="deconnexion.php">Se déconnecter</a>
        <?php
    }
    ?>
</div>


</body>
</html>