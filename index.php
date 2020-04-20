<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css">
    <title>GPI - home</title>
</head>

<body>

    <h1>Bonjour</h1>

    <p>Ceci est la première page du site dédié au GPI</p>

    <?php echo "Test des instructions php !" ?>

    <p>Pour vous connecter veuiller cliquer
        <a href="login">ici</a>.</p>


    <h3><a href="cv">CV</a> de Clément Puybareau</h3>

    <h3><a href="tp_javascript">TP de Javascript</a></h3>

    <br><br>
    <hr>
    <h3><a href="exam">Lien vers l'index de l'examen</a></h3>

</body>
</html>
