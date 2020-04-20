<?php

function db_connect() {
    $connexion = new mysqli("localhost", "root", "puyb1997", "EtreUnArtiste");
    if ($connexion -> connect_errno) {
        printf("Echec de la connexion : %s %s",
            $connexion -> connect_errno, $connexion -> connect_error);
        exit();
    }
    $connexion->set_charset("utf8");
    return $connexion;
}

function get_table($table_name) {
    $connect = db_connect();
    $maRequete = 'SELECT * FROM ' . $table_name . ';';
    $resultat = array();
    if ($result = $connect -> query($maRequete)) {
        while ($row = $result -> fetch_assoc()) {
            array_push($resultat, $row);
        }
        $result->free();
    } else {
        echo "la requête ne s'est pas bien effectuée";
    }
    $connect->close();
    return $resultat;
}
