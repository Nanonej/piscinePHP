<?php

class Jaime extends Lannister
{
	public function sleepWith($x)
	{
		if (get_parent_class(get_class($x)) == "Lannister")
		{
			if (get_class($x) == "Tyrion")
				print("Not even if I'm drunk !" . PHP_EOL);
			else
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
