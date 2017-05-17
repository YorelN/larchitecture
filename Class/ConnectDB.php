<?php
namespace Classes;
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:02
 */

use Exception;
use PDO;

class ConnectDB
{
	private static $connection = null;

	public static function getConnection()
	{
		if (is_null(self::$connection))
		{
			try
			{
				self::$connection = new PDO( "mysql:host=localhost; dbname=larchitecture_de_votre_region", 'root', 'root' );
			}
			catch ( Exception $exception )
			{
				die( 'Erreur mamène : ' . $exception->getMessage() );
			}
		}
		return self::$connection;
	}
}
