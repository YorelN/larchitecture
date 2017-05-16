<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:24
 */
session_start();

if (!$_SESSION)
{
    header('Location: login.php');
    exit();
}

?>

<table>

    <th><a href="magasines/listeMagazines.php">Magazines</a></th>
    <th><a href="newsletter/listeNewsletter.php">Newsletter</a></th>
    <th><a href="partenaire/listePartenaires.php">Partenaires</a></th>

</table>



