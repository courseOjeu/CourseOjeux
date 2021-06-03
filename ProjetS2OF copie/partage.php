<?php
    $bdd = new PDO('mysql:host=localhost;dbname=courseojeux', 'root', 'root');

    if (isset($_POST['forminscription'])){

        $jeu = htmlspecialchars($_POST['jeu']);
        $categorie = htmlspecialchars($_POST['categorie']);
        

        if(!empty($_POST['jeu']) AND !empty($_POST['categorie'])) {

            $reqjeu = $bdd->prepare("SELECT * FROM ajouter WHERE jeu = ?" );
            $reqjeu->execute(array($jeu));
            $jeuexist = $reqjeu->rowCount();
            if ($jeuexist == 0) {

                $insertuser = $bdd->prepare("INSERT INTO ajouter(jeu, categorie) VALUES(?, ?)");
                $insertuser->execute(array($jeu, $categorie));
                $erreur = "Votre jeu à bien été enregistrer";
                //header('Location: index.html');//

            }else {$erreur = "Le jeu à déja été enregistrer";}

        }else {$erreur = "Tous les champs doivent être complété !";}

    }else {$erreur = "Quelque chose ne va pas";}

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partage</title>
    <link rel="stylesheet" href="css/partage.css">
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body>
<main class="partage">
                <h2>Partagez votre jeu</h2>

    <div class="champ_partage">
        <form method="post" action="">
            <table>
                <tr>

                    <td>
                        <input type="text" placeholder="Votre jeu" id="jeu" name="jeu" value="<?php if (isset($jeu)){ echo $jeu;}?>">
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="text" placeholder="Sa catégorie" id="categorie" name="categorie" value="<?php if (isset($categorie)){ echo $categorie;}?>">
                    </td>
                </tr>

                <tr>
                    <td align="center">
                        <br>
                        <input type="submit" id="forminscription" name="forminscription" value="Ajouter">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        </div>
<p>
    <?php
        if (isset($erreur)){
            echo $erreur;
        }
        ?>
    </p>
            </main>

</body>
</html>