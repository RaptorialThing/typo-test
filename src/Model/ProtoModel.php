<?php

namespace Model;

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
}

class ProtoModel {
	use ProtoModelFunctions;
}

