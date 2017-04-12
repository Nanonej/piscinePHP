<?php

class Tyrion extends Lannister
{
	public function sleepWith($x)
	{
		if (get_parent_class(get_class($x)) == "Lannister")
			print("Not even if I'm drunk !" . PHP_EOL);
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
