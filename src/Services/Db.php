<?php
namespace Services;

class Db {
	private static $pdo;

	private  function __construct() {

	}

	private function createPdo() {
				try {
		$dbOptions = require __DIR__ . '/../../config.php';
	
		$db = new \PDO(
			'mysql:host='.$dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
			$dbOptions['user'],
			$dbOptions['password']
		);
		$db->exec('SET NAMES UTF8');
		self::$pdo = $db;
		} catch (\PDOException $e) {
				die($e->getMessage());
		}

		return self::$pdo;
	}

	public static function getPdo() {
		if (is_null(self::$pdo)) {
			self::$pdo = self::createPdo();
		}
		return self::$pdo;
	}

	private function __clone() {

	}

	private function __wakeup() {

	}

	public static function obj2Table($obj) {

		$toTable = $obj->toTable($obj);

		return $toTable;
	}

	public static function getById($table,$id){
		$pdo = \Services\Db::getPdo();
		$sth = $pdo->prepare("SELECT * FROM `".$table."` WHERE `id`= ?");
		$sth->execute([$id]);
		$fl = strtoupper(strval($table[0]));
		$class = preg_replace('/^\w/',$fl,$table);
		$sth->setFetchMode(\PDO::FETCH_CLASS,"\Model\\".$class);
		$value = $sth->fetch();
		if (empty($value)) {
			$value = false;
		}
		return $value;
	}

	public static function insert($name,$object,$params = []) {
		$pdo = \Services\Db::getPdo();
		$objectProps = self::obj2Table($object);
		$properties = $objectProps['properties'];
		$class = $objectProps['class'];		
		$table = strtolower($class);
		$query = 'INSERT INTO `'.$table."` SET ";
		$values = [];
		foreach ((array) $properties as $propertyKey=>$propertyValue) {
			$query .= '`'.$propertyKey.'` = '. ':'.$propertyKey.',';
			$values[$propertyKey] = $propertyValue;
		}
		$query = trim($query,",");
		$sth = $pdo->prepare($query);
		$sth->execute($values);
	}

	public static function update($table,$id) {
		$obj = \Services\Db::getById($table,$id);
		return $obj;
	}
}