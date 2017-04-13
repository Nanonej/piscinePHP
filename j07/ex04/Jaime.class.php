<?php

class Jaime extends Lannister
{
	public function sleepWith($x)
	{
		if ($x instanceof Lannister)
		{
			if ($x instanceof Tyrion)
				print("Not even if I'm drunk !" . PHP_EOL);
			else
				print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
		else
			print("Let's do this." . PHP_EOL);
	}
}

?>
