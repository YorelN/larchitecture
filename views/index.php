<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:24
 */

require_once '../Class/Crud.php';

$BDD = new Crud();

$sql = "SELECT * FROM user";

$results = $BDD->getData($sql);


foreach ($results as $key => $res) {
	echo $res['prenom'].PHP_EOL;
	echo $res['nom'].PHP_EOL;
	echo $res['email'].PHP_EOL;

}


?>












