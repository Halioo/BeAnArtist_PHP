<?php

require_once 'config.php';

?>


<?php
$title = 'Examen';
require_once 'template/head.php';
?>


<h1>Examen de PHP</h1>
<br />

<p>Bienvenue sur la page principale de l'examen de PHP de Clément Puybareau.</p>
<br />
<h4>Quelques petites précisions sur le fonctionnement du site :</h4>
<p>Les redirections du sites et liens utilisés passe par le .htaccess fournis,
    et ne marcheront peut-être pas si les fichiers sont lancés directement dans un navigateur.
    Je vous conseille d'importer les docs sur un serveur Apache.</p>
<p>Concernant la question 6, la question étant peu compréhensible j'ai pu l'interpréter de deux manières :</p>
<ul>
    <li>Les médias possèdent désormais un attribut "empruntable", pour savoir s'il peuvent être emprunté ou non.
        Une checkbox a été ajoutée dans le formulaire de création.
        Par défaut tout média peut être emprunté.</li>
    <li>Les médias doivent pouvoir être emprunté, j'ai donc créer une nouvelle table dans la BDD "Emprunté" contenant l'id d'un média,
        le nom de l'emprunteur, ainsi que les dates de début et de fin de l'emprunt. Le schéma physique de cette table est inclus dans les fichiers.
        Dans la liste des médias ceux dont il est possible de les emprunter possède un lien vers un formulaire d'emprunt. Si le média ne se trouve pas déjà
        dans la table Emprunte on peut rentrer ses informations pour le sélectionner, sinon une erreur s'affiche. Attention aucunes vérifications n'est faite sur
        les dates en elles-mêmes, seul la présence ou non est vérifié. Dans le cas où le média n'existe pas ou si le média que l'on tente d'emprunter ne peut pas l'être,
        l'utilisateur est automatiquement redirigé vers la liste des médias.</li>
</ul>

<br />
<hr />
<h3>Sommaire</h3>
<br>
<p><a href="/exam/mediatheque">Mediathèque</a></p>

<?php
require_once 'template/footer.php';
?>

