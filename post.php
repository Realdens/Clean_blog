<?php 
//var_dump($_GET);
//exit;
//die($_GET['article']);
//echo($_GET['article']);

// Ce controller doit recevoir un parametre article
if (!isset($_GET["article"])) {  // La fonction isset permet de vérifier la présence (ou l'absence si précédée de "!") d'un paramètre, ici "article"
    die("Manque paramètre !"); // L'instruction "die" met fin à l'exécution du code et affiche un message
}

include("model/post.model.php"); // "include" permet de charger et exécuter un modèle

$bg = $data["post_img_url"]; // Affectation à la variable bg de la variable data (ayant pour paramètre une image)
$layout_title = $data["post_title"]; // Affectation à la variable layout_title de la variable data (ayant pour paramètre un titre)
$header_title = substr($data["post_title"], 0, TRONCATURE_HEADER) . '...'; // Affectation à la variable header_title d'une chaine de caractère 
$header_subtitle = '...' . substr($data["post_title"], TRONCATURE_HEADER);

include("view/post.view.php"); // Ce second "include" charge et exécute une vue