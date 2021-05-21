<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosyalar_model extends CI_Model{

  public $tableName ="dosyalar";

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all($where=array(), $order ="id DESC")
  {
    return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
  }


//aramalı getir.
  public function get_AllWithAllTable($where=array(), $order ="id DESC")
  {

    $this->db->select('
    dosyalar.id,
    dosyalar.url,
    dosyalar.title,
    dosyalar.urun_kodu,
    dosyalar.cas_no,
    dosyalar.createdAt,
    dosyalar.updateAt,
    dosyalar.status,
    dosyalar.isActive,
    dosyalar.yukleyen,
    dosyalar.yay_tarih,
    dosyalar.form_no,
    dosyalar.tip_id,
    firmalar.id AS firma_id,
    firmalar.title AS firma_title,
    firmalar.url AS firma_url,
    tip.id AS tip_id,
    tip.title AS tip_title,
    tip.url AS tip_url
    ');
    $this->db->from('dosyalar');
    $this->db->where($where);
    $this->db->join('firmalar', 'dosyalar.firma_id = firmalar.id');
    $this->db->join('tip', 'dosyalar.tip_id = tip.id');
    $this->db->order_by($order);
    $query = $this->db->get();
    return $query->result();

  }

  public function get_WithAllTable($where=array())
  {

    $this->db->select('
    dosyalar.id,
    dosyalar.url,
    dosyalar.title,
    dosyalar.urun_kodu,
    dosyalar.cas_no,
    dosyalar.createdAt,
    dosyalar.updateAt,
    dosyalar.status,
    dosyalar.isActive,
    dosyalar.yukleyen,
    dosyalar.yay_tarih,
    dosyalar.form_no,
    dosyalar.tip_id,
    firmalar.id AS firma_id,
    firmalar.title AS firma_title,
    firmalar.url AS firma_url,
    tip.id AS tip_id,
    tip.title AS tip_title,
    tip.url AS tip_url
    ');
    $this->db->from('dosyalar');
    $this->db->where($where);
    $this->db->join('firmalar', 'dosyalar.firma_id = firmalar.id');
    $this->db->join('tip', 'dosyalar.tip_id = tip.id');
    $query = $this->db->get();
    return $query->row();

  }



  public function get($where=array())
  {
    return $this->db->where($where)->get($this->tableName)->row();
  }

  public function add($data=array()){
    return $this->db->insert($this->tableName, $data);
  }

  public function update($where=array(), $data=array()){
    return $this->db->where($where)->update($this->tableName, $data);
  }

  public function delete($where=array()){
    return $this->db->where($where)->delete($this->tableName);
  }

  public function search_firma($q){
    //


    return $this->db->select('id, title as text')->like("title", $q)->limit(10)->get("firmalar")->result_array();

  }

}
