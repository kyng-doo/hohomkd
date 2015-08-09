<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function db_query( $con, $sql, $fn="result" )
{
	$query = $con->db->query($sql);
	
	if($fn === "row"):
		$result = $query->row();
	else:
		$result = $query->result();
	endif;
	
	return $result;	
}

function de_query_result($con, $sql)
{
	$query = $con->db->query($sql);
	$result = $query->result();
	return $result;
}

function de_query_row($con, $sql)
{
	$query = $con->db->query($sql);
	$result = $query->row();
	return $result;
}
