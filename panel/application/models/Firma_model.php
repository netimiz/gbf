<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firma_model extends CI_Model{

  public $tableName ="firmalar";

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    return $this->db->get($this->tableName)->result();
  }

  public function add($data=array()){
    return $this->db->insert($this->tableName, $data);
  }

}
