<?php 

include_once 'class.php';

$websites = [
/*
	new Card("code", "test", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test2", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
	new Card("code", "test3", "A CLI tool to quickly split SQL files into smaller, more manageable chunks.", ["wordpress", "test", "js"]),
*/
];

?>

<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>

	<body>

		<div class="grid" style="">
			<?php
			foreach($websites as $website){
				echo $website->render();
			}
			?>
		</div>

	</body>

</html>