<?php

function isAdmin() {
    return (isset($_SESSION['numUser']) and $_SESSION['numUser'] == 1);
}

function verifyIsAdmin() {
    if(!isAdmin()) {
        header('Location: /');
        exit();
    }
}
