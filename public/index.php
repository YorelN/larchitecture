<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 18:16
 */

require_once '../vendor/autoload.php';
use Classes\CrudMagazines;

$crud = new CrudMagazines();

$query = "SELECT * FROM magasine LIMIT 10";
$page = 'home';


$loader = new Twig_Loader_Filesystem( __DIR__ . '/view' );
$twig = new Twig_Environment($loader, array(
	'debug' => true,
	'cache' => false,
//    'cache' => __DIR__.'/cache',
));
$twig->addExtension(new Twig_Extension_Debug());


switch ($page)
{
	case 'home':
		echo $twig->render('listPartenaires.twig', ['listeMag' => $crud->getData($query)]);
		break;
	case 'revue.twig':
		echo $twig->render('revue.twig');
		break;
	default :
		header('HTTP/1.0 404 Not Found');
		echo $twig->render('404.twig');
}







