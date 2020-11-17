<html>
<head>
	<title>Selamat Datang</title>
</head>
<body>
	<?php
echo '<h1>SELAMAT DATANG ' . htmlspecialchars($_POST["firstname"]) . " " .  htmlspecialchars($_POST["lastname"]) .'!</h1>';

	
	?>
	<h4>Terima kasih telah bergabung di SanberBook. Social media kita bersama!</h4>
</body>
</html>