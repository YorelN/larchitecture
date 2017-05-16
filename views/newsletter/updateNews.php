<?php

require_once '../../vendor/autoload.php';
use Classes\CrudNewsLetter;
if(!empty($_POST))
{
	$crud = new Classes\CrudNewsLetter();
	$crud->update();
	header('Location: listeNewsletter.php');
	exit();
}

?>

<form method="post">

    <input type="text" name="prenom">
    <input type="text" name="nom">
    <input type="text" name="mail">
    <input type="text" name="telephone">
    <input type="text" name="service">


    <input type="submit">

</form>
