<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 16/05/2017
 * Time: 15:29
 */
session_start();
require_once '../../vendor/autoload.php';
use Classes\CrudPartenaire;

if (!isset($_SESSION['pseudo']) )
{
	header('Location: login.php');
	exit();
}


$crud = new CrudPartenaire();

$query = "SELECT id, secteur, nom, codepostal FROM partnaire";
$result = $crud->getData($query);
?>

<h1 style="text-align: center; font-size: 3em">List Part</h1>
<a href="../logout.php">Déconnexion</a>

<a href="addPart.php">Ajouter</a>

<table style="width: 50%; margin: 0 auto; text-align: center">
	<tr>
		<th style="width: 25%; margin: 0 auto">Id</th>
		<th style="width: 25%; margin: 0 auto">Titre</th>
		<th style="width: 25%; margin: 0 auto">Img</th>
		<th style="width: 25%; margin: 0 auto">Magasine</th>
	</tr>
	<?php foreach ($result as $key => $row) : ?>
		<tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['secteur'] ?></td>
			<td><?= $row['nom'] ?></td>
			<td><?= $row['codepostal'] ?></td>
			<td><a href="deletePart.php?id=<?= $row['id'] ?>">Supprimer</a></td>
			<td><a href="updatePart.php?id=<?= $row['id'] ?>">Modifier</a></td>
		</tr>
	<?php endforeach; ?>

</table>