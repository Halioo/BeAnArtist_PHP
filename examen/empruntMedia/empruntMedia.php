<?php

require_once '../config.php';
require_once '../database.php';

$id = $_GET['id'];

$requete =
    "SELECT media.numero, media.nom, media.type, media.empruntable " .
    "FROM Mediatheque media " .
    "WHERE media.numero = $id";

try {$media = query($requete);}
catch (Exception $e) {print_r($e);}

if (!isset($media) or $media['empruntable'] === 0) {
    header('Location: /exam/mediatheque');
    exit();
}

// Test si média déjà emprunté
$requete = "SELECT numero, numero_media, date_fin FROM Emprunte WHERE numero_media = $id";
try {$infos_emprunt = query($requete);} catch (Exception $e) {}

?>


<?php
$title = 'Emprunt d\'un media';
require_once '../template/head.php';
?>


<h1>Emprunt d'un média</h1>
<br />

<h4>Bienvenue, vous souhaitez acutellement emprunter le média suivant :</h4>

<p><?php echo $media['type']; ?> - <?php echo $media['nom']; ?></p>
<br />

<?php if (isset($infos_emprunt)) { ?>

    <p>Malheureusement ce média n'est pas empruntable à l'heure actuelle</p>
    <p>Veuillez réessayer à partir du : <?php echo $infos_emprunt['date_fin']; ?></p>

<?php } else { ?>
    <div>
    <form action="/exam/mediatheque/remprunt?id=<?php echo $id; ?>"
          method="post">
        <br />
        <div>
            <label for="nom_emprunt">Votre nom :</label>
            <input type="text" id="nom_emprunt" name="name"
                   placeholder="" required autofocus>
        </div>
        <br />
        <div>
            <p>Jusqu'à quelle date souhaitez-vous l'emprunter ?</p>
            <label for="date_j"></label>
            <input type="text" id="date_j" name="date_j"
                   placeholder="Jour" required>
            <label for="date_m"></label>
            <input type="text" id="date_m" name="date_m"
                   placeholder="Mois" required>
            <label for="date_a"></label>
            <input type="text" id="date_a" name="date_a"
                   placeholder="Année" required>
        </div>
        <br />
        <div><button type="submit">Valider l'emprunt</button></div>
    </form>
</div>
<?php } ?>

<br />
<p><a href="/exam/mediatheque">Retour à la médiathèque</a></p>


<?php
require_once '../template/footer.php';
?>

