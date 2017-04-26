<?php
require 'includes/config.php';



$data = array(
	"page_title" => "Accueil - Ma page d'ccueil",
	"title_H1" => "Plus de TWIG !!!",
	//"message_e" => "j'ai un problème"
);

echo $twig->render( 'pages/index.html.twig', $data );