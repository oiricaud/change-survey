<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Home extends MY_Controller {

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

	public function preSurvey($renderData=""){
            if($this->session->userdata('is_logged_in')){
                $this->title = "Pre-Survey - Local Impacts of Global Climate Change";
                $this->keywords = "https://utep.qualtrics.com/SE/?SID=SV_1MlAUT4LyS8qEIZ";
                $folder = 'template';
                $this->_render('pages/presurvey', $renderData, $folder);
            }
            else{
                $folder = 'login';
                $this->_render('login/login',$renderData, $folder);
            }
	}

	public function co2Questions($renderData=""){
		$this->title= "CO2 Process - Local Impacts of Global Climate Change";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/co2-questions', $renderData, $folder);
	}
	
	public function climateData($renderData=""){
        $this->title= "Climate Data - Local Impacts of Global Climate Change";
        $this->keywords = "Climate Change, Survey, UTEP";
		$folder = 'template';
		$this->_render('pages/climate-data', $renderData, $folder);
	}

	public function bioticImpacts($renderData=""){
        $this->title= "Biotic Impacts - Local Impacts of Global Climate Change";
        $this->keywords = "Climate Change, Survey, UTEP";
		$folder = 'template';
		$this->_render('pages/biotic-impacts', $renderData, $folder);
	}

    public function postSurvey($renderData=""){
        $this->title= "Post Survey - Local Impacts of Global Climate Change";
        $this->keywords = "Climate Change, Survey, UTEP";
		$folder = 'template';
		$this->_render('pages/postSurvey', $renderData, $folder);
	}

    public function thankYou($renderData=""){
        $this->title= "Thank You - Local Impacts of Global Climate Change";
        $this->keywords = "Climate Change, Survey, UTEP";
		$folder = 'template';
		$this->_render('pages/thank-you', $renderData, $folder);
	}

    public function randomID($renderData=""){
        $this->title= "Random ID Survey key";
        $this->keywords =  substr($this->session->userdata('session_id'), 27);
        $folder = 'random';
        $this->_render('pages/randomID', $renderData, $folder);
    }
}
