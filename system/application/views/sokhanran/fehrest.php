<html>
	<head>
		<title>Fehrest Sokhanranha</title>
	</head>
	
	<body>
		<ul>
			<?php
			foreach ($fehrest as $key) {
				echo "<li>";
				echo anchor('sokhanran/show/' . $key->id, $key->name);
				echo "</li>\n";
			}
			?>
		</ul>	
	</body>
	</html>