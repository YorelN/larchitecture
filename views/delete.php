<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 16:33
 */


require_once '../Class/Crud.php';

$crud = new Crud();

$crud->delete('user', $_GET['id']);

header('Location: indexAdmin.php');