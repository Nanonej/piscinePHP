<?php

class UnholyFactory
{
	private $_absorbed = array();

	public function absorb($class)
	{
		if ($class instanceof Fighter)
		{
			if (in_array($class, $this->_absorbed))
				print ("(Factory already absorbed a fighter of type " . $class->name . ")" . PHP_EOL);
			else
			{
				print ("(Factory absorbed a fighter of type " . $class->name . ")" . PHP_EOL);
				$this->_absorbed[] = $class;
			}
		}
		else
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}

	public function fabricate($fighter)
	{
		foreach ($this->_absorbed as $unit)
		{
			if ($fighter == $unit->name)
			{
				print ("(Factory fabricates a fighter of type ". $fighter . ")" . PHP_EOL);
				return $unit;
			}
		}
			print ("(Factory hasn't absorbed any fighter of type " . $fighter . ")" . PHP_EOL);
			return NULL;
	}
}

?>
