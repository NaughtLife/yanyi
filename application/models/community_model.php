<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community_model extends CI_Model{

	public function check(){
		$data = $this->db->get('community')->result_array();
		return $data;
	}

	public function check_community($cid){
		$data = $this->db->where(array('cid'=>$cid))->get('community')->result_array();
		return $data;
	}

}
