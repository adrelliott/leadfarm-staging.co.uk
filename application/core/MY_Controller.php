<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - MY_Controller
 * @author Al Elliott
 * 
 * Extend the CI_Controller class
 * 
 */
class MY_Controller extends CI_Controller {
    
    public $data = array();


    public function __construct() {
        parent::__construct();
        //PHP SEssion is started in index.php
        
        //Allow the use of $_GET parameters in the URL
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        
        
        
        //Show debug info if asked:
        if (isset($_GET['debug']) && ENVIRONMENT !== 'production') 
                $this->output->enable_profiler(TRUE);
    }
    
    protected function _load_view($view_file, $load_data = FALSE, $return_as_string = FALSE) {
        if ($return_as_string)
        {
            $retval = '';   //do we want to return as array?
            $retval = $this->load->view('common/header', $load_data, $return_as_string);
            $retval .= $this->load->view('common/navbar', $load_data, $return_as_string);
            $retval .= $this->load->view($view_file, $load_data, $return_as_string);
            $retval .= $this->load->view('common/footer', $load_data, $return_as_string);
            
            return $retval;
        }
        else
        {
            $this->load->view('common/header', $load_data);
            $this->load->view('common/navbar', $load_data);
            $this->load->view($view_file, $load_data);
            $this->load->view('common/footer', $load_data);
        }
        
    }

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */