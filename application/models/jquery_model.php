<?php 
class Jquery_Model {

	public static $table_name = "sample";

	function findAll() {
		$sql = " 
			SELECT * FROM " . self::$table_name . "
		";
		
		return Mapper::runActive($sql, TRUE);
	} 

	function get_search($params){

		$sql = " 
			SELECT " . field_injector($fields) . " FROM " . self::$table_name . "
			WHERE name LIKE '%" . $params['textbox'] . "%'
		";

		return Mapper::runActive($sql,TRUE);
	}

  


}