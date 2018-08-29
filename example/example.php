<?php

require_once 'SomeFile.php';

/**
 * PHPDoc
 *
 * @class SomeClass
 */
class SomeClass extends One implements Another {

	private $my;

	public static $shared;

	const MAGIC = 0987654321;

	/**
	 * Description by <a href="mailto:">user@host.dom</a>
	 * @return SomeType
	 */
	function doSmth($abc, $def) {
		foo();
		$def .= self::MAGIC;
		$v = Helper::convert($abc . "\n {$def}" . $def);
		$q = new Query( $this->invent(abs(0x80)) );
		return array($v => $q->result);
	}

	public function myMethod($param1, $param2)
	{
		if ($param2 == 'Some String') {
			$param1 .= $param2;
		} else {
			$param1 = str_replace($param1, $param2);
		}
		return $this->callOtherMethod($param1);
	}
}

/**
 * Interface
 */
interface Another {

	/**
	 * @param string $param1
	 * @param string $param2
	 * @return string
	 */
	public function myMethod($param1, $param2);
}

function label_test() {
	$x = 0;
Label:
	$x = $x++;
	goto Label;
}
