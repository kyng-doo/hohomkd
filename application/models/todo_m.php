<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Todo_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_List()
	{
		return de_query_result($this, "SELECT * FROM items");
	}
	
	function get_view( $id )
	{
		
		return de_query_row($this, "SELECT * FROM items WHERE id='".$id."'");
	}
}