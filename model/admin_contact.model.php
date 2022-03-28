<?php

// admin_contact model

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT *
    FROM blog_contacts";

    //die($query);

    $req = $pdo->query($query);

    $data = $req->fetchAll();

} catch(Exception $e) {
    die("Erreur MySQL : " . $e->getMessage());
}

$bg = 'assets/img/contact-bg.jpg';
$header_title = 'Blog de surf';
$header_subtitle = 'Liste des formulaires';