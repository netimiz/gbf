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


	public function index(){
    $viewData = new stdClass();


    /** tablodan verilerin getirilmesi*/
    $items = $this->firma_model->get_all(
      array(),
      "id DESC"
    );

    /** viewe gönderilecek dataların set edilmesi */
    $viewData->viewFolder =$this->viewFolder;
    $viewData->subViewFolder= "list";
    $viewData->items=$items;




    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

	}

  public function new_form()  {
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
      // kayıt işlemi başlar
      $insert=$this->firma_model->add(
              array(
                "title" =>$this->input->post("title"),
                "url" =>seoUrl($this->input->post("title")),
                //"createdAt" =>date("d-m-Y H:i:s"),
                "isActive" =>1
              )
        );

        // alert sistemi eklenecek
      if($insert)
      {
        echo "kayıt eklendi";
        redirect(base_url("firma"));
      }else{
        echo "kayıt nay nayda nay";
        redirect(base_url("firma/new_form"));
      }

    }else{
      //echo validation_errors();
      $viewData = new stdClass();
      /** viewe gönderilecek dataların set edilmesi */
      $viewData->viewFolder=$this->viewFolder;
      $viewData->subViewFolder= "add";

      $viewData->form_error =true;

      $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }


    // başarılı ise


  }

  public function update_form($id){
    $viewData = new stdClass();

    /** tablodan verinin getirilmesi*/
    $item =  $this->firma_model->get(
      array(
        "id"=>$id,
      )
    );

    /** viewe gönderilecek dataların set edilmesi */
    $viewData->viewFolder =$this->viewFolder;
    $viewData->subViewFolder= "update";
    $viewData->item=$item;

    $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
  }

  public function update($id){
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
      // kayıt işlemi başlar
      $update=$this->firma_model->update(
              //nereden
              array(
                "id" => $id
              ),
              //neyi güncelle
              array(
                "title" =>$this->input->post("title"),
                "url" =>seoUrl($this->input->post("title"))
              )
        );

        // alert sistemi eklenecek
      if($update)
      {
        echo "kayıt güncellendi";
        redirect(base_url("firma"));
      }else{
        echo "kayıt nay nayda nay güncellenmedi";
        redirect(base_url("firma"));
      }

    }else{
      //echo validation_errors();
      $viewData = new stdClass();

      /** tablodan verinin getirilmesi*/
      $item =  $this->firma_model->get(
        array(
          "id"=>$id,
        )
      );

      /** viewe gönderilecek dataların set edilmesi */
      $viewData->viewFolder=$this->viewFolder;
      $viewData->subViewFolder= "update";
      $viewData->form_error =true;
      $viewData->item=$item;

      $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }


    // başarılı ise


  }

  public function delete($id){
    $delete = $this->firma_model->delete(
        array(
          "id" => $id
        )
    );

    // TODO alert sistemei
    if($delete){
      redirect(base_url("firma"));
    }else{
      redirect(base_url("firma"));
    }

  }

  public function isActiveSetter($id){
    if($id){
      $isActive=($this->input->post("data") == "true") ? 1 : 0;

      $this->firma_model->update(
        array(
          "id"  => $id
        ),
        array(
          "isActive" => $isActive
        )

      );


    }

  }


}
