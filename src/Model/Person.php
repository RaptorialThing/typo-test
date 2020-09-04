<?php
namespace Model;
use \Services\Db;
use \Model\ProtoModel;

class Person  extends ProtoModel {

	use ProtoModelFunctions;

	private $id;

	private $name;

	private $email;

	public function getProperty($property) {
			return $this->$property;
	}

	public function setProperty($property,$value) {
			$this->$property = $value;
	}

	public  function createPerson($name,$object) {
		return \Services\Db::insert($name,$object);
		
	}	

	public static function getTable() {
		$table = static::class;
		$table = explode('\\',$table);
		$table = end($table);
		$table = strtolower($table);
		return $table;
	}

	public static function className2Table() {
		$table = static::class;
		$table = explode('\\',$table);
		$table = end($table);
		$table = strtolower($table);
		return $table;
	}

	public static function getLastPerson() {
		$table = self::className2Table();
		$id = \Services\Db::getLastId($table);
		$person = \Model\Person::getById($id);
		$person = \Model\Person::obj2Array($person);
		return $person;
	}

	public function updatePerson($id,$name) {
		$table = static::class;
		$table = explode('\\',$table);
		$table = end($table);
		$table = strtolower($table);
		$class = strval(static::class);
		$name = [
			'name' => $name
		];
		$obj = \Services\Db::update($table,$id,$name);
		$array = self::obj2Array($obj);
		return $array;
	}

	public function toTable($obj) {

		$properties = get_object_vars($obj);

		$table = static::class;

		$table = explode('\\',$table);

		$class = end($table);

		return ['properties' => $properties,
			'class' => $class];
	}
}