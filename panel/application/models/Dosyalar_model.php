<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosyalar_model extends CI_Model{

  public $tableName ="dosyalar";

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    return $this->db->get($this->tableName)->result();
  }

}