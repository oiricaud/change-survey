<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
    
    public function __construct() {
	parent::__construct();
	$this->load->library(array('session', 'form_validation'));
	$this->load->helper(array('url', 'form'));
    }
    
    
    public function index($renderData=""){
        if($this->session->userdata('is_logged_in')){
            $this->title = "About - Local Impacts of Global Climate Change";
            $this->keywords = "Climate Change, Survey, UTEP";
            $folder = 'template';
            $this->_render('pages/home', $renderData, $folder);
        } 
        else{
            $folder = 'login';
            $this->_render('login/login',$renderData, $folder);
       }
    }
    
    public function loginFunction($renderData=""){
        $this->title = "About - Local Impacts of Global Climate Change";
        $this->keywords = "Climate Change, Survey, UTEP";
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
        
        //throw error messages if we have any
	if ($this->form_validation->run() == FALSE) {
            echo validation_errors();
        } else { 
            $password  = $this->input->post('password');
            if ($password == "climatesurvey2016"){
                $data = array(
		'is_logged_in' => TRUE);
                $this->session->set_userdata($data);                           
                $folder = 'template';
                $this->_render('pages/home', $renderData, $folder);                            
            }
            else{
                $url = site_url();
                header('Location: ' . $url);
            }
        }
    }
    
    public function logout() {
        $this->session->sess_destroy();
	$url = site_url();
        header('Location: ' . $url);
    }
}
