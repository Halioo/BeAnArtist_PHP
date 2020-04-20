<?php

require_once 'config.php';
require_once 'database.php';

try {
    $medias = get_table('EtreUnArtiste.Mediatheque');
} catch (Exception $e) {}

?>


<?php
$title = 'liste des médias';
require_once 'template/head.php';
?>


<h1>Liste des données stockées dans la médiatèque</h1>

<br>

<p><a href="/exam/mediatheque/ajout">Ajout d'un média</a></p>


<?php if (isset($medias)){ ?>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type de média</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($medias as $media) {
            echo '<tr><td class="nom_media">';
            echo $media['nom'];
            echo '</td><td>';
            echo $media['type'];
            echo '</td><td>'; ?>

            <button onclick="afficheMedia(
                    '<?php echo $media['descriptif']; ?>'
                )">
                Afficher la description</button>
            <?php echo '</td><td>';
            if ($media['empruntable']) { ?>
                <a href="/exam/mediatheque/emprunt?id=<?php echo $media['numero']; ?>">
                    Emprunter</a>
            <?php }
             echo '</td></tr>';
        }
        ?>
        </tbody>
    </table>
<?php } else { ?>
<p>La base de données ne contient rien</p>
<?php } ?>


<script src="/exam/js"></script>

<?php
require_once 'template/footer.php';
?>
