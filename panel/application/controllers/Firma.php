<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
 public $viewFolder ="";

 public function __construct()
 {
		parent::__construct();

		$this->viewFolder="firma_v";
    $this->load->model("firma_model");

	}


	public function index()
	{
    $viewData = new stdClass();


    /** tablodan verilerin getirilmesi*/
    $items = $this->firma_model->get_all();

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


  public function save(){
    $this->load->library('form_validation');

    // kurallar
    $this->form_validation->set_rules("title","Firma Adı","required|trim");

    $this->form_validation->set_message(
        array(
            "required" => "{field} alanı doldurulmalıdır."
        )
      );

    // form validateon calıştırılıreq
    $validate=$this->form_validation->run();
    if($validate){
      echo "kayıt işlemi başlar";
    }else{
      echo validation_errors();
    }


    // başarılı ise


  }

}
