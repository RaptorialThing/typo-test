<?php

namespace Controller;
use \Services\Db;
use \View\View;
use \Model\Person;

class PersonController {
	public function __construct($name) {
	new \View\View('person.html');
	$person = new \Model\Person();
	$person->setProperty('name',$name);	
	\Services\Db::obj2Table($person);
	}

	public function selectPerson($id) {
		$person = \Model\Person::getById($id);
		$person = \Model\Person::obj2Array($person);
		\View\View::render('person.html.twig',$person);
	}

	public function createPerson($name) {
		$person = new \Model\Person();
		$person->setProperty('name',$name);
		$id = $person->createPerson($name,$person);
		$person = \Model\Person::getById($id);
		$person = \Model\Person::obj2Array($person);
		\View\View::render('person.html.twig',$person);
	}

	public function updatePerson($id,$name) {
		$person= new \Model\Person();
		$person = $person->updatePerson($id,$name);
		\View\View::render('personUpdate.html.twig',$person);
	}

	public function deletePerson($id) {
		$table = \Model\Person::getTable();
		\Services\Db::delete($id,$table);
		$person = \Model\Person::getById($id);
		$person = \Model\Person::obj2Array($person);
		\View\View::render('person.html.twig',$person);
	}

	public static function word($word) {
		
	}
}