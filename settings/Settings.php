<?php

namespace settings;

// шаблон одиночка
class ClassA {

	static public $pro1;

	private $a = [
		'key1' => 'path3',
		'key2' => 'path4',
	];
	

	static public function meth1() {
		if (self::$pro1 instanceof self) {
			echo 'Экземпляр данного класса уже создан';
			return self::$pro1;
		}

		return self::$pro1 = new self;
	}

	private function __construct()	{}
	private function __clon()		{}
}

?>