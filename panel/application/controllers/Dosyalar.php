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
    $this->load->model("dosyalar_model");

	}


	public function index()
	{
    $viewData = new stdClass();


    /** tablodan verilerin getirilmesi*/
    $items = $this->dosyalar_model->get_all();

    /** viewe gönderilecek dataların set edilmesi */
    $viewData->viewFolder =$this->viewFolder;
    $viewData->subViewFolder= "list";
    $viewData->items=$items;




    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

	}

  public function new_form()
  {
    $viewData = new stdClass();
    /** viewe gönderilecek dataların set edilmesi */
    $viewData->viewFolder =$this->viewFolder;
    $viewData->subViewFolder= "add";

    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

  }

}
