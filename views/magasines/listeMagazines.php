<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 16/05/2017
 * Time: 15:29
 */
session_start();
require_once '../../vendor/autoload.php';
use Classes\CrudMagazines;

if (!isset($_SESSION['pseudo']) )
{
	header('Location: login.php');
	exit();
}


$crud = new CrudMagazines();

$query = "SELECT id, titre, img, zones FROM magasine";
$result = $crud->getData($query);
?>

<h1 style="text-align: center; font-size: 3em">List Mag</h1>
<a href="../logout.php">Déconnexion</a>

<a href="addMag.php">Ajouter</a>

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
			<td><?= $row['titre'] ?></td>
			<td><?= $row['img'] ?></td>
			<td><?= $row['zones'] ?></td>
			<td><a href="deleteMag.php?id=<?= $row['id'] ?>">Supprimer</a></td>
			<td><a href="updateMag.php?id=<?= $row['id'] ?>">Modifier</a></td>
		</tr>
	<?php endforeach; ?>

</table>