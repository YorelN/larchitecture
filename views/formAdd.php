<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 16:33
 */


require_once '../Class/Crud.php';
if(!empty($_GET))
{
	$crud = new Crud();
	$crud->create('user', 'prenom', 'nom', 'email', 'adresse', $_GET);
	header('Location: indexAdmin.php');
	exit();
}
require_once "header.php";
?>

    <form method="get">

        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="text" name="email">
        <input type="text" name="adresse">

        <input type="submit">

    </form>


<?php

require_once "footer.php";

?>