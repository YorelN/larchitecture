<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:24
 */
require_once '../../vendor/autoload.php';
use Classes\CrudPartenaire;

$crud = new \Classes\CrudPartenaire();

$crud->delete('partnaire', $_GET['id']);

header('Location: listePartenaires.php');



