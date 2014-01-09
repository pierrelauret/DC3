<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
include ('connexion.php');
require_once 'classes/todo.class.php';

$todo = new ToDo();

	switch($_GET['action']){
		case 'get':
			$html = '<ul>';
			foreach($todo->getItems() as $item) {
				$html .='<li><a class="delete" href="/ajax.php?action=delete&id='.$item['id'].'">x</a>'.$item['text'].'</li>';
				}
			$html .= '</ul>';
			echo $html;
		break;
		
		case 'create':
			$todo->createItem($_POST['text']);
			$html = '<ul>';
			foreach($todo->getItems() as $item) {
				$html .='<li><a class="delete" href="/ajax.php?action=delete&id='.$item['id'].'">x</a>'.$item['text'].'</li>';
				}
			$html .= '</ul>';
			echo $html;
		break;
		
		case 'delete':
			$todo->deleteItem($_GET['id']);	
			
			$html = '<ul>';
			foreach($todo->getItems() as $item) {
				$html .='<li><a class="delete" href="/ajax.php?action=delete&id='.$item['id'].'">x</a>'.$item['text'].'</li>';
				}
			$html .= '</ul>';
			echo $html;	
		break;
	}
?>