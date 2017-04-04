#!/usr/bin/php
<?php
	while (42)
	{
		$nb = '';
		echo "Entrez un nombre: ";
		if (fscanf(STDIN, "%s\n", $nb))
		{
			if (!is_null($nb) && is_numeric($nb))
			{
				if ($nb % 2 == 0)
					echo "Le chiffre $nb est Pair\n";
				else
					echo "Le chiffre $nb est Impair\n";
			}
			else
				echo "'$nb' n'est pas un chiffre\n";
		}
		else
		{
			echo "\n";
			exit(0);
		}
	}
?>
