<?php

/*
 * Etablit la connexion avec la base de données (BDD)
 * Le nom de la BDD est à modifier ici (1ere ligne)
 *
 * @return $connexion le pont vers la BDD
 */
function db_connect() {
    $dbname = 'EtreUnArtiste';
    $connexion = new mysqli("localhost", "root", "puyb1997", $dbname);
    if ($connexion -> connect_errno) {
        printf("Echec de la connexion : %s %s",
            $connexion -> connect_errno, $connexion -> connect_error);
        exit();
    }
    $connexion -> set_charset("utf8");
    return $connexion;
}

/*
 * Effectue une requête à la BDD et renvoit le résultat
 *
 * @param string $requete la requete à transmettre
 *
 * @return $resultat la première ligne de la réponse de la BDD
 *
 * @throws Exception si la requete ne renvoit rien
 */
function query($requete) {
    $connexion = db_connect();
    $result = $connexion -> query($requete);
    $connexion -> close();
    if (!$result) {
        throw new Exception('La requête n\'a rien renvoyé');
    } else {
        $resultat = $result -> fetch_assoc();
        $result -> free();
        return $resultat;
    }
}

/*
 * Effectue une requête à la BDD
 *
 * @param string $requete la requete à transmettre
 *
 * @throws Exception si la requete ne s'est pas bien effectuée
 */
function post_info($requete) {
    $connexion = db_connect();
    $result = $connexion -> query($requete);
    $connexion -> close();
    if (!$result) {
        throw new Exception('La requête n\'e s\'est pas bien faite');
    }
}


/*
 * Récupère la totalité des lignes d'une table de la BDD
 *
 * @param $table_name le nom de la table à récupérer
 *
 * @throws Exception si la requete ne renvoit rien
 */
function get_table($table_name) {
    $connexion = db_connect();
    $requete = 'SELECT * FROM ' . $table_name . ';';
    $result = $connexion -> query($requete);
    $connexion -> close();
    if (!$result) {
        throw new Exception('La requête n\'a rien renvoyé');
    } else {
        $resultat = array();
        while ($row = $result -> fetch_assoc()) {
            array_push($resultat, $row);
        }
        $result -> free();
        return $resultat;
    }
}
