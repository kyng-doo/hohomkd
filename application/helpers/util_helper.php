<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

function alertMsg($msg='', $url='') 
{
	$CI =& get_instance();
	echo "<meta http-equiv=\"content-type\" content=\"text/html; charset=".$CI->config->item('charset')."\">";
	echo "<script type='text/javascript'>alert('".$msg."');";
	if ($url)
	echo "location.replace('".$url."');";
	else
	echo "history.go(-1);";
	echo "</script>";
	exit;
}

 
