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
		\Services\Db::insert($name,$object);
		
	}	

	public function updatePerson($id) {
		$table = static::class;
		$table = explode('\\',$table);
		$table = end($table);
		$table = strtolower($table);
		$class = strval(static::class);
		$obj = \Services\Db::update($table,$id);
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