<?php

if (session_start() === TRUE && $_POST['msg'])
{
	if ($_SESSION['loggued_on_user'])
	{
		$file = '../private/chat';
		date_default_timezone_set('Europe/Paris');
		if (!file_exists($file))
			if (!file_exists('../private'))
				mkdir('../private');
		if (file_exists($file))
		{
			$priv_file = unserialize(file_get_contents($file));
			$fd = fopen($file, "r+");
			if (flock($fd, LOCK_EX))
			{
				$priv_file[] = ['login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']];
				file_put_contents($file, serialize($priv_file));
				flock($fd, LOCK_UN);
			}
			fclose($fd);
		}
		else
		{
			$priv_file[] = ['login' => $_SESSION['loggued_on_user'], 'time' => time(), 'msg' => $_POST['msg']];
			file_put_contents($file, serialize($priv_file));
		}
	}
	else
	{
		echo "ERROR\n";
		return ;
	}
}

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>input box</title>
		<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
	</head>
	<body>
		<form action="speak.php" method="post">
			<label for="msg">Message :</label>
			<input type="text" name="msg" id="msg" placeholder="écrivez votre message ici" autofocus maxlengh=140 size=141 value="">
		</form>
	</body>
</html>
