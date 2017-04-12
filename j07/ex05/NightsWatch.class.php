<?php

class NightsWatch implements IFighter
{
	private $_instab;
	public function recruit($x)
	{
		if (class_implements($x)['IFighter'] != FALSE)
		{
			$this->_instab[] = $x;
		}
	}

	public function fight()
	{
		foreach ($this->_instab as $instance)
		{
			$instance->fight();
		}
	}
}

?>
