<?php 
class ToDo {
	public $data = "toto";
	
	public function getNbItems(){
		return 3;
	}
	
	public function setTitleItem($title){
		$this->data = $title;
	}
	
	public function getItems(){
		$query = mysql_query("SELECT * FROM `todo`");
		
		$todos = array();
		
		while($row = mysql_fetch_assoc($query)){
    		$todos[] = $row;
		}
		return $todos;
	}
	
	public function createItem($text){
		$item = mysql_query("INSERT INTO todo SET text='".$text."'");
	}
	
	public function deleteItem($id){
		mysql_query("DELETE FROM todo WHERE id=".$id);
	}
}
?>