<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('community_model','community');
		$data['community'] = $this->community->check();
		$this->load->view('index/home.html', $data);
	}

	public function community()
	{
		$cid = $_GET['cid'];
		$this->load->model('community_model','community');
		$data['community'] = $this->community->check_community($cid);

		$this->load->model('doctor_model','doctor');
		$data['doctor'] = $this->doctor->check_com_doc($cid);

		$this->load->view('index/community.html', $data);
	}

	public function doctor()
	{
		$id = $_GET['id'];
		$this->load->model('doctor_model','doctor');
		$data['doctor'] = $this->doctor->check_doctor($id);
		$this->load->view('index/doctor.html', $data);
	}
}