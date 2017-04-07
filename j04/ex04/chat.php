<?php

			$file = '../private/chat';
			date_default_timezone_set('Europe/Paris');
			if (file_exists($file))
			{
				$fd = fopen($file, "r");
				if (flock($fd, LOCK_SH))
				{
					$priv_file = unserialize(file_get_contents($file));
					foreach ($priv_file as $msg)
						echo "[".date("H:i", $msg['time'])."]"." <b>".$msg['login']."</b>: ".$msg['msg']."<br />\n";
					flock($fd, LOCK_UN);
				}
				fclose($fd);
			}

?>
