<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_model extends CI_Model{

	public function check(){
		$data = $this->db->get('doctor')->result_array();
		return $data;
	}

	public function check_com_doc($cid){
		$data = $this->db->where(array('cid'=>$cid))->get('doctor')->result_array();
		return $data;
	}

	public function check_doctor($id){
		$data = $this->db->where(array('id'=>$id))->get('doctor')->result_array();
		return $data;
	}

}
