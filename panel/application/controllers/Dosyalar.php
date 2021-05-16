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


  	public function index(){
      $viewData = new stdClass();


      /** tablodan verilerin getirilmesi*/
      $items = $this->dosyalar_model->get_all(
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
      $this->form_validation->set_rules("title","Dosya Adı","required|trim");
      $this->form_validation->set_rules("firma_id","Firma Adı","required|trim");
      $this->form_validation->set_rules("urun_kodu","Ürün Kodu","required|trim");
      $this->form_validation->set_rules("form_no","Form No","required|trim");
      $this->form_validation->set_rules("yay_tarih","Yayın Tarihi","required|trim");
      $this->form_validation->set_rules("tip_id","Ürün Tipi","required|trim");

      $this->form_validation->set_message(
          array(
              "required" => "{field} alanı doldurulmalıdır."
          )
        );

      // form validateon calıştırılıreq
      $validate=$this->form_validation->run();
      if($validate){
        // kayıt işlemi başlar
        $insert=$this->dosyalar_model->add(
                array(
                  "title" =>$this->input->post("title"),
                  "url" =>seoUrl($this->input->post("title")),
                  "createdAt" =>date("Y-m-d H:i:s"),
                  "isActive" =>1,
                  "firma_id" =>$this->input->post("firma_id"),
                  "urun_kodu" =>$this->input->post("urun_kodu"),
                  "cas_no" =>$this->input->post("cas_no"),
                  "yay_tarih" =>$this->input->post("yay_tarih"),
                  "form_no" =>$this->input->post("form_no"),
                  "tip_id" =>$this->input->post("tip_id"),
                  "yukleyen" =>1,
                  "status" =>1
                )
          );

          // alert sistemi eklenecek
        if($insert)
        {
          echo "kayıt eklendi";
          redirect(base_url("dosyalar"));
        }else{
          echo "kayıt nay nayda nay";
          redirect(base_url("dosyalar/new_form"));
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
      $item =  $this->dosyalar_model->get(
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
      $this->form_validation->set_rules("title","Dosya Adı","required|trim");
      $this->form_validation->set_rules("firma_id","Firma Adı","required|trim");
      $this->form_validation->set_rules("urun_kodu","Ürün Kodu","required|trim");
      $this->form_validation->set_rules("form_no","Form No","required|trim");
      $this->form_validation->set_rules("yay_tarih","Yayın Tarihi","required|trim");
      $this->form_validation->set_rules("tip_id","Ürün Tipi","required|trim");

      $this->form_validation->set_message(
          array(
              "required" => "{field} alanı doldurulmalıdır."
          )
        );

      // form validateon calıştırılıreq
      $validate=$this->form_validation->run();
      if($validate){
        // kayıt işlemi başlar
        $update=$this->dosyalar_model->update(
                //nereden
                array(
                  "id" => $id
                ),
                //neyi güncelle
                array(

                  "title" =>$this->input->post("title"),
                  "url" =>seoUrl($this->input->post("title")),
                  "updateAt" =>date("Y-m-d H:i:s"),

                  "firma_id" =>$this->input->post("firma_id"),
                  "urun_kodu" =>$this->input->post("urun_kodu"),
                  "cas_no" =>$this->input->post("cas_no"),
                  "yay_tarih" =>$this->input->post("yay_tarih"),
                  "form_no" =>$this->input->post("form_no"),
                  "tip_id" =>$this->input->post("tip_id")

                )
          );

          // alert sistemi eklenecek
        if($update)
        {
          echo "kayıt güncellendi";
          redirect(base_url("dosyalar"));
        }else{
          echo "kayıt nay nayda nay güncellenmedi";
          redirect(base_url("dosyalar"));
        }

      }else{
        //echo validation_errors();
        $viewData = new stdClass();

        /** tablodan verinin getirilmesi*/
        $item =  $this->dosyalar_model->get(
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
      $delete = $this->dosyalar_model->delete(
          array(
            "id" => $id
          )
      );

      // TODO alert sistemei
      if($delete){
        redirect(base_url("dosyalar"));
      }else{
        redirect(base_url("dosyalar"));
      }

    }

    public function isActiveSetter($id){
      if($id){
        $isActive=($this->input->post("data") == "true") ? 1 : 0;

        $this->dosyalar_model->update(
          array(
            "id"  => $id
          ),
          array(
            "isActive" => $isActive
          )

        );


      }

    }

    public function firma_ara(){

      $term = $this->input->get("term");

      if(!empty($term)){
        $json = $this->dosyalar_model->search_firma($term);
		}

      /** tablodan verinin getirilmesi*/

      echo json_encode($json);


    }



  }
