<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
require_once 'cnx.php';
require_once 'classes/class.Categorie.php';

$pdo = new PDO(
    'mysql:host=localhost;dbname=courseojeux',
    'root',
    'root'
);

$sql = "SELECT * 
                    FROM Categorie ORDER BY NAME
                    WHERE ";
$requete = $pdo ->prepare($sql);
$listeCategorie = array();
if($requete->execute()){
    while ($donnees = $requete->fetch()) {
        $categorie = new Categorie(
            $donnees['ID_CATEGORIE'],
            $donnees['TITRE_CATEGORIE'],
            $donnees['NOM_DE_JEU'],
        );
        $listeCategorie[] = $categorie;
    }

}
echo json_encode($listeCategorie->jsonSerialize());
exit();



