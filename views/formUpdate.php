<?php

require_once '../Class/Crud.php';

if(!empty($_POST))
{
    $crud = new Crud();
    $crud->update('user', 'prenom', 'nom', 'email', 'adresse', $_POST);
    header('Location: indexAdmin.php');
    exit();
}
require_once "header.php";


?>



	<form method="post">

		<input type="text" name="prenom">
		<input type="text" name="nom">
		<input type="text" name="email">
		<input type="text" name="adresse">

		<input type="submit">

	</form>


<?php

require_once "footer.php";

?>