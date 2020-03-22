<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod extends CI_Model {

	public function GetTable($tabel)
	{
		$data=$this->db->get($tabel);
		return $data->result_array();
	}
	public function InsertData($tabel, $data) 
	{
		$result = $this->db->insert($tabel, $data);
		return $result;
	}
	public function insert($data)
	{
		$this->db->insert('menu',$data);
	}
}