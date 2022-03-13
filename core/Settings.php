<?php

class Settings {
	public $name;
	public $b;

	public function __construct($z, $x)
	{
		$this->name = $z;
		$this->b = $x;
	}

}


// namespace core;

// // шаблон одиночка
// class ClassA {

// 	static public $pro1;

// 	private $a = [
// 		'key1' => 'path1',
// 		'key2' => 'path2',
// 	];
	

// 	static public function meth1() {
// 		if (self::$pro1 instanceof self) {
// 			echo 'Экземпляр данного класса уже создан';
// 			return self::$pro1;
// 		}

// 		return self::$pro1 = new self;
// 	}

// 	private function __construct()	{}
// 	private function __clon()		{}
// }



?>