<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:02
 */


class DbConfig
{
	private $_host          = 'localhost';
	private $_username      = 'root';
	private $_password      = 'root';
	private $_database      = 'larchitecture_de_votre_region';

	protected $connection;


	public function __construct()
	{
		try
		{
			$this->connection = new PDO("mysql:host=". $this->_host .";dbname=" . $this->_database, $this->_username, $this->_password);
		}

		catch (PDOException $exception)
		{
			die('Erreur mamène : ' . $exception->getMessage());
		}

		return $this->connection;
	}

	public function getConnection()
	{
		return $this->connection;
	}
}
