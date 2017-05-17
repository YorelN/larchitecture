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

$query = "SELECT id, prenom, nom, mail, telephone, service FROM newsletter";
$result = $crud->getData($query);
?>

<h1 style="text-align: center; font-size: 3em">List Mag</h1>
<a href="../logout.php">Déconnexion</a>

<a href="../newsletter/addNews.php">Ajouter</a>

<table style="width: 50%; margin: 0 auto; text-align: center">
	<tr>
		<th style="width: 25%; margin: 0 auto">Id</th>
		<th style="width: 25%; margin: 0 auto">Prenom</th>
		<th style="width: 25%; margin: 0 auto">Nom</th>
		<th style="width: 25%; margin: 0 auto">Mail</th>
        <th style="width: 25%; margin: 0 auto">Telephone</th>
        <th style="width: 25%; margin: 0 auto">Service</th>

    </tr>
	<?php foreach ($result as $key => $row) : ?>
		<tr>
			<td><?= $row['id'] ?></td>
			<td><?= $row['prenom'] ?></td>
			<td><?= $row['nom'] ?></td>
			<td><?= $row['mail'] ?></td>
            <td><?= $row['telephone'] ?></td>
            <td><?= $row['service'] ?></td>
            <td><a href="../newsletter/deleteNews.php?id=<?= $row['id'] ?>">Supprimer</a></td>
			<td><a href="../newsletter/updateNews.php?id=<?= $row['id'] ?>">Modifier</a></td>
		</tr>
	<?php endforeach; ?>

</table>