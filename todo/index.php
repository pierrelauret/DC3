<?php 

include ('connexion.php');
require_once 'classes/todo.class.php';

$todo = new ToDo();
#echo $todo->data;
#echo $todo->getNbItems();	
#$todo->setTitleItem('okay');
#echo'<br>';
#echo $todo->data;

// if(isset($_POST['text'])) {
//	$todo->createItem($_POST['text']);
// }

//if($_GET['type'] == "delete"){
//	$todo->deleteItem($_GET['id']);
//}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div id="listItemId">
			
		</div>
			
		<form id="formItem" method="post" action="">
			<input id="item_value" type="text" name="text">
			<input type="submit" value"Go">
		</form>
	</body>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="/js/script.js"></script>
</html>