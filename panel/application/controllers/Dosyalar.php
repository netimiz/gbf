<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosyalar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
 public $viewFolder ="";

 public function __construct()
 {
		parent::__construct();
		$this->viewFolder="dosyalar_v";
	}


	public function index()
	{
    $viewData = new stdClass();
    $viewData->viewFolder =$this->viewFolder;
    $viewData->subViewFolder= "list";

		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

	}



}
