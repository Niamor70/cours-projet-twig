<?php

require 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem( 'template/' );
$twig   = new Twig_Environment( $loader, array( 'cache' => false ) );
