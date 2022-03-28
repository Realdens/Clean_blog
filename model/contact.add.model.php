<?php
include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    //var_dump($_POST);
    /*
    $query = "INSERT INTO blog_contacts
        (contact_name, contact_email, contact_phone, contact_message)
        VALUES
        ('" . addslashes($_POST["name"]) . "', '" . $_POST["email"] . "', '". $_POST["phone"] . "', '". addslashes($_POST["message"]) . "')";
    $req = $pdo->exec($query);
    */
    
    // Sécurisation via une "Requête préparée". Le but est d'empêcher une injection SQL
    $query = "INSERT INTO blog_contacts
        (contact_name, contact_email, contact_phone, contact_message)
        VALUES
        (:contact_name, :contact_email, :contact_phone, :contact_message)"; // :contact_name est un paramètre nommé (présence de ":")
    //die($query);

    $curseur = $pdo->prepare($query); // Curseur est une zone en mémoire
    $curseur->bindValue(':contact_name', $_POST["name"], PDO::PARAM_STR); // PARAM_STR est une constante fournie par la librairie PDO
    $curseur->bindValue(':contact_email', $_POST["email"], PDO::PARAM_STR);
    $curseur->bindValue(':contact_phone', $_POST["phone"], PDO::PARAM_STR);
    $curseur->bindValue(':contact_message', $_POST["message"], PDO::PARAM_STR);

    $curseur->execute();



} catch (Exception $e) {
    //die("Erreur MySQL : " . $e->getMessage());
    header("Location: index.php?erreur=1");
    exit;
}