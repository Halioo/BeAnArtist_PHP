<?php

session_start();
if (!isset($_SESSION["username"])) {
    header('Location: /login');
    exit();
}

$numConcours = $_GET['num'];

require_once '../database/db_function.php';

$connexion = db_connect();

// Récupération de tous les concours
$ma_requete = "SELECT C.refPresident, C.description, C.etat, C.dateDebut, C.dateFin FROM Concours C
               WHERE C.numConcours = '$numConcours';";
if ($result = $connexion -> query($maRequete)) {
    $resultat = $result -> fetch_assoc();
    $result -> free();
} else {
    echo "Le concours n'existe pas...";
}

// TODO Récupération de tous les membres du Jury


// TODO Récupération de tous les participants


$user_type = 'invite';
if ($_SESSION['numUser'] == $resultat['refPresident']) {
    $user_type = 'president';
// TODO mise à jour du type de personne
} else {
    $user_type = '';
}

$connexion->close();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../style/style.css">
    <title>GPI - Menu concours</title>
</head>

<body>

<h1>Bienvenue cher utilisateur !</h1>

<?php
// TODO View en fonction du rôle
?>



<p><a href="../listeConcours.php">Retour vers la liste des concours</a></p>

</body>
</html>
