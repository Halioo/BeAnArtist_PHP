<?php

session_start();
require_once '../admin/admin_function.php';
verifyIsAdmin();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - Ajout concours</title>
</head>

<body>

<div>
    <form method="post" action="rAddConcours">
        <h1>Ajouter un concours</h1>
        <div>
            <label for="president">Président : </label>
            <select id="president" name="president" size="1" required>
                <?php
                require_once '../database/db_function.php';
                $users = get_table('EtreUnArtiste.Utilisateur');
                foreach ($users as $user) {
                    echo '<option>';
                    echo $user['numUtilisateur'] . ' - ' . $user['nom'] . ' ' . $user['prenom'];
                    echo '</option>';
                }
                ?>
            </select>
        </div>
        <br />
        <div>
            <label for="description">Description : </label>
            <div>
                <textarea id="description" name="description" placeholder="Description"
                          cols="40" rows="5" required></textarea>
            </div>
        </div>
        <div>
            <p>Date de début :</p>
            <label for="debut_j"></label>
            <input type="text" id="debut_j" name="debut_j"
                   placeholder="Jour" required>
            <label for="debut_m"></label>
            <input type="text" id="debut_m" name="debut_m"
                   placeholder="Mois" required>
            <label for="debut_a"></label>
            <input type="text" id="debut_a" name="debut_a"
                   placeholder="Année" required>
        </div>
        <div>
            <p>Date de fin :</p>
            <label for="fin_j"></label>
            <input type="text" id="fin_j" name="fin_j"
                   placeholder="Jour" required>
            <label for="fin_m"></label>
            <input type="text" id="fin_m" name="fin_m"
                   placeholder="Mois" required>
            <label for="fin_a"></label>
            <input type="text" id="fin_a" name="fin_a"
                   placeholder="Année" required>
        </div>
        <br />
        <div><button type="submit">Ajouter le concours</button></div>
    </form>
</div>

<p><a href="admin">Annuler</a></p>

</body>

</html>
