<?php

require_once '../../vendor/autoload.php';
use Classes\CrudMagazines;
if(!empty($_POST))
{
	$crud = new Classes\CrudMagazines();
	$crud->create();
	header('Location: ../index.php?p=listeMag');
	exit();
}


?>



<form method="post">

	<input type="text" name="titre">
	<input type="text" name="img">
	<input type="text" name="zones">

	<input type="submit">

</form>

