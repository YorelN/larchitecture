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


	/**
	 * @param $table
	 * @param $param_1
	 * @param $param_2
	 * @param $param_3
	 * @param $param_4
	 * @param $method
	 */
	public function create($table, $param_1, $param_2, $param_3, $param_4, $method)
	{
		$query = "INSERT INTO `$table` ($param_1, $param_2, $param_3, $param_4) VALUES (:$param_1, :$param_2, :$param_3, :$param_4)";

		$result = $this->connection->prepare($query);

		$result->bindValue(':'.$param_1, $method[$param_1]);
		$result->bindValue(':'.$param_2, $method[$param_2]);
		$result->bindValue(':'.$param_3, $method[$param_3]);
		$result->bindValue(':'.$param_4, $method[$param_4]);

		$result->execute();
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


	public function update( $table, $param_1, $param_2, $param_3, $param_4, $method)
	{
		$query = "UPDATE $table SET `$param_1`=:$param_1,`$param_2`=:$param_2,`$param_3`=:$param_3,`$param_4`=:$param_4";

		$result = $this->connection->prepare($query);
		$result->bindValue(':'.$param_1, $method[$param_1]);
		$result->bindValue(':'.$param_2, $method[$param_2]);
		$result->bindValue(':'.$param_3, $method[$param_3]);
		$result->bindValue(':'.$param_4, $method[$param_4]);
		$result->execute();
	}

}