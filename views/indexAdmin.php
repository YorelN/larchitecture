<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:24
 */

require_once '../vendor/autoload.php';

require_once 'header.php';
require_once '../Class/Crud.php';

$crud = new Crud();

$query = "SELECT * FROM user";
$result = $crud->getData($query);



?>


<a href="formAdd.php">Ajouter</a>

<table style="width: 50%; margin: 0 auto; text-align: center">
	<tr>
		<th style="width: 25%; margin: 0 auto">Id</th>
		<th style="width: 25%; margin: 0 auto">Prenoms</th>
		<th style="width: 25%; margin: 0 auto">noms</th>
		<th style="width: 25%; margin: 0 auto">Emails</th>
		<th style="width: 25%; margin: 0 auto">Adresses</th>
	</tr>
	<?php foreach ($result as $key => $row) : ?>
	<tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['prenom'] ?></td>
			<td><?= $row['nom'] ?></td>
			<td><?= $row['email'] ?></td>
			<td><?= $row['adresse'] ?></td>
			<td><a href="formUpdate.php?id=<?= $row['id'] ?>"">Modifier</a></td>
			<td><a href="delete.php?id=<?= $row['id'] ?>">Supprimer</a></td>
	</tr>
	<?php endforeach; ?>

</table>
<?php
require_once 'footer.php';
?>
