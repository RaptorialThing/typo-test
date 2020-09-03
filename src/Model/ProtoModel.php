<?php

namespace Model;
use \Services\Db;

trait ProtoModelFunctions {

	public static function obj2Array($obj) {

		$table = static::class;
		$table = explode('\\',$table);
		$table = end($table);
		$table = strtolower($table);
		$class = strval(static::class);
		$out = (array) $obj;
		$class = explode('\\',$class);
		$class = implode("\\\\\\",$class);
		$class = '/'.$class.'/';
		foreach ($out as $outK=>$outV) {
			$newK = preg_replace($class,"",$outK);
			$out[$newK] = $out[$outK];
			unset($out[$outK]);
		}	
		return $out;
	}

	public static function statiClass2Table () {
		$table = static::class;
		$table = explode('\\',strval($table));
		$table = end($table);
		$table = strtolower($table);
		return $table;
	}
}

class ProtoModel {
	use ProtoModelFunctions;

	public static function getById($id) {
		$table = static::statiClass2Table();
		return \Services\Db::getById($table,$id);
	}
}

