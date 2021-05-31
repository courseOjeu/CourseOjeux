<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header("Access-Control-Allow-Origin: *");
    require_once 'cnx.php';
    require_once 'classes/class.Jeu.php';

    $pdo = new PDO(
        'mysql:host=localhost;dbname=courseojeux',
        'root',
        'root'
    );

    $sql = "SELECT * 
                    FROM jeu ORDER BY NOM_JEU ";
    $requete = $pdo ->prepare($sql);
    $listeJeu = array();
    if($requete->execute()){
        while ($donnees = $requete->fetch()) {
            $jeu = new Jeu(
                $donnees['id_jeu'],
                $donnees['libelle'],
                $donnees['nom_jeu'],
                $host."img/" .$donnees ['image_jeu'],
                $donnees['date_jeu'],
                $donnees['partage'],
                $donnees['lien_affiliation'],
            );

            $categorie = new Categorie(
                $donnees['id_categorie'],
                $donnees['titre_categorie'],
                $donnees['libelle'],
            );
            $jeu->setLesCategories($categorie);

            $listeJeu[] = $jeu;
        }

    }
    echo json_encode($listeJeu->jsonSerialize());
    exit();



