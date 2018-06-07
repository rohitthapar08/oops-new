<?php

class DB {
	protected  static $table = 'baseTable';

	public function select()
	{
		echo "select *  FROM " .static::$table;
	}
	public function insert()
	{
		echo "Insert INTO " .static::$table;
	}
}

// $db = new DB;

// $db->insert ();

class abc extends DB {

	protected static $table = 'abc';
}
$abc = new abc;

$abc->select();