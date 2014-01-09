<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'classes/instagram.class.php';

$insta = new Instagram();

$res = $insta->getPictures();




?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h1>Insta</h1>
		<ul>		
		<?php
			foreach($res->data as $picture){ ?>
				<img src="<?php echo $picture->images->low_resolution->url;?>">
			<?php }?>
		</ul>
	</body>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/js/script.js"></script>
</html>