<?php

require_once '../../vendor/autoload.php';
use Classes\CrudPartenaire;
if(!empty($_POST))
{
	$crud = new Classes\CrudPartenaire();
	$crud->create();
	header('Location: ../index.php?p=listePart');
	exit();
}


?>



<form method="post">

	<input type="text" name="secteur">
	<input type="text" name="nom">
	<input type="text" name="codepostal">

	<input type="submit">

</form>

