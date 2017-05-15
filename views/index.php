<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:24
 */




require_once '../Class/Crud.php';

$BDD = new Crud();

$sql = "INSERT INTO user (`prenom`) VALUES (:prenom, :nom, :email)";

$results = $BDD->create($sql);







$sqlRead = "SELECT * FROM user";

$row = $BDD->getData($sqlRead);


foreach ($row as $key => $res)
{
	echo $res['prenom'];
}














