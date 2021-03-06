<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tip extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
 public $viewFolder ="";

 public function __construct()
 {
		parent::__construct();

		$this->viewFolder="tip_v";
    $this->load->model("tip_model");

	}


	public function index(){
    $viewData = new stdClass();


    /** tablodan verilerin getirilmesi*/
    $items = $this->tip_model->get_all(
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
    $this->form_validation->set_rules("title","Tip Adı","required|trim");

    $this->form_validation->set_message(
        array(
            "required" => "{field} alanı doldurulmalıdır."
        )
      );

    // form validateon calıştırılıreq
    $validate=$this->form_validation->run();
    if($validate){
      // kayıt işlemi başlar
      $insert=$this->tip_model->add(
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
        redirect(base_url("tip"));
      }else{
        echo "kayıt nay nayda nay";
        redirect(base_url("tip/new_form"));
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





  }

  public function update_form($id){
    $viewData = new stdClass();

    /** tablodan verinin getirilmesi*/
    $item =  $this->tip_model->get(
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
    $this->form_validation->set_rules("title","Tip Adı","required|trim");

    $this->form_validation->set_message(
        array(
            "required" => "{field} alanı doldurulmalıdır."
        )
      );

    // form validateon calıştırılıreq
    $validate=$this->form_validation->run();
    if($validate){
      // kayıt işlemi başlar
      $update=$this->tip_model->update(
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
        redirect(base_url("tip"));
      }else{
        echo "kayıt nay nayda nay güncellenmedi";
        redirect(base_url("tip"));
      }

    }else{
      //echo validation_errors();
      $viewData = new stdClass();

      /** tablodan verinin getirilmesi*/
      $item =  $this->tip_model->get(
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
    $delete = $this->tip_model->delete(
        array(
          "id" => $id
        )
    );

    // TODO alert sistemei
    if($delete){
      redirect(base_url("tip"));
    }else{
      redirect(base_url("tip"));
    }

  }

  public function isActiveSetter($id){
    if($id){
      $isActive=($this->input->post("data") == "true") ? 1 : 0;

      $this->tip_model->update(
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
