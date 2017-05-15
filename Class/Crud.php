<?php

/**
 * Created by PhpStorm.
 * User: NicolasLEROY
 * Date: 15/05/2017
 * Time: 11:16
 */

require_once 'DbConfig.php';


class Crud extends DbConfig

{
	/**
	 * Crud constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}




	public function getData($query)
	{
		$result = $this->connection->query($query);

		if ($result == false) {
			return false;
		}

		return $result;
	}







	public function create($query)
	{
		$result = $this->connection->query($query);

		return $result;

	}

	/**
	 * @param $id
	 * @param $table
	 *
	 * @return bool
	 */

	public function delete($table, $id)
	{
		$query = "DELETE FROM $table WHERE id = $id";

		$result = $this->connection->query($query);

		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}

}