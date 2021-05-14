<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tip_model extends CI_Model{

  public $tableName ="tip";

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all($where=array(), $order ="id DESC")
  {
    return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
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
}
