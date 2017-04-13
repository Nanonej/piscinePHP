<?php

abstract class Fighter
{
	public $name = "";

	public function __construct($string)
	{
		$this->name = $string;
	}

	abstract public function fight($target);
}

?>
