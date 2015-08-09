<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class MY_Loader extends CI_Loader{

    public function layout($body, $vars, $return = FALSE)
    {
    	if($return):
    	
	    	$content .= $this->view($body, $vars, $return);
	    	$content = $this->view("layout/header", $return);
	    	$content .= $this->view("layout/footer", $return);
	    	return $content;
    	
    	else:
    	
	    	$this->view("layout/header", $vars);
	    	$this->view($body, $vars);
	    	$this->view("layout/footer", $vars);
    	
    	endif;
    }
}

/* End of file Someclass.php */