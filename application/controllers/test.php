<?php
// This method is to help me understand more how to pass variables // 
class Test extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
		$BB['bb'] = "text";
		$BB['boa'] = "snake";
		$BB['snake'] = "animal";
		$this->load->view('pages/test', $BB);
	}
	public function comments(){
		echo 'Look at this';
	}
}

	/*
	public function index(){
		$BB['bb'] = "text";
		$BB['boa'] = "snake";
		$BB['snake'] = "animal";
		$this->load->view('index.html', $BB);
	}
       */

?>

