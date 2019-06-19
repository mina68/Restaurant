<?php

class Database
{
	public $connect;

	public function __construct()
	{
		$dsn='mysql:host=localhost;dbname=restaurant_db;charset=utf8';
		$user='root';
		$pass='';
		$options= array();

		try
		{
			$this->connect = new PDO($dsn,$user,$pass,$options);
			$this->connect ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
			$this->connect ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function query($sql)
	{
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
		return $stmt;
	}
	
	public function get_last_inserted_id()
	{
		return $this->connect->lastInsertId();
	}
}
$database = new Database();
?>