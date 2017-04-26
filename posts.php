<?php
require 'includes/config.php';



$data = array(
	"page_title" => "Les posts",
	"title_H1" => "Ma liste de posts",
	"posts" => array(
		array("id" => 1),
		array("id" => 2),
		array("id" => 3)
	)
);

echo $twig->render( 'pages/posts.html.twig', $data );