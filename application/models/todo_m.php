<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Todo_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_List()
	{
		return db_query_result($this, "SELECT * FROM items");
	}
	
	function get_view( $id )
	{
		return db_query_row($this, "SELECT * FROM items WHERE id='".$id."'");
	}

	function insert_todo($content, $created_on, $due_date)
	{
		$sql = "INSERT INTO items (content, created_on, due_date) VALUES ('".$content."', '".$created_on."', '".$due_date."')";
		$query = $this->db->query($sql);
	}
}