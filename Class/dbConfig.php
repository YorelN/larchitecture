<?php
/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:02
 */

namespace Classes;

class DbConfig
{
	private $_host          = 'localhost';
	private $_username      = 'root';
	private $_password      = 'root';
	private $_database      = 'test';

	protected $connection;


	public function __construct()
	{
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			$this->connection = new PDO ( $this->_host, $this->_username, $this->_password, $this->_database, $pdo_options);
		}

		catch (Exception $exception)
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
